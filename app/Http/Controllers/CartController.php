<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Tampilkan semua item di keranjang user yang sedang login
    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->with('product')->get();
        $totalPrice = $this->getCartTotal(Auth::id());
        return response()->json(['carts' => $carts, 'total_price' => $totalPrice]);
    }

    // Hitung total harga di keranjang
    private function getCartTotal($userId)
    {
        return Cart::where('user_id', $userId)->with('product')->get()->sum(function ($cart) {
            $discountedPrice = $cart->product->price * ((100 - $cart->product->discount) / 100);
            return $discountedPrice * $cart->quantity;
        });
    }

    // Tambah produk ke keranjang dengan validasi tambahan
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1|max:100',
            'cart_items' => 'nullable|json'
        ]);

        $product = Product::find($request->product_id);
        $cart = Cart::where('user_id', Auth::id())->where('product_id', $request->product_id)->first();

        if ($cart) {
            $newQuantity = $cart->quantity + $request->quantity;
            if ($newQuantity > 100) {
                return response()->json(['error' => 'Maximum 100 items per product allowed in the cart.'], 422);
            }
            $cart->update([
                'quantity' => $newQuantity,
                'cart_items' => json_encode(['product_name' => $product->name]),
                'price' => $product->price * ((100 - $product->discount) / 100)
            ]);
        } else {
            $cart = Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'cart_items' => json_encode(['product_name' => $product->name]),
                'price' => $product->price * ((100 - $product->discount) / 100)
            ]);
        }

        return response()->json(['message' => 'Product added to cart!', 'data' => $cart]);
    }

    // Perbarui jumlah produk di keranjang dengan update otomatis harga
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

        $product = Product::find($cart->product_id);
        $cart->update([
            'quantity' => $request->quantity,
            'cart_items' => json_encode(['product_name' => $product->name]),
            'price' => $product->price * ((100 - $product->discount) / 100)
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

    // Hapus semua item di keranjang user dengan konfirmasi
    public function clearCart()
    {
        if (Cart::where('user_id', Auth::id())->count() == 0) {
            return response()->json(['message' => 'Your cart is already empty.']);
        }

        Cart::where('user_id', Auth::id())->delete();
        return response()->json(['message' => 'Cart cleared successfully!']);
    }

    // Bulk Delete
public function bulkDelete(Request $request)
{
    $ids = $request->input('ids');

    if (empty($ids)) {
        return response()->json(['success' => false, 'message' => 'Tidak ada item keranjang yang dipilih.'], 400);
    }

    $carts = Cart::whereIn('id', $ids)->get();

    foreach ($carts as $cart) {
        if ($cart->image) {
            Storage::delete('public/carts/' . $cart->image); // Sesuaikan path folder gambar
        }
    }

    Cart::whereIn('id', $ids)->delete();

    return response()->json(['success' => true, 'message' => 'Item keranjang berhasil dihapus.']);
}
}
