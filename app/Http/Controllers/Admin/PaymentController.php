<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // Menampilkan daftar pembayaran
    public function index()
    {
        $payments = Payment::with(['user', 'transaction'])->latest()->get();
        return view('admin.payments.index', compact('payments'));
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
            'payment_status' => 'required|in:pending,paid,failed',
            'payment_date'   => 'nullable|date',
        ]);

        Payment::create($request->all());

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
            'payment_status' => 'required|in:pending,paid,failed',
            'payment_date'   => 'nullable|date',
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
}
