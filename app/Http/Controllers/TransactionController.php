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
         $transactions = Transaction::with('user')->get();
         return response()->json($transactions);
     }
 
     // Simpan transaksi baru
     public function store(Request $request)
     {
         $request->validate([
             'total_price' => 'required|numeric',
             'payment_method' => 'required|string',
             'shipping_address' => 'required|string',
             'status' => 'in:pending,processing,shipped,completed,cancelled',
         ]);
 
         $transaction = Transaction::create([
             'user_id' => Auth::id(), // Ambil ID user yang sedang login
             'total_price' => $request->total_price,
             'payment_method' => $request->payment_method,
             'shipping_address' => $request->shipping_address,
             'status' => $request->status ?? 'pending', // Default pending jika tidak diisi
         ]);
 
         return response()->json(['message' => 'Transaksi berhasil dibuat', 'data' => $transaction]);
     }
 
     // Detail transaksi berdasarkan ID
     public function show($id)
     {
         $transaction = Transaction::with('user')->findOrFail($id);
         return response()->json($transaction);
     }
 
     // Update transaksi
     public function update(Request $request, $id)
     {
         $transaction = Transaction::findOrFail($id);
 
         $request->validate([
             'total_price' => 'numeric',
             'payment_method' => 'string',
             'shipping_address' => 'string',
             'status' => 'in:pending,processing,shipped,completed,cancelled',
         ]);
 
         $transaction->update($request->all());
 
         return response()->json(['message' => 'Transaksi berhasil diperbarui', 'data' => $transaction]);
     }
 
     // Hapus transaksi
     public function destroy($id)
     {
         $transaction = Transaction::findOrFail($id);
         $transaction->delete();
 
         return response()->json(['message' => 'Transaksi berhasil dihapus']);
     }
}


