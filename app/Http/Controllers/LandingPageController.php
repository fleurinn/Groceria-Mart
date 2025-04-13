<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        // Ambil semua data slider
        $sliders = Slider::all();

        // Ambil semua data kategori produk
        $categoryproducts = CategoryProduct::all();

        $categoryproducts = CategoryProduct::with('products')->get();

        // Ambil produk, bisa dibatasi atau difilter sesuai kebutuhan
        $products = Product::latest()->take(10)->get();

        // Kirim data ke view landing-page.blade.php
        return view('landing-page', compact('sliders', 'categoryproducts', 'products'));
    }

    public function productIndex(Request $request)
    {   
        $categoryproducts = CategoryProduct::with('products')->get();

        // Query produk dasar
        $query = Product::latest();

        // Filter berdasarkan tag jika ada
        if ($request->has('tag')) {
            $query->where('tags', 'like', '%' . $request->tag . '%');
        }

        // Filter berdasarkan kategori jika ada
        if ($request->has('category')) {
            $categoryIds = $request->input('category');

            // Pastikan relasi categoryproducts sudah benar di model Product
            $query->whereHas('categoryproducts', function ($q) use ($categoryIds) {
                $q->whereIn('id', $categoryIds);
            });
        }

        $products = $query->paginate(12)->appends($request->query());

        $sortOptions = [
            '' => 'Sort by',
            'name_asc' => 'Name, A to Z',
            'name_desc' => 'Name, Z to A',
            'price_low_high' => 'Price, low to high',
            'price_high_low' => 'Price, high to low',
        ];

        return view('landing.pages.produk.product-index', compact('categoryproducts', 'products', 'sortOptions'));
    }

    public function cartIndex(Request $request)
    {   
        // Ambil semua produk dan kategori (jika memang perlu di view)
        $products = Product::all();
        $categoryproducts = CategoryProduct::all();

        $total = 0;
        $carts = collect(); // default kosong

        // Cek apakah user sudah login
        if (auth()->check()) {
            // Ambil data keranjang berdasarkan user yang login
            $carts = Cart::with('product')->where('user_id', auth()->id())->get();

            // Hitung total harga
            foreach ($carts as $cart) {
                if ($cart->product) {
                    $total += $cart->product->price * $cart->quantity;
                }
            }
        }

        return view('landing.pages.cart.cart-index', compact('categoryproducts', 'products', 'carts', 'total'));
    }

    public function increaseQuantity(Request $request)
    {
        $cart = Cart::findOrFail($request->cart_id);
        $cart->quantity += 1;
        $cart->save();

        return response()->json(['message' => 'Jumlah produk ditambahkan', 'quantity' => $cart->quantity]);
    }

    public function decreaseQuantity(Request $request)
    {
        $cart = Cart::findOrFail($request->cart_id);
        if ($cart->quantity > 1) {
            $cart->quantity -= 1;
            $cart->save();
            return response()->json(['message' => 'Jumlah produk dikurangi', 'quantity' => $cart->quantity]);
        } else {
            $cart->delete();
            return response()->json(['message' => 'Produk dihapus dari keranjang', 'deleted' => true]);
        }
    }




}
