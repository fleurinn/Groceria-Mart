<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\City;
use App\Models\District;
use App\Models\Village;
use App\Models\ShippingAddress;
use App\Models\DiscountVoucher;
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
        $city = City::all(); // Ambil semua kota
        $district = District::all(); // Ambil semua kecamatan
        $villages = Village::all(); // Ambil semua desa
        $shippingAddress = ShippingAddress::all();
        $carts = Cart::where('user_id', Auth::id())->with('product')->get();
    
        return view('landing.pages.cart.cart-index', compact('cartItems'));
        $total = $carts->sum(function ($cart) {
            return ($cart->product->price * ((100 - $cart->product->discount) / 100)) * $cart->quantity;
        });
        

        /** @var \App\Models\User|null $user */
        $user = Auth::user();
        $user?->load('shipping_address');


        return view('landing.pages.keranjang.cart-index', compact(
            'carts', 'total', 'user', 'products', 'variants', 'discountVouchers', 'ShippingAddress', 'city', 'district', 'villages'
        ));

    }
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1|max:100',
            'cart_items' => 'nullable|json',
        ]);
    
        $product = Product::find($request->product_id);
        $cart = Cart::where('user_id', Auth::id())
                    ->where('product_id', $request->product_id)
                    ->first();
    
        if ($cart) {
            $newQuantity = $cart->quantity + $request->quantity;
            if ($newQuantity > 100) {
                return response()->json(['error' => 'Maksimum 100 item per produk diizinkan dalam keranjang.'], 422);
            }
            $cart->update([
                'quantity' => $newQuantity,
                'cart_items' => json_encode(['product_name' => $product->name]),
            ]);
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'cart_items' => json_encode(['product_name' => $product->name]),
            ]);
        }
    
        return redirect()->back()->withInput()->with('success', 'Produk berhasil dimasukkan ke keranjang.');
    }
    
    // Tambah produk ke keranjang dengan validasi tambahan
    public function createCart(Request $request)
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
                'price' => $price, // Simpan biaya pengiriman
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

    // Apply shipping cost (choose 5000 or 10000)
    public function setShippingCost(Request $request)
{
    $request->validate([
        'shipping_cost' => 'required|in:5000,10000'
    ]);

    $user = Auth::user();

    // Ambil semua cart item user, urutkan dari yang paling awal dibuat
    $carts = Cart::where('user_id', $user->id)
        ->orderBy('created_at', 'asc')
        ->get();

    foreach ($carts as $index => $cart) {
        // Hanya cart pertama yang dapat ongkir, sisanya 0
        $cart->shipping_cost = ($index === 0) ? $request->shipping_cost : 0;

        // Ambil data produk untuk hitung harga asli
        $product = Product::find($cart->product_id);

        // Harga asli setelah diskon produk (jika ada)
        $originalPrice = $product->price * ((100 - $product->discount) / 100) * $cart->quantity;

        // Hitung ulang price (dengan ongkir di cart pertama saja)
        $finalPrice = $originalPrice + $cart->shipping_cost;

        // Simpan final price ke field price
        $cart->price = $finalPrice;

        $cart->save();
    }

    return response()->json([
        'message' => 'Ongkos kirim berhasil diterapkan dan harga diperbarui.'
    ]);
}



   // Apply Discount Voucher
    public function applyVoucher(Request $request)
    {
        $request->validate([
            'discount_code' => 'required|string'
        ]);

        $user = Auth::user();
        $voucher = DiscountVoucher::where('discount_code', $request->discount_code)->first();

        if (!$voucher) {
            return response()->json(['message' => 'Invalid discount code'], 404);
        }

        $carts = Cart::where('user_id', $user->id)->get();

        $totalDiscountAmount = 0;

        foreach ($carts as $cart) {
            $product = Product::find($cart->product_id);

            $isEligible = false;
            if ($voucher->discount_type === 'global') {
                $isEligible = true;
            } elseif (
                $voucher->discount_type === 'spesific_product' &&
                $voucher->category_product_id == $product->category_product_id
            ) {
                $isEligible = true;
            }

            if ($isEligible) {
                // Harga asli setelah diskon produk (jika ada)
                $originalPrice = $product->price * ((100 - $product->discount) / 100) * $cart->quantity;

                // Hitung diskon dari voucher jika voucher adalah persentase
                if ($voucher->discount_value > 0 && $voucher->discount_value <= 100) {
                    $discountAmount = ($voucher->discount_value / 100) * $originalPrice;
                    $totalDiscountAmount += $discountAmount;
                } else {
                    return response()->json(['message' => 'Invalid discount value'], 400);
                }

                // Harga akhir = harga setelah diskon voucher + biaya ongkir
                $finalPrice = $originalPrice - $discountAmount + $cart->shipping_cost;

                // Update cart
                $cart->discount_voucher_id = $voucher->id;
                $cart->price = $finalPrice;
                $cart->save();
            }
        }

        return response()->json([
            'message' => 'Voucher applied successfully.',
            'discount_type' => $voucher->discount_type,
            'discount_value' => $voucher->discount_value . '%',
            'discount_amount' => $totalDiscountAmount,
        ]);
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

    // Di CartController.php
    public function getCartTotal()
    {
        $user = Auth::user();

        $total = Cart::where('user_id', $user->id)->sum('price');

        return response()->json([
            'total_price' => $total
        ]);
    }

}