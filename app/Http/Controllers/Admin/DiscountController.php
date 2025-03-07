<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    // Ambil semua diskon
    public function index()
    {
        $discounts = Discount::all();
        return response()->json($discounts);
    }

    // Simpan diskon baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'discount_value' => 'required|numeric|min:0|max:100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Simpan diskon
        $discount = Discount::create($request->all());

        return response()->json(['message' => 'Diskon berhasil dibuat', 'data' => $discount], 201);
    }

    // Ambil diskon berdasarkan ID
    public function show($id)
    {
        $discount = Discount::findOrFail($id);
        return response()->json($discount);
    }

    // Perbarui diskon
    public function update(Request $request, $id)
    {
        $discount = Discount::findOrFail($id);

        // Validasi input
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'discount_value' => 'sometimes|required|numeric|min:0|max:100',
            'start_date' => 'sometimes|required|date',
            'end_date' => 'sometimes|required|date|after_or_equal:start_date',
        ]);

        // Update diskon
        $discount->update($request->all());

        return response()->json(['message' => 'Diskon berhasil diperbarui', 'data' => $discount]);
    }

    // Hapus diskon
    public function destroy($id)
    {
        $discount = Discount::findOrFail($id);
        $discount->delete();

        return response()->json(['message' => 'Diskon berhasil dihapus']);
    }
}
