<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    // Tampilkan semua review
    public function index()
    {
        $reviews = Review::with('user', 'product')->latest()->get();
        return response()->json($reviews);
    }

    // Simpan review baru
    public function store(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'nullable|string'
    ]);

    $user = Auth::user();

    // Menyimpan review
    $review = Review::create([
        'user_id' => $user->id,
        'product_id' => $request->product_id,
        'email' => $user->email,
        'rating' => $request->rating,
        'comment' => $request->comment
    ]);

    return response()->json([
        'success' => true,
        'review' => [
            'user_name' => $user->name,
            'created_at' => $review->created_at->diffForHumans(),
            'rating' => $review->rating,
            'comment' => $review->comment,
        ]
    ]);
}


    // Tampilkan review tertentu
    public function show($id)
    {
        $product = Product::with('reviews')->findOrFail($id);
        return view('product.show', compact('product'));
    }

    // Perbarui review
    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);

        if ($review->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $request->validate([
            'rating' => 'integer|min:1|max:5',
            'comment' => 'nullable|string'
        ]);

        $review->update($request->only(['rating', 'comment']));

        return response()->json(['message' => 'Review updated successfully!', 'data' => $review]);
    }

    // Hapus review
    public function destroy($id)
    {
        $review = Review::findOrFail($id);

        if ($review->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $review->delete();

        return response()->json(['message' => 'Review deleted successfully!']);
    }
}

