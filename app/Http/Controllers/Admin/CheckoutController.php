<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Menampilkan semua checkout milik user yang sedang login.
     */
    public function index()
    {
        $checkouts = Checkout::where('user_id', Auth::id())->get();
        return response()->json($checkouts);
    }

    /**
     * Membuat checkout baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'total_price' => 'required|numeric|min:0',
            'shipping_address' => 'required|string',
            'payment_method' => 'required|string',
            'status' => 'required|in:pending,paid,shipped,delivered,cancelled',
        ]);

        $checkout = Checkout::create([
            'user_id' => Auth::id(),
            'total_price' => $request->total_price,
            'shipping_address' => $request->shipping_address,
            'payment_method' => $request->payment_method,
            'status' => $request->status,
        ]);

        return response()->json(['message' => 'Checkout created successfully!', 'data' => $checkout], 201);
    }

    /**
     * Menampilkan detail checkout tertentu berdasarkan ID.
     */
    public function show($id)
    {
        $checkout = Checkout::where('user_id', Auth::id())->findOrFail($id);
        return response()->json($checkout);
    }

    /**
     * Mengupdate data checkout.
     */
    public function update(Request $request, $id)
    {
        $checkout = Checkout::where('user_id', Auth::id())->findOrFail($id);

        $request->validate([
            'total_price' => 'nullable|numeric|min:0',
            'shipping_address' => 'nullable|string',
            'payment_method' => 'nullable|string',
            'status' => 'nullable|in:pending,paid,shipped,delivered,cancelled',
        ]);

        $checkout->update($request->only([
            'total_price',
            'shipping_address',
            'payment_method',
            'status',
        ]));

        return response()->json(['message' => 'Checkout updated successfully!', 'data' => $checkout]);
    }

    /**
     * Menghapus checkout.
     */
    public function destroy($id)
    {
        $checkout = Checkout::where('user_id', Auth::id())->findOrFail($id);
        $checkout->delete();

        return response()->json(['message' => 'Checkout deleted successfully!']);
    }
}
