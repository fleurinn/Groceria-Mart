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
        
        $wishlists = Wishlist::where('user_id', $userId)
            ->with('product')
            ->get()
            ->map(function ($wishlist) {
                if ($wishlist->product) { // Cek apakah produk masih tersedia
                    return [
                        'produk_id' => $wishlist->product->produk_id,
                        'image' => $wishlist->product->image,
                        'name' => $wishlist->product->name,
                        'stok_status' => $wishlist->product->stok_status,
                        'harga' => $wishlist->product->harga
                    ];
                }
            })->filter(); // Hapus data null jika produk sudah dihapus dari database

        return response()->json([
            'message' => 'Wishlist berhasil diambil.',
            'data' => $wishlists
        ], 200);
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
        if (Wishlist::where('user_id', $userId)->where('product_id', $productId)->exists()) {
            return response()->json(['message' => 'Produk ini sudah ada di wishlist Anda.'], 409);
        }

        // Simpan produk ke wishlist
        $wishlist = Wishlist::create([
            'user_id' => $userId,
            'product_id' => $productId
        ]);

        return response()->json([
            'message' => 'Produk berhasil ditambahkan ke wishlist!',
            'data' => $wishlist
        ], 201);
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

        return response()->json(['message' => 'Produk dihapus dari wishlist!'], 200);
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

        // Ambil daftar produk yang ada di wishlist
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

    // Bulk delete wishlist
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');

        if (empty($ids)) {
            return response()->json(['success' => false, 'message' => 'Tidak ada wishlist yang dipilih.'], 400);
        }

        Wishlist::whereIn('id', $ids)->delete();

        return response()->json(['success' => true, 'message' => 'Wishlist berhasil dihapus.']);
    }

}
