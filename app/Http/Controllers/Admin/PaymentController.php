<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Cart;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    
    public function updateStatusFromClient(Request $request)
    {
        $data = $request->all();

        // Ambil ID transaksi dari Snap (order_id di Midtrans = payment_id kita)
        $paymentId = $data['order_id'] ?? null;

        if (!$paymentId) {
            return response()->json(['error' => 'ID pembayaran tidak ditemukan'], 400);
        }

        // Temukan pembayaran berdasarkan payment_id
        $payment = Payment::where('payment_id', $paymentId)->first();

        if (!$payment) {
            return response()->json(['error' => 'Data pembayaran tidak ditemukan'], 404);
        }

        // Update status pembayaran
        $payment->payment_status = 'paid';
        $payment->save();

        // Update juga status transaksi
        $transaction = Transaction::find($payment->transaction_id);
        if ($transaction) {
            $transaction->status = 'paid';
            $transaction->save();
        }

        return response()->json(['message' => 'Status pembayaran berhasil diperbarui.'], 200);
    }

    public function __construct()
    {
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$clientKey = env('MIDTRANS_CLIENT_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    // Menampilkan daftar pembayaran dengan detail transaksi
    public function index()
    {
        $payments = Payment::with(['user', 'transaction', 'shippingAddress'])->latest()->get(); // Tambahkan relasi ke shippingAddress
        $totalTransactions = Transaction::count(); // Gunakan Transaction
        $totalBalance = Payment::sum('total');
        $yearlyBalance = Payment::whereYear('created_at', date('Y'))->sum('total');
        $monthlyBalance = Payment::whereYear('created_at', date('Y'))->whereMonth('created_at', date('m'))->sum('total');
        $weeklyBalance = Payment::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->sum('total');

        return view('admin.payments.index', compact(
            'payments',
            'totalTransactions',
            'totalBalance',
            'yearlyBalance',
            'monthlyBalance',
            'weeklyBalance'
        ));
    }

    public function create()
    {
        $users = User::all();
        $transactions = Transaction::all(); // Kirimkan data transaksi
        return view('admin.payments.create', compact('users', 'transactions'));
    }


    // Ini payment yang udah bisa nampilin , tinggal masukin aja ke database
    public function createPayment(Request $request)
    {
        $user = Auth::user();

        // Ambil semua item dari keranjang user
        $cartItems = Cart::where('user_id', $user->id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Keranjang kamu masih kosong.');
        }

        // Hitung total harga + ongkir
        $total = 0;
        foreach ($cartItems as $item) {
            $total += ($item->price * $item->quantity) + $item->shipping_cost;
        }

        // Buat transaksi baru
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'shipping_address_id' => $request->shipping_address_id,  // Tambahkan shipping_address_id
            'discount_voucher_id' => $request->discount_voucher_id ?? null,
            'transaction_code' => 'TRX-' . strtoupper(Str::random(10)),
            'shipping_cost' => $cartItems->sum('shipping_cost'),
            'voucher_amount' => 0,
            'total_amount' => $total,
            'status' => 'pending'
        ]);

        // Generate Payment ID
        $paymentId = 'PAY-' . strtoupper(Str::random(10));

        // === Midtrans Configuration ===
        Config::$serverKey = config('services.midtrans.server_key'); // 
        Config::$clientKey = config('services.midtrans.client_key');
        Config::$isProduction = config('services.midtrans.is_production');
        Config::$isSanitized = config('services.midtrans.is_sanitized');
        Config::$is3ds = config('services.midtrans.is_3ds');

        // === Midtrans Snap Payload ===
        $params = [
            'transaction_details' => [
                'order_id' => $paymentId,
                'gross_amount' => $total,
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'email' => $user->email,
            ]
        ];

        $snapToken = Snap::getSnapToken($params);

        // Simpan ke tabel payments dengan shipping_address_id
        Payment::create([
            'user_id' => $user->id,
            'transaction_id' => $transaction->id,
            'shipping_address_id' => $request->shipping_address_id,  // Menambahkan shipping_address_id
            'payment_id' => $paymentId,
            'snap_token' => $snapToken,
            'payment_status' => 'pending',
            'total' => $total,
        ]);

        // Kosongkan keranjang
        Cart::where('user_id', $user->id)->delete();

        return redirect()->route('keranjang')->with('success', 'Pembayaran berhasil dibuat.');
    }

    public function edit(Payment $payment)
    {
        $users = User::all();
        $transactions = Transaction::all();  // Kirimkan data transaksi
        return view('admin.payments.edit', compact('payment', 'users', 'transactions'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'transaction_id' => 'required|exists:transactions,id', // Gunakan transaction_id
            'payment_status' => 'required|in:pending,success,failed',
            'total' => 'required|numeric|min:0',
        ]);

        $payment->update([
            'user_id' => $request->user_id,
            'transaction_id' => $request->transaction_id, // Gunakan transaction_id
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
            'customer_details.phone' => 'nullable|string',
        ]);

        $transaction = Transaction::findOrFail($request->transaction_id);
        $user = User::findOrFail($request->user_id);

        $params = [
            'transaction_details' => [
                'order_id' => $transaction->transaction_code,
                'gross_amount' => $request->gross_amount,
            ],
            'item_details' => $request->items,
            'customer_details' => [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'phone' => $user->phone_number ?? '',
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);

            // Simpan snap_token dan transaction_id ke dalam tabel payments
            $paymentId = 'PAY-' . strtoupper(uniqid());
            Payment::create([
                'payment_id' => $paymentId,
                'user_id' => $user->id,
                'transaction_id' => $transaction->id,
                'snap_token' => $snapToken,
                'payment_status' => 'pending', // Set status awal
                'total' => $request->gross_amount, // Gunakan gross_amount
            ]);

            return response()->json(['snap_token' => $snapToken, 'transaction_code' => $transaction->transaction_code]); // Mengembalikan transaction_code
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function updatePaymentStatusAdmin(Request $request, Payment $payment)
    {
        $request->validate([
            'payment_status' => 'required|in:pending,success,failed',
        ]);

        $payment->update(['payment_status' => $request->payment_status]);

        // Perbarui juga status transaksi jika diperlukan
        $transaction = Transaction::find($payment->transaction_id);
        if ($transaction) {
            $transaction->update(['status' => $request->payment_status]); // Sinkronkan status transaksi
            if ($request->payment_status === 'success') {
                Cart::where('user_id', $transaction->user_id)->delete();
            }
        }

        return redirect()->route('payments.index')->with('success', 'Status pembayaran berhasil diperbarui.');
    }

    public function checkout()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        $carts = Cart::where('user_id', $user->id)->with('product')->get();
        $shippingAddresses = $user->shippingAddresses;
        $discountVouchers = \App\Models\DiscountVoucher::all();

        $totalCartPrice = $carts->sum(function ($cart) {
            return $cart->product->price * $cart->quantity;
        });

        return view('landing.pages.checkout.checkout-index', compact('carts', 'shippingAddresses', 'discountVouchers', 'totalCartPrice'));
    }

    public function processPayment(Request $request)
    {
        $request->validate([
            'shipping_address_id' => 'required|exists:shipping_addresses,id',
            'cart_ids' => 'required|array',
            'cart_ids.*' => 'required|exists:carts,id,user_id,' . Auth::id(),
            'discount_voucher_id' => 'nullable|exists:discount_vouchers,id',
            'shipping_cost' => 'required|numeric|min:0',
            'total_amount' => 'required|numeric|min:0',
        ]);

        $user = Auth::user();
        $shippingAddress = \App\Models\ShippingAddress::findOrFail($request->shipping_address_id);
        $voucher = $request->discount_voucher_id ? \App\Models\DiscountVoucher::find($request->discount_voucher_id) : null;
        $carts = Cart::whereIn('id', $request->cart_ids)->with('product')->get();

        // Buat transaksi baru
        $transactionCode = 'TRX-' . uniqid();
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'shipping_address_id' => $shippingAddress->id,
            'discount_voucher_id' => $voucher ? $voucher->id : null,
            'transaction_code' => $transactionCode,
            'shipping_cost' => $request->shipping_cost,
            'voucher_amount' => $voucher ? $voucher->amount : 0,
            'total_amount' => $request->total_amount,
            'status' => 'pending',
        ]);

        $items = [];
        foreach ($carts as $cart) {
            $transaction->items()->create([
                'product_id' => $cart->product->id,
                'quantity' => $cart->quantity,
                'price_per_item' => $cart->product->price,
                'subtotal' => $cart->product->price * $cart->quantity,
            ]);
            $items[] = [
                'id' => $cart->product->id,
                'price' => $cart->product->price,
                'quantity' => $cart->quantity,
                'name' => $cart->product->name,
            ];
        }

        $params = [
            'transaction_details' => [
                'order_id' => $transactionCode,
                'gross_amount' => $request->total_amount,
            ],
            'item_details' => $items,
            'customer_details' => [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'phone' => $shippingAddress->no_telp ?? '',
                'address' => $shippingAddress->address ?? '',
                'city' => $shippingAddress->city->name ?? '',
                'district' => $shippingAddress->district->name ?? '',
                'village' => $shippingAddress->village->name ?? '',
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
             $paymentId = 'PAY-' . strtoupper(uniqid());
            // Buat record pembayaran
            Payment::create([
                'payment_id' => $paymentId,
                'user_id' => $user->id,
                'transaction_id' => $transaction->id,
                'snap_token' => $snapToken,
                'payment_status' => 'pending', // Set status awal pembayaran
                'total' => $request->total_amount,
            ]);

            return response()->json(['snap_token' => $snapToken, 'transaction_code' => $transactionCode]);
        } catch (\Exception $e) {
            // Jika gagal, rollback transaksi
            $transaction->delete();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
