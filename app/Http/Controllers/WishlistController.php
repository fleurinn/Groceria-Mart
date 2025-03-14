<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Menampilkan semua produk di wishlist user yang sedang login.
     */
    public function index()
    {
        $wishlists = Wishlist::where('user_id', Auth::id())->with('product')->get();
        return response()->json($wishlists);
    }

    /**
     * Menambahkan produk ke wishlist.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);

        // Cek apakah produk sudah ada di wishlist
        $exists = Wishlist::where('user_id', Auth::id())
                          ->where('product_id', $request->product_id)
                          ->exists();

        if ($exists) {
            return response()->json(['message' => 'Produk ini sudah ada di wishlist Anda.'], 409);
        }

        $wishlist = Wishlist::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id
        ]);

        return response()->json(['message' => 'Produk berhasil ditambahkan ke wishlist!', 'data' => $wishlist]);
    }

    /**
     * Menghapus produk dari wishlist.
     */
    public function destroy($id)
    {
        $wishlist = Wishlist::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $wishlist->delete();

        return response()->json(['message' => 'Produk dihapus dari wishlist!']);
    }

    /**
     * Menghapus semua produk di wishlist user.
     */
    public function clearWishlist()
    {
        Wishlist::where('user_id', Auth::id())->delete();
        return response()->json(['message' => 'Wishlist berhasil dikosongkan!']);
    }
}
