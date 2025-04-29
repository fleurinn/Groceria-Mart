<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\JsonResponse; 
use App\Models\DiscountVoucher;
use App\Models\ShippingAddress;
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

    public function downloadInvoice($id)
    {
        $payment = Payment::findOrFail($id);
        // Generate PDF
        $pdf = PDF::loadView('invoice', compact('payment'));
        return $pdf->download('invoice-' . $payment->payment_id . '.pdf');
    }

    
    public function createPayment(Request $request): JsonResponse
    {
        try {
            if (!auth()->check()) {
                return response()->json(['success' => false, 'message' => 'Silakan login.'], 401);
            }

            $user = auth()->user();
            $carts = Cart::with('product')->where('user_id', $user->id)->get();

            if ($carts->isEmpty()) {
                return response()->json(['success' => false, 'message' => 'Keranjang kosong.'], 404);
            }

            // Hitung total & detail item
            $itemDetails = [];
            $total = 0;

            foreach ($carts as $cart) {
                $itemTotal = $cart->price * $cart->quantity;
                $total += $itemTotal;
                $itemDetails[] = [
                    'id' => 'ITEM-' . $cart->id,
                    'price' => $cart->price,
                    'quantity' => $cart->quantity,
                    'name' => $cart->product->name,
                ];
            }

            // Buat ID unik transaksi
            $orderId = 'ORDER-' . time();

            // Konfigurasi Midtrans
            Config::$serverKey = config('services.midtrans.server_key');
            Config::$isProduction = false;
            Config::$isSanitized = true;
            Config::$is3ds = true;

            // Cek config serverKey dulu
            if (!Config::$serverKey) {
                return response()->json(['success' => false, 'message' => 'Server key Midtrans tidak ditemukan.'], 500);
            }

            $params = [
                'transaction_details' => [
                    'order_id' => $orderId,
                    'gross_amount' => $total,
                ],
                'item_details' => $itemDetails,
                'customer_details' => [
                    'first_name' => $user->first_name ?? $user->name,
                    'last_name' => $user->last_name ?? '',
                    'email' => $user->email,
                    'phone' => optional($user->shippingAddresses)->phone ?? '',
                ],
            ];

            // Dapatkan Snap Token
            $snapToken = Snap::getSnapToken($params);

            // Simpan ke database
            $payment = Payment::create([
                'user_id' => $user->id,
                'shipping_address_id' => optional($user->shippingAddresses)->id,
                'payment_id' => $orderId,
                'snap_token' => $snapToken,
                'status_pengiriman' => 'proses',
                'payment_status' => 'pending',
                'total' => $total
            ]);

            return response()->json([
                'success' => true,
                'data' => [
                    'snap_token' => $snapToken,
                    'payment_id' => $payment->id
                ]
            ]);
        } catch (\Exception $e) {
            \Log::error('Gagal membuat Snap Token: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan saat memproses pembayaran. Silakan coba lagi nanti.'], 500);
        }
    }

    public function updatePaymentStatus(Request $request)
    {
        try {
            $data = $request->all();

            // Ambil user yang sedang login
            $user = auth()->user();

            // Cek apakah ada transaksi_id dari Midtrans
            if (!isset($data['payment_id'])) {
                return response()->json(['error' => 'ID payment tidak ditemukan.'], 400);
            }

            // Cari payment berdasarkan transaction_id (jika kamu menyimpan payment_id dari Midtrans sebagai payment_id)
            $payment = Payment::where('payment_id', $data['payment_id'])->first();

            if (!$payment) {
                return response()->json(['error' => 'Pembayaran tidak ditemukan.'], 404);
            }

            // Pastikan hanya bisa update payment milik user yang login
            if ($payment->user_id !== $user->id) {
                return response()->json(['error' => 'Akses ditolak.'], 403);
            }

            // Update status pembayaran menjadi success
            $payment->update([
                'payment_status' => 'success'
            ]);

            // Kosongkan keranjang user
            Cart::where('user_id', $user->id)->delete();

            return response()->json(['message' => 'Status pembayaran berhasil diperbarui.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal memperbarui status pembayaran: ' . $e->getMessage()], 500);
        }
    }

    public function userOrderHistory(Request $request)
    {
        $user = Auth::user(); // Ambil user yang sedang login

        $payments = Payment::where('user_id', $user->id)
            ->when($request->status_pengiriman, function ($query) use ($request) {
                $query->where('status_pengiriman', $request->status_pengiriman);
            })
            ->with('user')
            ->get(); // Ambil riwayat pembayaran miliknya, dengan filter jika ada

        return view('landing.pages.order.order-index', compact('payments'));
    }


