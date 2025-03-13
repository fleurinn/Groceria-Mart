<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    // Tampilkan semua item di keranjang user yang sedang login
    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->with('product')->get();
        return response()->json($carts);
    }

    // Tambah produk ke keranjang dengan batas maksimal 100 item
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1|max:100',
            'cart_items' => 'nullable|json'
        ]);

        $cart = Cart::where('user_id', Auth::id())
                    ->where('product_id', $request->product_id)
                    ->first();

        if ($cart) {
            $newQuantity = $cart->quantity + $request->quantity;
            if ($newQuantity > 100) {
                return response()->json(['error' => 'Maximum 100 items per product allowed in the cart.'], 422);
            }
            $cart->update([
                'quantity' => $newQuantity,
                'cart_items' => $request->cart_items ?? $cart->cart_items
            ]);
        } else {
            $cart = Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'cart_items' => $request->cart_items
            ]);
        }

        return response()->json(['message' => 'Product added to cart!', 'data' => $cart]);
    }

    // Perbarui jumlah produk di keranjang dengan batas maksimal 100 item
    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);

        if ($cart->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $request->validate([
            'quantity' => 'required|integer|min:1|max:100',
            'cart_items' => 'nullable|json'
        ]);

        $cart->update([
            'quantity' => $request->quantity,
            'cart_items' => $request->cart_items ?? $cart->cart_items
        ]);

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
