<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    /**
     * Menampilkan semua data pengiriman.
     */
    public function index()
    {
        $shippings = Shipping::with('transaction')->get();
        return response()->json($shippings);
    }

    /**
     * Membuat pengiriman baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'transaction_id' => 'required|exists:transactions,id',
            'tracking_number' => 'required|string|unique:shippings,tracking_number',
            'courier' => 'required|string',
            'status' => 'required|in:pending,shipped,in_transit,out_for_delivery,delivered,failed',
            'estimated_arrival' => 'required|date',
        ]);

        $shipping = Shipping::create([
            'transaction_id' => $request->transaction_id,
            'tracking_number' => $request->tracking_number,
            'courier' => $request->courier,
            'status' => $request->status,
            'estimated_arrival' => $request->estimated_arrival,
        ]);

        return response()->json(['message' => 'Shipping created successfully!', 'data' => $shipping], 201);
    }

    /**
     * Menampilkan detail pengiriman berdasarkan ID.
     */
    public function show($id)
    {
        $shipping = Shipping::with('transaction')->findOrFail($id);
        return response()->json($shipping);
    }

    /**
     * Mengupdate data pengiriman.
     */
    public function update(Request $request, $id)
    {
        $shipping = Shipping::findOrFail($id);

        $request->validate([
            'tracking_number' => 'nullable|string|unique:shippings,tracking_number,' . $id,
            'courier' => 'nullable|string',
            'status' => 'nullable|in:pending,shipped,in_transit,out_for_delivery,delivered,failed',
            'estimated_arrival' => 'nullable|date',
        ]);

        $shipping->update($request->only([
            'tracking_number',
            'courier',
            'status',
            'estimated_arrival',
        ]));

        return response()->json(['message' => 'Shipping updated successfully!', 'data' => $shipping]);
    }

    /**
     * Menghapus pengiriman.
     */
    public function destroy($id)
    {
        $shipping = Shipping::findOrFail($id);
        $shipping->delete();

        return response()->json(['message' => 'Shipping deleted successfully!']);
    }
}