public function updateStatus(Request $request, $payment_id)
{
    $payment = Payment::findOrFail($payment_id);

    // Validasi input
    $request->validate([
        'status_pengiriman' => 'required|string|in:selesai,sukses', // hanya izinkan 'selesai' atau 'sukses'
        'status_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Cek status sebelumnya
    if ($payment->status_pengiriman !== 'dalam perjalanan') {
        return redirect()->back()->with('error', 'Status hanya bisa diubah dari "dalam perjalanan" ke "selesai" atau "sukses".');
    }

    // Menyimpan gambar jika ada
    if ($request->hasFile('image')) {
        $imagePath = $request->file('status_image')->store('payment-status-images', 'public');
        $payment->status_image = $imagePath;
    }

    // Update status_pengiriman
    $payment->status_pengiriman = $request->status_pengiriman;
    $payment->save();

    return redirect()->route('user.order.kurir')->with('success', 'Status Pengiriman berhasil diperbarui!');
}




public function userOrderKurir(Request $request)
{
    $payments = Payment::with(['user', 'shippingAddress'])->latest()->get();

    return view('admin.pages.kurir.index', compact('payments'));
}

public function index()
{
    $payments = Payment::with(['user', 'transaction', 'shippingAddress'])->latest()->get();
    return view('admin.pages.payments.payment-history', compact('payments'));
}

public function indexKurir()
{
    $payments = Payment::with(['user', 'transaction', 'shippingAddress'])->latest()->get();
    return view('admin.dashboard.courier', compact('payments'));
}

    public function create()
    {
        $users = User::all();
        $transactions = Transaction::all();
        return view('admin.payments.create', compact('users', 'transactions'));
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

   

    // public function createMidtransTransaction(Request $request)
    // {
    //     // Validasi input request
    //     $request->validate([
    //         'user_id' => 'required|exists:users,id',
    //         'transaction_id' => 'required|exists:transactions,id',
    //         'gross_amount' => 'required|numeric|min:1',
    //         'items' => 'required|array',
    //         'items.*.id' => 'required|string',
    //         'items.*.price' => 'required|numeric|min:1',
    //         'items.*.quantity' => 'required|integer|min:1',
    //         'items.*.name' => 'required|string',
    //         'customer_details' => 'required|array',
    //         'customer_details.first_name' => 'required|string',
    //         'customer_details.last_name' => 'nullable|string',
    //         'customer_details.email' => 'required|email',
    //         'customer_details.phone' => 'nullable|string', // Pastikan valid jika ada
    //     ]);

    //     try {
    //         // Ambil transaksi dan pengguna dari database
    //         $transaction = Transaction::findOrFail($request->transaction_id);
    //         $user = User::findOrFail($request->user_id);

    //         // Ambil semua item dalam keranjang
    //         $cartItems = Cart::where('user_id', $user->id)->get();
        
    //         if ($cartItems->isEmpty()) {
    //             return redirect()->back()->with('error', 'Keranjang kamu masih kosong.');
    //         }
        
    //         // Menghitung total harga produk dan ongkir
    //         $total = $cartItems->sum(function ($item) {
    //             return ($item->price ?? 0) * ($item->quantity ?? 0);
    //         });
            

    //         // Siapkan data untuk Midtrans
    //         $params = [
    //             'transaction_details' => [
    //                 'order_id' => $transaction->transaction_code,
    //                 'gross_amount' => $total,
    //             ],
    //             'item_details' => $request->items,
    //             'customer_details' => [
    //                 'first_name' => $user->name,
    //                 'last_name' => $request->customer_details['last_name'] ?? '',
    //                 'email' => $user->email,
    //                 'phone' => $request->customer_details['phone'] ?? '', // Pastikan phone ada jika diisi
    //             ],
    //         ];

    //         // Ambil Snap Token dari Midtrans
    //         $snapToken = Snap::getSnapToken($params);

    //         // Buat entri pembayaran di database
    //         $paymentId = 'PAY-' . strtoupper(uniqid());
    //         Payment::create([
    //             'payment_id' => $paymentId,
    //             'user_id' => $user->id,
    //             'transaction_id' => $transaction->id,
    //             'snap_token' => $snapToken,
    //             'payment_status' => 'pending',
    //             'gross_amount' => $total,
    //         ]);

    //         // Kembalikan snap_token dan transaction_code untuk diproses frontend
    //         return response()->json([
    //             'snap_token' => $snapToken,
    //             'transaction_code' => $transaction->transaction_code
    //         ]);

    //     } catch (\Exception $e) {
    //         // Tangani error yang lebih spesifik
    //         return response()->json(['error' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
    //     }
    // }

    // public function createPayment(Request $request)
    // {
    //     $user = Auth::user();
    
    //     if (!$user) {
    //         return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
    //     }
    
    //     $request->validate([
    //         'shipping_address_id' => 'required|exists:shipping_addresses,id'
    //     ]);
    
    //     // Ambil semua item dalam keranjang
    //     $cartItems = Cart::where('user_id', $user->id)->get();
    
    //     if ($cartItems->isEmpty()) {
    //         return redirect()->back()->with('error', 'Keranjang kamu masih kosong.');
    //     }
    
    //     // Menghitung total harga produk dan ongkir
    //     $total = $cartItems->sum(function ($item) {
    //         return ($item->price ?? 0) * ($item->quantity ?? 0);
    //     });
        
    
    //     // Membuat transaksi baru
    //     $transaction = Transaction::create([
    //         'user_id' => $user->id,
    //         'shipping_address_id' => $request->shipping_address_id,
    //         'discount_voucher_id' => $request->discount_voucher_id ?? null,
    //         'transaction_code' => 'TRX-' . strtoupper(Str::random(10)),
    //         'total_amount' => $total, // Total yang sudah dihitung setelah diskon dan ongkir
    //         'status' => 'pending'
    //     ]);
    
    //     // Membuat payment ID
    //     $paymentId = 'PAY-' . strtoupper(Str::random(10));
    


    //     // Persiapkan parameter untuk Midtrans
    //     $params = [
    //         'transaction_details' => [
    //             'order_id' => $paymentId,
    //             'gross_amount' => $total, // Total harga setelah diskon dan ongkir
    //         ],
    //         'customer_details' => [
    //             'first_name' => $user->name,
    //             'email' => $user->email,
    //         ]
    //     ];
    
    //     try {
    //         // Mendapatkan snap token dari Midtrans
    //         $snapToken = Snap::getSnapToken($params);
    
    //         // Menyimpan informasi pembayaran ke database
    //         Payment::create([
    //             'user_id' => $user->id,
    //             'transaction_id' => $transaction->id,
    //             'shipping_address_id' => $request->shipping_address_id,
    //             'payment_id' => $paymentId,
    //             'snap_token' => $snapToken,
    //             'payment_status' => 'pending',
    //             'total' => $total, // Total pembayaran yang sudah dihitung
    //         ]);
    
    //         // Menghapus item keranjang setelah pembayaran dibuat
    //         Cart::where('user_id', $user->id)->delete();
    
    //         return redirect()->route('keranjang')->with('success', 'Pembayaran berhasil dibuat.');
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'Gagal membuat pembayaran: ' . $e->getMessage());
    //     }
    // }

    // public function createPayment(Request $request): JsonResponse
    // {
    //     try {
    //         if (!auth()->check()) {
    //             return response()->json([
    //                 'success' => false,
    //                 'message' => 'Silakan login terlebih dahulu.'
    //             ], 401);
    //         }
    
    //         $user = auth()->user();
    //         $carts = Cart::with('product')->where('user_id', $user->id)->get();
    
    //         if ($carts->isEmpty()) {
    //             return response()->json([
    //                 'success' => false,
    //                 'message' => 'Keranjang kamu masih kosong.'
    //             ], 404);
    //         }
    
    //         $itemDetails = [];
    //         $total = 0;
    
    //         foreach ($carts as $cart) {
    //             $itemTotal = $cart->price * $cart->quantity;
    //             $total += $itemTotal;
    
    //             $itemDetails[] = [
    //                 'id' => 'ITEM-' . $cart->id,
    //                 'price' => $cart->price,
    //                 'quantity' => $cart->quantity,
    //                 'name' => $cart->product->name,
    //             ];
    //         }
    
    //         // Buat kode transaksi unik
    //         $orderId = 'ORDER-' . time();
    
    //         // Konfigurasi Midtrans
    //         Config::$serverKey = config('services.midtrans.server_key');
    //         Config::$isProduction = false;
    //         Config::$isSanitized = true;
    //         Config::$is3ds = true;
    
    //         // Buat parameter Snap
    //         $params = [
    //             'transaction_details' => [
    //                 'order_id' => $orderId,
    //                 'gross_amount' => $total,
    //             ],
    //             'item_details' => $itemDetails,
    //             'customer_details' => [
    //                 'first_name' => $user->first_name,
    //                 'last_name' => $user->last_name,
    //                 'email' => $user->email,
    //                 'phone' => optional($user->shippingAddresses)->phone ?? '',
    //             ]
    //         ];
    
    //         $snapToken = Snap::getSnapToken($params);
    
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Token pembayaran berhasil dibuat.',
    //             'data' => [
    //                 'snap_token' => $snapToken
    //             ]
    //         ], 200);
    
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Gagal membuat token pembayaran: ' . $e->getMessage()
    //         ], 500);
    //     }
    // }


    

    

    // public function updatePaymentStatus(Request $request)
    // {
    //     try {
    //         $data = $request->all();

    //         $user = auth()->user();

    //         // Cek apakah transaksi berdasarkan order_id sudah ada
    //         $payment = Payment::where('payment_id', $data['order_id'])->first();

    //         if (!$payment) {
    //             return response()->json(['error' => 'Pembayaran tidak ditemukan.'], 404);
    //         }

    //         // Update status pembayaran
    //         $payment->update([
    //             'payment_status' => 'success',
    //         ]);

    //         // Update status transaksi
    //         $transaction = $payment->transaction;
    //         if ($transaction) {
    //             $transaction->update(['status' => 'success']);
    //         }

    //         // Kosongkan keranjang
    //         Cart::where('user_id', $user->id)->delete();

    //         return response()->json(['message' => 'Status pembayaran berhasil diperbarui.']);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Gagal memperbarui status pembayaran: ' . $e->getMessage()], 500);
    //     }
    // }
}