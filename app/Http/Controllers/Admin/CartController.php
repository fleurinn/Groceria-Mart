<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Tampilkan semua item di keranjang user yang sedang login
    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->with('product')->get();
        return response()->json($carts);
    }

    // Tambah produk ke keranjang
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $cart = Cart::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'product_id' => $request->product_id
            ],
            [
                'quantity' => $request->quantity
            ]
        );

        return response()->json(['message' => 'Product added to cart!', 'data' => $cart]);
    }

    // Perbarui jumlah produk di keranjang
    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);

        if ($cart->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cart->update(['quantity' => $request->quantity]);

        return response()->json(['message' => 'Cart updated successfully!', 'data' => $cart]);
    }

    // Hapus produk dari keranjang
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);

        if ($cart->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $cart->delete();

        return response()->json(['message' => 'Product removed from cart!']);
    }

    // Hapus semua item di keranjang user
    public function clearCart()
    {
        Cart::where('user_id', Auth::id())->delete();
        return response()->json(['message' => 'Cart cleared successfully!']);
    }
}
