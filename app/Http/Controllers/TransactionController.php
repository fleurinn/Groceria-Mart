<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    // Tampilkan semua transaksi
    public function index()
    {
        $transactions = Transaction::with('user', 'shipping_address', 'discount_voucher')->get();
        return response()->json($transactions);
    }

    // Simpan transaksi baru
    public function store(Request $request)
    {
        $request->validate([
            'total_price' => 'required|numeric',
            'payment_method' => 'required|string',
            'shipping_address' => 'required|string',
            'status' => 'in:pending,processing,shipped,completed,cancelled,draft,publish',
        ]);

        // Menentukan status transaksi berdasarkan kondisi tertentu
        $status = 'pending';
        if ($request->payment_method == 'credit_card' && $request->total_price > 0) {
            $status = 'processing'; // Misalnya, langsung diproses jika pembayaran dilakukan dengan kartu kredit
        }

        $transaction = Transaction::create([
            'user_id' => Auth::id(),
            'total_price' => $request->total_price,
            'payment_method' => $request->payment_method,
            'shipping_address' => $request->shipping_address,
            'status' => $request->status ?? $status,
        ]);

        return response()->json(['message' => 'Transaksi berhasil dibuat', 'data' => $transaction]);
    }

    // Detail transaksi berdasarkan ID
    public function show($id)
    {
        $transaction = Transaction::with('user', 'shipping_address', 'discount_voucher')->findOrFail($id);
        return response()->json($transaction);
    }

    // Update transaksi
    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);

        $request->validate([
            'total_price' => 'numeric|nullable',
            'payment_method' => 'string|nullable',
            'shipping_address' => 'string|nullable',
            'status' => 'in:pending,processing,shipped,completed,cancelled,draft,publish|nullable',
        ]);

        // Validasi agar status tidak diubah jika transaksi sudah selesai
        if ($transaction->status == 'completed' || $transaction->status == 'shipped') {
            return response()->json(['error' => 'Status tidak dapat diubah setelah transaksi selesai.'], 400);
        }

        $transaction->update($request->only(['total_price', 'payment_method', 'shipping_address', 'status']));

        return response()->json(['message' => 'Transaksi berhasil diperbarui', 'data' => $transaction]);
    }

    // Hapus transaksi
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return response()->json(['message' => 'Transaksi berhasil dihapus']);
    }

    // Bulk Delete Transaksi
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');

        if (empty($ids)) {
            return response()->json(['success' => false, 'message' => 'Tidak ada transaksi yang dipilih.'], 400);
        }

        // Validasi apakah semua ID yang diberikan valid
        $transactions = Transaction::whereIn('id', $ids)->get();
        if ($transactions->count() != count($ids)) {
            return response()->json(['success' => false, 'message' => 'Beberapa transaksi tidak ditemukan.'], 404);
        }

        Transaction::whereIn('id', $ids)->delete();

        return response()->json(['success' => true, 'message' => 'Transaksi berhasil dihapus.']);
    }

    // Bulk Update Status ke Draft
    public function bulkDraft(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            // Validasi transaksi yang statusnya tidak dapat diubah ke draft
            $transactions = Transaction::whereIn('id', $ids)->whereNotIn('status', ['completed', 'shipped'])->update(['status' => 'draft']);
            return response()->json(['success' => true, 'message' => 'Transaksi berhasil diubah ke draft.']);
        }

        return response()->json(['success' => false, 'message' => 'Tidak ada transaksi yang dipilih.'], 400);
    }

    // Bulk Update Status ke Publish
    public function bulkPublish(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            // Validasi transaksi yang statusnya tidak dapat diubah ke publish
            $transactions = Transaction::whereIn('id', $ids)->whereNotIn('status', ['completed', 'shipped'])->update(['status' => 'publish']);
            return response()->json(['success' => true, 'message' => 'Transaksi berhasil dipublikasikan.']);
        }

        return response()->json(['success' => false, 'message' => 'Tidak ada transaksi yang dipilih.'], 400);
    }
}
