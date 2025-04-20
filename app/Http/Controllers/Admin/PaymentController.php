<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\DiscountVoucher;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Cart;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$clientKey = config('services.midtrans.client_key');
        Config::$isProduction = config('services.midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function index()
    {
        $payments = Payment::with(['user', 'transaction', 'shippingAddress'])->latest()->get();
        $totalTransactions = Transaction::count();
        $totalBalance = Payment::sum('total');
        $yearlyBalance = Payment::whereYear('created_at', date('Y'))->sum('total');
        $monthlyBalance = Payment::whereYear('created_at', date('Y'))->whereMonth('created_at', date('m'))->sum('total');
        $weeklyBalance = Payment::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->sum('total');

        return view('admin.payments.index', compact(
            'payments', 'totalTransactions', 'totalBalance',
            'yearlyBalance', 'monthlyBalance', 'weeklyBalance'
        ));
    }

    public function create()
    {
        $users = User::all();
        $transactions = Transaction::all();
        return view('admin.payments.create', compact('users', 'transactions'));
    }
    

    public function updateStatusFromClient(Request $request)
    {
        $paymentId = $request->input('payment_id');

        if (!$paymentId) {
            return response()->json(['error' => 'ID pembayaran tidak ditemukan'], 400);
        }

        $payment = Payment::where('payment_id', $paymentId)->first();

        if (!$payment) {
            return response()->json(['error' => 'Data pembayaran tidak ditemukan'], 404);
        }

        DB::beginTransaction();

        try {
            $payment->payment_status = 'paid';
            $payment->save();

            $transaction = Transaction::find($payment->transaction_id);
            if ($transaction) {
                $transaction->status = 'paid';
                $transaction->save();
            } else {
                DB::rollBack();
                return response()->json(['error' => 'Data transaksi tidak ditemukan'], 404);
            }

            DB::commit();
            return response()->json(['message' => 'Status pembayaran berhasil diperbarui.'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Terjadi kesalahan, silakan coba lagi.'], 500);
        }
    }

    public function edit(Payment $payment)
    {
        $users = User::all();
        $transactions = Transaction::all();
        return view('admin.payments.edit', compact('payment', 'users', 'transactions'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'transaction_id' => 'required|exists:transactions,id',
            'payment_status' => 'required|in:pending,success,failed',
            'total' => 'required|numeric|min:0',
        ]);

        $payment->update([
            'user_id' => $request->user_id,
            'transaction_id' => $request->transaction_id,
            'payment_status' => $request->payment_status,
            'total' => $request->total,
        ]);

        return redirect()->route('payments.index')->with('success', 'Pembayaran berhasil diperbarui.');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index')->with('success', 'Pembayaran berhasil dihapus.');
    }

    public function show(Payment $payment)
    {
        return view('admin.payments.show', compact('payment'));
    }

    public function downloadInvoice(Payment $payment)
    {
        $pdf = Pdf::loadView('admin.payments.invoice', compact('payment'));
        return $pdf->download('invoice-' . $payment->payment_id . '.pdf');
    }

    public function createMidtransTransaction(Request $request)
    {
        // Validasi input request
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'transaction_id' => 'required|exists:transactions,id',
            'gross_amount' => 'required|numeric|min:1',
            'items' => 'required|array',
            'items.*.id' => 'required|string',
            'items.*.price' => 'required|numeric|min:1',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.name' => 'required|string',
            'customer_details' => 'required|array',
            'customer_details.first_name' => 'required|string',
            'customer_details.last_name' => 'nullable|string',
            'customer_details.email' => 'required|email',
            'customer_details.phone' => 'nullable|string', // Pastikan valid jika ada
        ]);

        try {
            // Ambil transaksi dan pengguna dari database
            $transaction = Transaction::findOrFail($request->transaction_id);
            $user = User::findOrFail($request->user_id);

            // Ambil semua item dalam keranjang
            $cartItems = Cart::where('user_id', $user->id)->get();
        
            if ($cartItems->isEmpty()) {
                return redirect()->back()->with('error', 'Keranjang kamu masih kosong.');
            }
        
            // Menghitung total harga produk dan ongkir
            $total = $cartItems->sum(function ($item) {
                return ($item->price ?? 0) * ($item->quantity ?? 0);
            });
            

            // Siapkan data untuk Midtrans
            $params = [
                'transaction_details' => [
                    'order_id' => $transaction->transaction_code,
                    'gross_amount' => $total,
                ],
                'item_details' => $request->items,
                'customer_details' => [
                    'first_name' => $user->name,
                    'last_name' => $request->customer_details['last_name'] ?? '',
                    'email' => $user->email,
                    'phone' => $request->customer_details['phone'] ?? '', // Pastikan phone ada jika diisi
                ],
            ];

            // Ambil Snap Token dari Midtrans
            $snapToken = Snap::getSnapToken($params);

            // Buat entri pembayaran di database
            $paymentId = 'PAY-' . strtoupper(uniqid());
            Payment::create([
                'payment_id' => $paymentId,
                'user_id' => $user->id,
                'transaction_id' => $transaction->id,
                'snap_token' => $snapToken,
                'payment_status' => 'pending',
                'gross_amount' => $total,
            ]);

            // Kembalikan snap_token dan transaction_code untuk diproses frontend
            return response()->json([
                'snap_token' => $snapToken,
                'transaction_code' => $transaction->transaction_code
            ]);

        } catch (\Exception $e) {
            // Tangani error yang lebih spesifik
            return response()->json(['error' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }

    public function createPayment(Request $request)
    {
        $user = Auth::user();
    
        if (!$user) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }
    
        $request->validate([
            'shipping_address_id' => 'required|exists:shipping_addresses,id'
        ]);
    
        // Ambil semua item dalam keranjang
        $cartItems = Cart::where('user_id', $user->id)->get();
    
        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Keranjang kamu masih kosong.');
        }
    
        // Menghitung total harga produk dan ongkir
        $total = $cartItems->sum(function ($item) {
            return ($item->price ?? 0) * ($item->quantity ?? 0);
        });
        
    
        // Membuat transaksi baru
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'shipping_address_id' => $request->shipping_address_id,
            'discount_voucher_id' => $request->discount_voucher_id ?? null,
            'transaction_code' => 'TRX-' . strtoupper(Str::random(10)),
            'total_amount' => $total, // Total yang sudah dihitung setelah diskon dan ongkir
            'status' => 'pending'
        ]);
    
        // Membuat payment ID
        $paymentId = 'PAY-' . strtoupper(Str::random(10));
    


        // Persiapkan parameter untuk Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => $paymentId,
                'gross_amount' => $total, // Total harga setelah diskon dan ongkir
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'email' => $user->email,
            ]
        ];
    
        try {
            // Mendapatkan snap token dari Midtrans
            $snapToken = Snap::getSnapToken($params);
    
            // Menyimpan informasi pembayaran ke database
            Payment::create([
                'user_id' => $user->id,
                'transaction_id' => $transaction->id,
                'shipping_address_id' => $request->shipping_address_id,
                'payment_id' => $paymentId,
                'snap_token' => $snapToken,
                'payment_status' => 'pending',
                'total' => $total, // Total pembayaran yang sudah dihitung
            ]);
    
            // Menghapus item keranjang setelah pembayaran dibuat
            Cart::where('user_id', $user->id)->delete();
    
            return redirect()->route('keranjang')->with('success', 'Pembayaran berhasil dibuat.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal membuat pembayaran: ' . $e->getMessage());
        }
    }

    public function updatePaymentStatusAdmin(Request $request, Payment $payment)
    {
        $request->validate([
            'payment_status' => 'required|in:pending,success,failed',
        ]);

        $payment->update(['payment_status' => $request->payment_status]);

        $transaction = Transaction::find($payment->transaction_id);
        if ($transaction) {
            $transaction->update(['status' => $request->payment_status]);
            if ($request->payment_status === 'success') {
                Cart::where('user_id', $transaction->user_id)->delete();
            }
        }

        return redirect()->route('payments.index')->with('success', 'Status pembayaran berhasil diperbarui.');
    }
}
