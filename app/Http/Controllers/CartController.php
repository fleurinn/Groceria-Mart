<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    const REGULAR_SHIPPING_COST = 5000;
    const EXPRESS_SHIPPING_COST = 10000;

    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->with(['product', 'discountVoucher'])->get();

        $total = $carts->sum(function ($cart) {
            return $cart->total_price; // total_price = (price * quantity) + shipping_cost - diskon
        });

        return view('landing.pages.keranjang.cart-index', compact('carts', 'total'));
    }

    // Hitung ongkir sesuai jenis
    private function calculateShippingCost($type)
    {
        return match($type) {
            'reguler' => self::REGULAR_SHIPPING_COST,
            'express' => self::EXPRESS_SHIPPING_COST,
            default => throw new \InvalidArgumentException('Invalid shipping type'),
        };
    }

    public function store(Request $request)
    {
        $request->validate($this->getValidationRules());

        $product = Product::findOrFail($request->product_id);
        $cart = Cart::where('user_id', Auth::id())
                    ->where('product_id', $request->product_id)
                    ->first();

        $price = $this->calculateDiscountedPrice($product);
        $shippingCost = $this->calculateShippingCost($request->shipping_type);

        if ($cart) {
            $newQuantity = $cart->quantity + $request->quantity;

            if ($newQuantity > 100) {
                return response()->json(['error' => 'Maksimum 100 item per produk diizinkan dalam keranjang.'], 422);
            }

            $cart->update([
                'quantity' => $newQuantity,
                'cart_items' => json_encode(['product_name' => $product->name]),
                'price' => $price,
                'shipping_type' => $request->shipping_type,
                'shipping_cost' => $shippingCost,
                'shipping_address_id' => $request->shipping_address_id,
                'discount_voucher_id' => $request->discount_voucher_id,
            ]);
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'cart_items' => json_encode(['product_name' => $product->name]),
                'price' => $price,
                'shipping_type' => $request->shipping_type,
                'shipping_cost' => $shippingCost,
                'shipping_address_id' => $request->shipping_address_id,
                'discount_voucher_id' => $request->discount_voucher_id,
            ]);
        }

        return redirect()->back()->with('success', 'Produk berhasil dimasukkan ke keranjang.');
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);

        if ($cart->user_id !== Auth::id()) {
            return response()->json(['error' => 'Tidak diizinkan'], 403);
        }

        $request->validate($this->getValidationRules(false));

        $product = Product::findOrFail($cart->product_id);
        $price = $this->calculateDiscountedPrice($product);
        $shippingCost = $this->calculateShippingCost($request->shipping_type);

        $cart->update([
            'quantity' => $request->quantity,
            'cart_items' => json_encode(['product_name' => $product->name]),
            'price' => $price,
            'shipping_type' => $request->shipping_type,
            'shipping_cost' => $shippingCost,
            'shipping_address_id' => $request->shipping_address_id,
            'discount_voucher_id' => $request->discount_voucher_id,
        ]);

        return response()->json(['message' => 'Keranjang berhasil diperbarui!', 'data' => $cart]);
    }

    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);

        if ($cart->user_id !== Auth::id()) {
            return response()->json(['error' => 'Tidak diizinkan'], 403);
        }

        $cart->delete();

        return response()->json(['message' => 'Produk berhasil dihapus dari keranjang!']);
    }

    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');

        if (empty($ids)) {
            return response()->json(['success' => false, 'message' => 'Tidak ada item keranjang yang dipilih.'], 400);
        }

        // Tidak perlu hapus gambar jika tidak ada field image
        Cart::whereIn('id', $ids)->where('user_id', Auth::id())->delete();

        return response()->json(['success' => true, 'message' => 'Item keranjang berhasil dihapus.']);
    }

    // Hitung harga diskon (dibulatkan)
    private function calculateDiscountedPrice($product)
    {
        return round($product->price * ((100 - $product->discount) / 100));
    }

    // Aturan validasi
    private function getValidationRules($includeProductId = true)
    {
        $rules = [
            'quantity' => 'required|integer|min:1|max:100',
            'shipping_type' => 'required|in:reguler,express',
            'shipping_address_id' => 'nullable|exists:shipping_addresses,id',
            'discount_voucher_id' => 'nullable|exists:discount_vouchers,id',
        ];

        if ($includeProductId) {
            $rules['product_id'] = 'required|exists:products,id';
        }

        return $rules;
    }
}
