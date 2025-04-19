<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Slider;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use App\Models\Role;
use App\Models\ShippingAddress;
use App\Models\City;
use App\Models\District;
use App\Models\Village;
use App\Models\DiscountVoucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function index()
    {
        // Ambil semua data slider
        $sliders = Slider::all();

        $vouchers = \App\Models\DiscountVoucher::where('status', 'publish')
        ->inRandomOrder()
        ->take(2)
        ->get();
        
        // Ambil semua data kategori produk
        $categoryproducts = CategoryProduct::all();  

        $categoryproducts = CategoryProduct::with('products')->get();

        // Ambil produk, bisa dibatasi atau difilter sesuai kebutuhan
        $products = Product::latest()->take(10)->get();

        // Kirim data ke view landing-page.blade.php
        return view('landing-page', compact('sliders','vouchers', 'categoryproducts', 'products'));
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

    public function productDetail($id)
    {
        $product = Product::with('variants')->findOrFail($id);
        return view('landing.pages.produk.product-show', compact('product'));
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

    public function indexVoucher(Request $request)
    {
        $today = now();

        $vouchers = DiscountVoucher::where('status', 'publish')
            ->where('start_date', '<=', $today)
            ->where('end_date', '>=', $today)
            ->get();

        $categoryProduct = CategoryProduct::with(['vouchers' => function($query) use ($today) {
            $query->where('status', 'publish')
                ->where('start_date', '<=', $today)
                ->where('end_date', '>=', $today);
        }])->get();

        return view('landing.pages.coupon.coupon-index', compact('vouchers', 'categoryProduct'));
    }




    public function indexUser()
    {
        $users = User::with('role')->get();
        $roles = Role::whereIn('id', [1, 2, 3, 4])->get();
        $user = auth()->user();
        $city = City::all();
        $districts = District::where('city_id', $user->shippingAddress->city_id ?? null)->get();
        $villages = Village::where('district_id', $user->shippingAddress->district_id ?? null)->get();
        $shippingAddress = $user->shippingAddress;

        return view('landing.pages.profile.profile-index', compact('users', 'city', 'districts', 'villages', 'roles', 'shippingAddress'));
    }
    
    public function getVillages($district_id)
    {
        $villages = \App\Models\Village::where('district_id', $district_id)->get();
        return response()->json($villages);
    }

    public function getDistricts($city_id)
    {
        $districts = District::where('city_id', $city_id)->get();

        return response()->json($districts);
    }


    public function create()
    {
        $city = City::all(); // Ambil semua kota
        $districts = District::all(); // Ambil semua kecamatan
        $villages = Village::all(); // Ambil semua desa
        $roles = Role::whereIn('id', [1, 2, 3])->get(); // Hanya Admin, Seller, dan satu lainnya

        return view('admin.pages.users.user-create', compact('roles', 'city', 'districts', 'villages'));
    }
    
        public function store(Request $request)
    {
        $request->validate([
            'no_telp' => 'required|string|max:20',
            'city_id' => 'required|exists:cities,id',
            'district_id' => 'required|exists:districts,id',
            'village_id' => 'required|exists:villages,id',
            'address' => 'required|string|max:255',
        ]);

        $alamat = Alamat::create([
            'user_id' => Auth::id(), // Otomatis ambil ID user yang login
            'no_telp' => $request->no_telp,
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'village_id' => $request->village_id,
            'address' => $request->address,
        ]);

        return response()->json([
            'message' => 'Alamat berhasil disimpan.',
            'data' => $alamat
        ], 201);
    }

}
