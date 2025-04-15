<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Definisikan konstanta untuk biaya pengiriman
    const REGULAR_SHIPPING_COST = 5000;
    const EXPRESS_SHIPPING_COST = 10000;

    // Tampilkan semua item di keranjang user yang sedang login
    // Menampilkan isi keranjang
    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->with('product')->get();

        $total = $carts->sum(function ($cart) {
            return ($cart->product->price * ((100 - $cart->product->discount) / 100)) * $cart->quantity;
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
            'shipping_type' => 'required|in:reguler,express', // Validasi jenis pengiriman
            'cart_items' => 'nullable|json'
        ]);

        $product = Product::find($request->product_id);
        $cart = Cart::where('user_id', Auth::id())->where('product_id', $request->product_id)->first();
        $price = $product->price * ((100 - $product->discount) / 100);

        // Tentukan biaya pengiriman berdasarkan jenis pengiriman
        $shippingCost = ($request->shipping_type == 'reguler') ? self::REGULAR_SHIPPING_COST : self::EXPRESS_SHIPPING_COST;

        if ($cart) {
            $newQuantity = $cart->quantity + $request->quantity;
            if ($newQuantity > 100) {
                return response()->json(['error' => 'Maksimum 100 item per produk diizinkan dalam keranjang.'], 422);
            }
            $cart->update([
                'quantity' => $newQuantity,
                'cart_items' => json_encode(['product_name' => $product->name]),
                'price' => $price,
                'shipping_type' => $request->shipping_type, // Simpan jenis pengiriman
                'shipping_cost' => $shippingCost, // Simpan biaya pengiriman
            ]);
        } else {
            $cart = Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'cart_items' => json_encode(['product_name' => $product->name]),
                'price' => $price,
                'shipping_type' => $request->shipping_type, // Simpan jenis pengiriman
                'shipping_cost' => $shippingCost, // Simpan biaya pengiriman
            ]);
        }

        return redirect()->back()->withInput()->with('success', 'Produk berhasil dimasukkan ke keranjang.');
    }

    // Perbarui jumlah produk di keranjang
    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);

        if ($cart->user_id !== Auth::id()) {
            return response()->json(['error' => 'Tidak diizinkan'], 403);
        }

        $request->validate([
            'quantity' => 'required|integer|min:1|max:100',
            'shipping_type' => 'required|in:reguler,express', // Validasi jenis pengiriman
            'cart_items' => 'nullable|json'
        ]);

        $product = Product::find($cart->product_id);
        $price = $product->price * ((100 - $product->discount) / 100);

        // Tentukan biaya pengiriman berdasarkan jenis pengiriman yang baru
        $shippingCost = ($request->shipping_type == 'reguler') ? self::REGULAR_SHIPPING_COST : self::EXPRESS_SHIPPING_COST;

        $cart->update([
            'quantity' => $request->quantity,
            'cart_items' => json_encode(['product_name' => $product->name]),
            'price' => $price,
            'shipping_type' => $request->shipping_type, // Update jenis pengiriman
            'shipping_cost' => $shippingCost, // Update biaya pengiriman
        ]);

        return response()->json(['message' => 'Keranjang berhasil diperbarui!', 'data' => $cart]);
    }

    // Hapus produk dari keranjang
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);

        if ($cart->user_id !== Auth::id()) {
            return response()->json(['error' => 'Tidak diizinkan'], 403);
        }

        $cart->delete();

        return response()->json(['message' => 'Produk berhasil dihapus dari keranjang!']);
    }

    //Bulk delete
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

