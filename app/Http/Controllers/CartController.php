<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Tampilkan semua item di keranjang user yang sedang login
    // Menampilkan isi keranjang
    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->with('product')->get();

        $total = $carts->sum(function ($cart) {
            return $cart->product->price * $cart->quantity;
        });

        return view('landing.pages.keranjang.cart-index', [
            'carts' => $carts,
            'total' => $total
        ]);
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

        return redirect()->back()->withInput()->with('success', 'Produk berhasil dimasukkan ke keranjang.');
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

    //Bulk delete
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');

        if (empty($ids)) {
            return response()->json(['success' => false, 'message' => 'Tidak ada item keranjang yang dipilih.'], 400);
        }

        Cart::whereIn('id', $ids)->delete();

        return response()->json(['success' => true, 'message' => 'Item keranjang berhasil dihapus.']);
    }
}
