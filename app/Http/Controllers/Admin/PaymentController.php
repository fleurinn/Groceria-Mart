<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Tambahkan untuk PDF

class PaymentController extends Controller
{
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

    // Menampilkan form tambah pembayaran
    public function create()
    {
        $users = User::all();
        $transactions = Transaction::all();
        return view('admin.payments.create', compact('users', 'transactions'));
    }

    // Menyimpan pembayaran baru
    public function store(Request $request)
    {
        $request->validate([
            'user_id'        => 'required|exists:users,id',
            'transaction_id' => 'required|exists:transactions,id',
            'payment_status' => 'required|in:pending,confirmed,unpaid',
            'payment_date'   => 'nullable|date',
            'amount'         => 'required|numeric|min:0', // Menambahkan jumlah pembayaran
        ]);

        // Generate payment ID unik seperti nomor orderan
        $paymentId = 'PAY-' . strtoupper(uniqid());

        Payment::create([
            'payment_id'     => $paymentId,
            'user_id'        => $request->user_id,
            'transaction_id' => $request->transaction_id,
            'payment_status' => $request->payment_status,
            'payment_date'   => $request->payment_date,
            'amount'         => $request->amount,
        ]);

        return redirect()->route('payments.index')->with('success', 'Payment successfully added.');
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
            'user_id'        => 'required|exists:users,id',
            'transaction_id' => 'required|exists:transactions,id',
            'payment_status' => 'required|in:pending,confirmed,unpaid',
            'payment_date'   => 'nullable|date',
            'amount'         => 'required|numeric|min:0',
        ]);

        $payment->update($request->all());

        return redirect()->route('payments.index')->with('success', 'Payment successfully updated.');
    }

    // Menghapus pembayaran
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index')->with('success', 'Payment successfully deleted.');
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
}
