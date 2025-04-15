<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use App\Models\Transaction;
// use App\Models\Purchase; // Dikomentari sesuai permintaan
use App\Models\Cart;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Tambahkan untuk PDF
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Notification; // Tambahkan untuk callback

class PaymentController extends Controller
{
    public function __construct()
    {
        // Set konfigurasi Midtrans
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$clientKey = env('MIDTRANS_CLIENT_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    // Menampilkan daftar pembayaran dengan total transaksi & balance
    public function index()
    {
        $payments = Payment::with(['user', 'transaction'])->latest()->get();
        // Hitung total transaksi & balance
        $totalTransactions = Payment::count();
        $totalBalance = Payment::sum('amount');
        // Hitung berdasarkan tahun, bulan, minggu
        $yearlyBalance = Payment::whereYear('payment_date', date('Y'))->sum('amount');
        $monthlyBalance = Payment::whereYear('payment_date', date('Y'))->whereMonth('payment_date', date('m'))->sum('amount');
        $weeklyBalance = Payment::whereBetween('payment_date', [now()->startOfWeek(), now()->endOfWeek()])->sum('amount');
        return view('admin.payments.index', compact(
            'payments',
            'totalTransactions',
            'totalBalance',
            'yearlyBalance',
            'monthlyBalance',
            'weeklyBalance'
        ));
    }

    // Menampilkan form tambah pembayaran (Mungkin tidak terpakai setelah integrasi Midtrans)
    public function create()
    {
        $users = User::all();
        $transactions = Transaction::all();
        return view('admin.payments.create', compact('users', 'transactions'));
    }

    // Menyimpan pembayaran baru (Mungkin tidak terpakai langsung setelah integrasi Midtrans)
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'transaction_id' => 'required|exists:transactions,id',
            'payment_status' => 'required|in:pending,confirmed,unpaid',
            'payment_date' => 'nullable|date',
            'amount' => 'required|numeric|min:0', // Menambahkan jumlah pembayaran
        ]);
        // Generate payment ID unik seperti nomor orderan
        $paymentId = 'PAY-' . strtoupper(uniqid());
        Payment::create([
            'payment_id' => $paymentId,
            'user_id' => $request->user_id,
            'transaction_id' => $request->transaction_id,
            'payment_status' => $request->payment_status,
            'payment_date' => $request->payment_date,
            'amount' => $request->amount,
        ]);
        return redirect()->route('payments.index')->with('success', 'Pembayaran berhasil ditambahkan.');
    }

    // Menampilkan form edit pembayaran
    public function edit(Payment $payment)
    {
        $users = User::all();
        $transactions = Transaction::all();
        return view('admin.payments.edit', compact('payment', 'users', 'transactions'));
    }

    // Mengupdate pembayaran
    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'transaction_id' => 'required|exists:transactions,id',
            'payment_status' => 'required|in:pending,confirmed,unpaid',
            'payment_date' => 'nullable|date',
            'amount' => 'required|numeric|min:0',
        ]);
        $payment->update($request->all());
        return redirect()->route('payments.index')->with('success', 'Pembayaran berhasil diperbarui.'); // Pesan Bahasa Indonesia
    }

    // Menghapus pembayaran
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index')->with('success', 'Pembayaran berhasil dihapus.');
    }

    // Menampilkan detail pembayaran dan invoice
    public function show(Payment $payment)
    {
        return view('admin.payments.show', compact('payment'));
    }

    // Mengunduh invoice dalam format PDF
    public function downloadInvoice(Payment $payment)
    {
        $pdf = Pdf::loadView('admin.payments.invoice', compact('payment'));
        return $pdf->download('invoice-' . $payment->payment_id . '.pdf');
    }

    /**
     * Membuat transaksi Midtrans dan mengembalikan snap token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createMidtransTransaction(Request $request)
    {
        // Validasi data request (sesuaikan dengan kebutuhan Anda)
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
                'order_id' => $transaction->order_id, // Gunakan order_id dari tabel transactions
                'gross_amount' => $request->gross_amount,
            ],
            'item_details' => $request->items,
            'customer_details' => [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'phone' => $user->phone_number ?? '', // Asumsi ada kolom phone_number di tabel users
            ],
            // Tambahkan detail lain seperti billing_address dan shipping_address jika diperlukan
        ];

        try {
            $snapToken = Snap::getSnapToken($params);

            // Simpan snap_token ke dalam tabel payments atau transactions
            Payment::where('transaction_id', $transaction->order_id)->update(['snap_token' => $snapToken]);

            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Handle Midtrans callback (webhook).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function midtransCallback(Request $request)
    {
        $notif = new Notification();

        $transactionStatus = $notif->transaction_status;
        $fraudStatus = $notif->fraud_status;
        $orderId = $notif->order_id;

        // Verifikasi signature key (gunakan server key Anda)
        $serverKey = env('MIDTRANS_SERVER_KEY');
        $hashed = hash('sha512', $orderId . $notif->status_code . $transactionStatus . $serverKey);

        if ($hashed == $notif->signature_key) {
            if ($transactionStatus == 'capture') {
                if ($fraudStatus == 'challenge') {
                    // TODO: Set transaction status on your database to 'challenge'
                    $this->updateTransactionStatus($orderId, 'challenge');
                } else if ($fraudStatus == 'accept') {
                    // TODO: Set transaction status on your database to 'success'
                    $this->updateTransactionStatus($orderId, 'success');
                }
            } else if ($transactionStatus == 'settlement') {
                // TODO: Set transaction status on your database to 'success'
                $this->updateTransactionStatus($orderId, 'success');
            } else if ($transactionStatus == 'pending') {
                // TODO: Set transaction status on your database to 'pending'
                $this->updateTransactionStatus($orderId, 'pending');
            } else if ($transactionStatus == 'deny') {
                // TODO: Set transaction status on your database to 'failed'
                $this->updateTransactionStatus($orderId, 'failed');
            } else if ($transactionStatus == 'expire') {
                // TODO: Set transaction status on your database to 'failed'
                $this->updateTransactionStatus($orderId, 'failed');
            } else if ($transactionStatus == 'cancel') {
                // TODO: Set transaction status on your database to 'failed'
                $this->updateTransactionStatus($orderId, 'failed');
            }

            return response()->json(['message' => 'Callback processed'], 200);
        } else {
            return response()->json(['error' => 'Invalid signature'], 400);
        }
    }

    protected function updateTransactionStatus($orderId, $status)
    {
        // Update status pembayaran di tabel payments
        Payment::where('transaction_id', $orderId)->update(['payment_status' => $status]);

        // Tambahkan logika lain jika diperlukan, seperti memperbarui status order di tabel lain
        if ($status === 'success') {
            Cart::where('user_id', Payment::where('transaction_id', $orderId)->value('user_id'))->delete();
            // Contoh: Order::where('order_id', $orderId)->update(['status' => 'paid']);
        }
    }
}