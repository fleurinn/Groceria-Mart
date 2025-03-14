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
            'review' => 'nullable|string'
        ]);

        $review = Review::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'rating' => $request->rating,
            'review' => $request->review
        ]);

        return response()->json(['message' => 'Review added successfully!', 'data' => $review]);
    }

    // Tampilkan review tertentu
    public function show($id)
    {
        $review = Review::with('user', 'product')->findOrFail($id);
        return response()->json($review);
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
            'review' => 'nullable|string'
        ]);

        $review->update($request->only(['rating', 'review']));

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
