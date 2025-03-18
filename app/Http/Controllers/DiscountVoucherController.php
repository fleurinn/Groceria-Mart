<?php

namespace App\Http\Controllers;

use App\Models\DiscountVoucher;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class DiscountVoucherController extends Controller
{
    // Ambil semua voucher
    public function index()
    {
        $vouchers = DiscountVoucher::with('product')->get();
        return response()->json($vouchers);
    }

    // Simpan voucher baru dengan kode otomatis
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:global,specific_product',
            'product_id' => [
                'nullable',
                Rule::exists('products', 'id')->where(function ($query) use ($request) {
                    return $query->when($request->type === 'specific_product', function ($q) {
                        $q->whereNotNull('id');
                    });
                }),
            ],
            'discount_value' => 'required|numeric|min:0',
            'discount_type' => 'required|in:nominal,percentage',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Generate kode voucher unik
        do {
            $voucherCode = strtoupper(Str::random(8));
        } while (DiscountVoucher::where('discount_code', $voucherCode)->exists());

        // Simpan voucher
        $voucher = DiscountVoucher::create(array_merge($request->all(), ['discount_code' => $voucherCode]));

        return response()->json(['message' => 'Voucher berhasil dibuat', 'data' => $voucher], 201);
    }

    // Ambil voucher berdasarkan ID
    public function show($id)
    {
        $voucher = DiscountVoucher::with('product')->findOrFail($id);
        return response()->json($voucher);
    }

    // Perbarui voucher
    public function update(Request $request, $id)
    {
        $voucher = DiscountVoucher::findOrFail($id);

        // Validasi input
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'sometimes|required|in:global,specific_product',
            'product_id' => [
                'nullable',
                Rule::exists('products', 'id')->where(function ($query) use ($request) {
                    return $query->when($request->type === 'specific_product', function ($q) {
                        $q->whereNotNull('id');
                    });
                }),
            ],
            'discount_value' => 'sometimes|required|numeric|min:0',
            'discount_type' => 'sometimes|required|in:nominal,percentage',
            'start_date' => 'sometimes|required|date',
            'end_date' => 'sometimes|required|date|after_or_equal:start_date',
        ]);

        // Update voucher
        $voucher->update($request->all());

        return response()->json(['message' => 'Voucher berhasil diperbarui', 'data' => $voucher]);
    }

    // Hapus voucher
    public function destroy($id)
    {
        $voucher = DiscountVoucher::findOrFail($id);
        $voucher->delete();

        return response()->json(['message' => 'Voucher berhasil dihapus']);
    }

    // Terapkan kode voucher
    public function applyVoucherCode($voucherCode, $productId = null)
    {
        $voucher = DiscountVoucher::where('discount_code', $voucherCode)->first();

        if (!$voucher || !$voucher->isValid()) {
            return response()->json(['success' => false, 'message' => 'Kode voucher tidak valid atau sudah kedaluwarsa.']);
        }

        // Cek apakah voucher berlaku untuk produk yang dipilih
        if ($voucher->type === 'specific_product' && $voucher->product_id != $productId) {
            return response()->json(['success' => false, 'message' => 'Kode voucher tidak berlaku untuk produk ini.']);
        }

        // Ambil harga asli produk (jika ada)
        $product = Product::find($productId);
        $originalPrice = $product ? $product->price : null;
        $finalPrice = $originalPrice;

        // Hitung harga setelah diskon
        if ($originalPrice !== null) {
            if ($voucher->discount_type === 'nominal') {
                $finalPrice = max(0, $originalPrice - $voucher->discount_value);
            } elseif ($voucher->discount_type === 'percentage') {
                $discountAmount = ($voucher->discount_value / 100) * $originalPrice;
                $finalPrice = max(0, $originalPrice - $discountAmount);
            }
        }

        return response()->json([
            'success' => true,
            'discount_code' => $voucher->discount_code,
            'discount_value' => $voucher->discount_value,
            'discount_type' => $voucher->discount_type,
            'start_date' => $voucher->start_date,
            'end_date' => $voucher->end_date,
            'original_price' => $originalPrice,
            'final_price' => $finalPrice
        ]);
    }

    // Ambil daftar voucher yang sedang aktif
    public function getVoucherList()
    {
        $now = now();
        $vouchers = DiscountVoucher::where('start_date', '<=', $now)
            ->where('end_date', '>=', $now)
            ->with('product:id,name,price')
            ->select('id', 'discount_code', 'discount_value', 'discount_type', 'start_date', 'end_date', 'product_id')
            ->get();

        return response()->json([
            'message' => $vouchers->isEmpty() ? 'Tidak ada voucher yang tersedia saat ini.' : 'Data voucher berhasil diambil.',
            'vouchers' => $vouchers
        ]);
    }
}
