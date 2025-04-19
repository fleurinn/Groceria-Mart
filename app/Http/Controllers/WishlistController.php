<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Menampilkan semua produk di wishlist user yang sedang login.
     */
    public function index()
    {
        $userId = Auth::id();

        // Ambil wishlist beserta produk yang masih tersedia
        $wishlists = Wishlist::where('user_id', $userId)
            ->with('product')
            ->get()
            ->filter(function ($wishlist) {
                return $wishlist->product !== null;
            });
            

        return view('landing.pages.wishlist.wishlist-index', compact('wishlists'));
    }

    /**
     * Menambahkan produk ke wishlist.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);

        $userId = Auth::id();
        $productId = $request->product_id;

        // Cek apakah produk masih tersedia
        $product = Product::find($productId);
        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan.'], 404);
        }

        // Cek apakah produk sudah ada di wishlist
        $existing = Wishlist::where('user_id', $userId)
            ->where('product_id', $productId)
            ->exists();

        if ($existing) {
            return response()->json(['message' => 'Produk ini sudah ada di wishlist Anda.'], 409);
        }

        // Simpan produk ke wishlist
        Wishlist::create([
            'user_id' => $userId,
            'product_id' => $productId
        ]);

        return redirect()->back()->withInput()->with('success', 'Produk berhasil dimasukkan ke wishlist.');
    }

    /**
     * Menghapus produk dari wishlist berdasarkan ID wishlist.
     */
    public function destroy($id)
    {
        $userId = Auth::id();
        $wishlist = Wishlist::where('id', $id)->where('user_id', $userId)->first();

        if (!$wishlist) {
            return response()->json(['message' => 'Produk tidak ditemukan di wishlist.'], 404);
        }

        $wishlist->delete();

        return redirect()->back()->withInput()->with('success', 'Produk berhasil dihapus.');
    }

    /**
     * Menghapus semua produk di wishlist user.
     */
    public function clearWishlist()
    {
        $userId = Auth::id();
        Wishlist::where('user_id', $userId)->delete();

        return response()->json(['message' => 'Wishlist berhasil dikosongkan!'], 200);
    }

    /**
     * Mengecek apakah produk ada dalam wishlist user.
     */
    public function check(Request $request)
    {
        $request->validate([
            'product_ids' => 'required|array|min:1',
            'product_ids.*' => 'exists:products,id'
        ]);

        $userId = Auth::id();
        $productIds = $request->input('product_ids');

        $wishlists = Wishlist::where('user_id', $userId)
            ->whereIn('product_id', $productIds)
            ->pluck('id', 'product_id');

        $response = [];
        foreach ($productIds as $productId) {
            $response[] = [
                'product_id' => $productId,
                'exists' => isset($wishlists[$productId]),
                'wishlist_id' => $wishlists[$productId] ?? null,
            ];
        }

        return response()->json($response, 200);
    }

    /**
     * Menghapus beberapa item wishlist sekaligus.
     */
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');

        if (empty($ids)) {
            return response()->json(['success' => false, 'message' => 'Tidak ada wishlist yang dipilih.'], 400);
        }

        Wishlist::whereIn('id', $ids)->where('user_id', Auth::id())->delete();

        return response()->json(['success' => true, 'message' => 'Wishlist berhasil dihapus.']);
    }
}
    