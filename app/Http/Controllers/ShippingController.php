<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    /**
     * Menampilkan semua data pengiriman.
     */
    public function index()
    {
        $shippings = Shipping::latest()->get();
        return response()->json($shippings);
    }

    /**
     * Mendapatkan ongkos kirim berdasarkan asal dan tujuan.
     */
    public function getShippingRate(Request $request)
    {
        $request->validate([
            'origin' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
        ]);

        $shippingRate = Shipping::where('origin', $request->origin)
            ->where('destination', $request->destination)
            ->first(['origin', 'destination', 'price', 'estimated_time']);

        if (!$shippingRate) {
            return response()->json(['message' => 'Shipping rate not found'], 404);
        }

        return response()->json($shippingRate);
    }


    /**
     * Membuat pengiriman baru dengan ongkos kirim.
     */
    public function store(Request $request)
    {
        $request->validate([
            'checkout_id' => 'required|exists:checkouts,id',
            'tracking_number' => 'required|string|unique:shippings,tracking_number',
            'courier' => 'required|string',
            'status' => 'required|in:pending,shipped,in_transit,out_for_delivery,delivered,failed',
            'estimated_arrival' => 'required|date',
            'origin' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'estimated_time' => 'required|string|max:255',
        ]);

        $shipping = Shipping::create($request->all());

        return response()->json(['message' => 'Shipping created successfully!', 'data' => $shipping], 201);
    }

    /**
     * Menampilkan detail pengiriman berdasarkan ID.
     */
    public function show($id)
    {
        $shipping = Shipping::findOrFail($id);
        return response()->json($shipping);
    }

    /**
     * Memperbarui data pengiriman.
     */
    public function update(Request $request, $id)
    {
        $shipping = Shipping::findOrFail($id);

        $request->validate([
            'tracking_number' => 'nullable|string|unique:shippings,tracking_number,' . $id,
            'courier' => 'nullable|string',
            'status' => 'nullable|in:pending,shipped,in_transit,out_for_delivery,delivered,failed',
            'estimated_arrival' => 'nullable|date',
            'origin' => 'nullable|string|max:255',
            'destination' => 'nullable|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'estimated_time' => 'nullable|string|max:255',
        ]);

        $shipping->update($request->only([
            'tracking_number',
            'courier',
            'status',
            'estimated_arrival',
            'origin',
            'destination',
            'price',
            'estimated_time',
        ]));

        return response()->json(['message' => 'Shipping updated successfully!', 'data' => $shipping]);
    }

    /**
     * Menghapus data pengiriman.
     */
    public function destroy($id)
    {
        $shipping = Shipping::findOrFail($id);
        $shipping->delete();

        return response()->json(['message' => 'Shipping deleted successfully!']);
    }
}
