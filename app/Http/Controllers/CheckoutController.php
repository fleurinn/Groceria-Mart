<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Transaction;
use App\Models\Checkout;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

class CheckoutController extends Controller
{
    /**
     * Menampilkan semua checkout dan pembayaran milik user yang sedang login.
     */
    public function index()
    {
        $userId = Auth::id();
        $checkouts = Checkout::where('user_id', $userId)->with('transactions')->get();
        
        return response()->json(['checkouts' => $checkouts]);
    }

    /**
     * Membuat checkout baru dengan validasi stok dan transaksi database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'shipping_address' => 'required|string|max:255',
            'payment_method' => 'required|string|in:bank_transfer,credit_card,ewallet',
        ]);

        $userId = Auth::id();

        // Ambil semua item dari keranjang user
        $cartItems = Cart::where('user_id', $userId)->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['message' => 'Keranjang belanja kosong!'], 400);
        }

        DB::beginTransaction(); // Mulai transaksi database

        try {
            // Hitung total harga otomatis
            $totalPrice = 0;

            foreach ($cartItems as $item) {
                $product = Product::findOrFail($item->product_id);

                if ($product->stock < $item->quantity) {
                    throw ValidationException::withMessages([
                        'message' => "Stok produk '{$product->name}' tidak mencukupi."
                    ]);
                }

                // Kurangi stok produk
                $product->stock -= $item->quantity;
                $product->save();

                // Hitung total harga
                $totalPrice += $product->price * $item->quantity;
            }

            // Buat checkout
            $checkout = Checkout::create([
                'user_id' => $userId,
                'total_price' => $totalPrice,
                'shipping_address' => $request->shipping_address,
                'payment_method' => $request->payment_method,
                'status' => 'pending',
            ]);

            // Hapus item dari keranjang setelah checkout berhasil
            Cart::where('user_id', $userId)->delete();

            DB::commit(); // Simpan transaksi jika semua berhasil

            return response()->json(['message' => 'Checkout berhasil!', 'data' => $checkout], 201);
        } catch (\Exception $e) {
            DB::rollBack(); // Batalkan transaksi jika terjadi kesalahan
            return response()->json(['message' => 'Checkout gagal!', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Mengunduh invoice dalam format PDF.
     */
    public function downloadInvoice($id)
    {
        try {
            $payment = Payment::findOrFail($id);
            
            // Pastikan user hanya bisa mengunduh invoice miliknya
            if ($payment->user_id !== Auth::id()) {
                return response()->json(['message' => 'Unauthorized'], 403);
            }

            $pdf = Pdf::loadView('admin.payments.invoice', compact('payment'));
            return $pdf->download('invoice-' . $payment->id . '.pdf');
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Payment not found!'], 404);
        }
    }

    

    // Bulk delete
    public function bulkDelete(Request $request)
    {
    $ids = $request->input('ids');

    if (empty($ids)) {
        return response()->json([
            'success' => false,
            'message' => 'Tidak ada data checkout yang dipilih.'
        ], 400);
    }

    try {
        Checkout::whereIn('id', $ids)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data checkout berhasil dihapus.'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Terjadi kesalahan saat menghapus data checkout.'
        ], 500);
    }
    }

}
