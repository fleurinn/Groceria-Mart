<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiscountController extends Controller
{
    // Ambil semua diskon
    public function index()
    {
        $discounts = Discount::all();
        return response()->json($discounts);
    }

    // Simpan diskon baru dengan kode otomatis
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:global,specific_product',
            'product_id' => 'nullable|exists:products,id',
            'discount_value' => 'required|numeric|min:0',
            'discount_type' => 'required|in:nominal,percentage',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Generate kode diskon otomatis
        $discountCode = strtoupper(Str::random(8));

        // Simpan diskon
        $discount = Discount::create(array_merge($request->all(), ['discount_code' => $discountCode]));

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
            'type' => 'sometimes|required|in:global,specific_product',
            'product_id' => 'nullable|exists:products,id',
            'discount_value' => 'sometimes|required|numeric|min:0',
            'discount_type' => 'sometimes|required|in:nominal,percentage',
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

    // Terapkan kode promo
    public function applyPromoCode($promoCode)
    {
        $discount = Discount::where('discount_code', $promoCode)->first();

        if (!$discount || now()->gt($discount->end_date)) {
            return response()->json(['success' => false, 'message' => 'Kode promo tidak valid atau sudah kedaluwarsa.']);
        }

        return response()->json([
            'success' => true,
            'discount_code' => $discount->discount_code,
            'discount_value' => $discount->discount_value,
            'discount_type' => $discount->discount_type,
            'start_date' => $discount->start_date,
            'end_date' => $discount->end_date,
        ]);
    }

    // Ambil daftar promo yang sedang aktif
    public function getPromoList()
    {
        $now = now();
        $promos = Discount::where('start_date', '<=', $now)
            ->where('end_date', '>=', $now)
            ->select('discount_code', 'discount_value', 'discount_type', 'start_date', 'end_date')
            ->get();

        return response()->json([
            'message' => $promos->isEmpty() ? 'Tidak ada promo yang tersedia saat ini.' : 'Data promo berhasil diambil.',
            'promos' => $promos
        ]);
    }
}
