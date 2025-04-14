<?php

namespace App\Http\Controllers;

use App\Models\DiscountVoucher;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
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
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $voucherData = $request->except('image');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('storage/voucher_images'), $imageName);
            $voucherData['image'] = 'voucher_images/' . $imageName;
        }

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
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
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
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $dataToUpdate = $request->except('image');

        if ($request->hasFile('image')) {
            if ($voucher->image && file_exists(public_path('storage/' . $voucher->image))) {
                unlink(public_path('storage/' . $voucher->image));
            }
        
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('storage/voucher_images'), $imageName);
            $dataToUpdate['image'] = 'voucher_images/' . $imageName;
        }
        
        $voucher->update($dataToUpdate);

        return response()->json(['message' => 'Voucher berhasil diperbarui', 'data' => $voucher]);
    }

    // Hapus voucher
    public function destroy($id)
    {
    $voucher = DiscountVoucher::findOrFail($id);

    // Hapus gambar jika ada
    if ($voucher->image && file_exists(public_path('storage/' . $voucher->image))) {
        unlink(public_path('storage/' . $voucher->image));
    }

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
            $finalPrice = max(0, $originalPrice - $voucher->discount_value);
        }
        

        return response()->json([
            'success' => true,
            'discount_code' => $voucher->discount_code,
            'discount_value' => $voucher->discount_value,
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
            ->select('id', 'discount_code', 'discount_value', 'start_date', 'end_date', 'product_id')
            ->get();

        return response()->json([
            'message' => $vouchers->isEmpty() ? 'Tidak ada voucher yang tersedia saat ini.' : 'Data voucher berhasil diambil.',
            'vouchers' => $vouchers
        ]);
    }

    // Perbarui status voucher
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:draft,publish,expired',
        ]);

        $voucher = DiscountVoucher::findOrFail($id);
        $voucher->status = $request->status;
        $voucher->save();

        return response()->json(['message' => 'Status voucher diperbarui', 'data' => $voucher]);
    }

    /**
     * Cek dan update status voucher jika sudah kedaluwarsa
     */
    public function autoUpdateExpiredVouchers()
    {
        $expiredVouchers = DiscountVoucher::expiredButPublished()->get();

        foreach ($expiredVouchers as $voucher) {
            $voucher->update(['status' => 'draft']);
        }

        return response()->json([
            'message' => $expiredVouchers->isEmpty()
                ? 'Tidak ada voucher yang perlu diubah statusnya.'
                : count($expiredVouchers) . ' voucher berhasil diubah menjadi draft.'
        ]);
    }


    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');
    
        if (empty($ids)) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada voucher yang dipilih.'
            ], 400);
        }
    
        $vouchers = DiscountVoucher::whereIn('id', $ids)->get();
    
        foreach ($vouchers as $voucher) {
            if ($voucher->image) { // Jika ada gambar promo voucher
                Storage::delete('public/discount_vouchers/' . $voucher->image); // Sesuaikan path foldernya
            }
        }
    
        DiscountVoucher::whereIn('id', $ids)->delete();
    
        return response()->json([
            'success' => true,
            'message' => 'Voucher berhasil dihapus secara massal.'
        ]);
    }
    public function bulkDraft(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            DiscountVoucher::whereIn('id', $ids)->update(['status' => 'draft']);

            return response()->json([
                'success' => true,
                'message' => 'Voucher berhasil diubah menjadi draft.'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Tidak ada voucher yang dipilih.'
        ], 400);
    }

    public function bulkPublish(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            DiscountVoucher::whereIn('id', $ids)->update(['status' => 'publish']);

            return response()->json([
                'success' => true,
                'message' => 'Voucher berhasil dipublikasikan.'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Tidak ada voucher yang dipilih.'
        ], 400);
    }

    public function bulkExpire(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            DiscountVoucher::whereIn('id', $ids)->update(['status' => 'expired']);

            return response()->json([
                'success' => true,
                'message' => 'Voucher berhasil diubah menjadi kedaluwarsa.'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Tidak ada voucher yang dipilih.'
        ], 400);
    }


}