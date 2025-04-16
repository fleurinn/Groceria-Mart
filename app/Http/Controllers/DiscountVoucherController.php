<?php

namespace App\Http\Controllers;

use App\Models\DiscountVoucher;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class DiscountVoucherController extends Controller
{
    // Tampilkan daftar voucher
    public function index(Request $request)
    {
        $categoryProduct = CategoryProduct::all();
        $vouchers = DiscountVoucher::paginate(10);
        return view('admin.pages.voucher-discount.voucher-index', compact('vouchers', 'categoryProduct'));
    }

    // Tampilkan form untuk membuat voucher
    public function create()
    {
        $categoryProduct = CategoryProduct::all();
        return view('admin.pages.voucher-discount.voucher-create', compact('categoryProduct'));
    }

    // Simpan voucher baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'description' => 'nullable|string',
            'discount_type' => 'required|in:global,specific_product',
            'category_product_id' => [
                'nullable',
                Rule::exists('category_products', 'id')->when($request->discount_type === 'specific_product', function ($query) {
                    return $query->whereNotNull('id');
                }),
            ],
            'discount_value' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|in:draft,publish,expired',
        ]);

        $voucherData = $request->except('image');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('storage/voucher_images'), $imageName);
            $voucherData['image'] = 'voucher_images/' . $imageName;
        }

        do {
            $voucherCode = strtoupper(Str::random(8));
        } while (DiscountVoucher::where('discount_code', $voucherCode)->exists());

        $voucher = DiscountVoucher::create(array_merge($voucherData, ['discount_code' => $voucherCode]));

        return redirect()->route('discount-vouchers.index')->with('success', 'Voucher berhasil dibuat.');
    }


    // Tampilkan detail voucher
    public function show($id)
    {
        $voucher = DiscountVoucher::with('categoryProduct')->findOrFail($id);
        return view('admin.pages.voucher-discount.voucher-show', compact('voucher'));
    }

    // Tampilkan form edit voucher
    public function edit($id)
    {
        $voucher = DiscountVoucher::findOrFail($id);
        $categoryProduct = CategoryProduct::all();
        return view('admin.pages.voucher-discount.voucher-edit', compact('voucher', 'categoryProduct'));
    }

    // Update voucher
    public function update(Request $request, $id)
    {
        $voucher = DiscountVoucher::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'discount_type' => 'required|in:global,specific_product',
            'category_product_id' => [
                'nullable',
                Rule::exists('category_products', 'id')->when($request->discount_type === 'specific_product', function ($query) {
                    return $query->whereNotNull('id');
                }),
            ],
            'discount_value' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|in:draft,publish,expired',
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

        return redirect()->route('discount-vouchers.index')->with('success', 'Voucher berhasil diperbarui.');
    }


    // Hapus voucher
    public function destroy($id)
    {
        $voucher = DiscountVoucher::findOrFail($id);

        if ($voucher->image && file_exists(public_path('storage/' . $voucher->image))) {
            unlink(public_path('storage/' . $voucher->image));
        }

        $voucher->delete();

        return redirect()->route('discount-vouchers.index')->with('success', 'Voucher berhasil dihapus.');
    }

    // Terapkan kode voucher
    public function applyVoucherCode($voucherCode, $category_product_id = null)
    {
        $voucher = DiscountVoucher::where('discount_code', $voucherCode)->first();

        if (!$voucher || !$voucher->isValid()) {
            return response()->json(['success' => false, 'message' => 'Kode voucher tidak valid atau sudah kedaluwarsa.']);
        }

        if ($voucher->discount_type === 'specific_product' && $voucher->category_product_id != $category_product_id) {
            return response()->json(['success' => false, 'message' => 'Kode voucher tidak berlaku untuk produk ini.']);
        }

        $categoryProduct = CategoryProduct::find($category_product_id);
        $originalPrice = $categoryProduct ? $categoryProduct->price : null;
        $finalPrice = $originalPrice;

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

    // Ambil daftar voucher aktif
    public function getVoucherList()
    {
        $now = now();
        $vouchers = DiscountVoucher::where('start_date', '<=', $now)
            ->where('end_date', '>=', $now)
            ->with('categoryProduct:id,name,price')
            ->select('id', 'discount_code', 'discount_value', 'start_date', 'end_date', 'category_product_id')
            ->get();

        return response()->json([
            'message' => $vouchers->isEmpty() ? 'Tidak ada voucher yang tersedia saat ini.' : 'Data voucher berhasil diambil.',
            'vouchers' => $vouchers
        ]);
    }

    // Perbarui status voucher
    public function updateStatus(Request $request, $id)
    {
        $request->validate(['status' => 'required|in:draft,publish,expired']);
        $voucher = DiscountVoucher::findOrFail($id);
        $voucher->status = $request->status;
        $voucher->save();

        return response()->json(['message' => 'Status voucher diperbarui', 'data' => $voucher]);
    }

    // Update otomatis status expired
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

    // Bulk actions
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return response()->json(['success' => false, 'message' => 'Tidak ada voucher yang dipilih.'], 400);
        }

        $vouchers = DiscountVoucher::whereIn('id', $ids)->get();

        foreach ($vouchers as $voucher) {
            if ($voucher->image) {
                Storage::delete('public/' . $voucher->image);
            }
        }

        DiscountVoucher::whereIn('id', $ids)->delete();

        return response()->json(['success' => true, 'message' => 'Voucher berhasil dihapus secara massal.']);
    }

    public function bulkDraft(Request $request)
    {
        return $this->bulkUpdateStatus($request, 'draft');
    }

    public function bulkPublish(Request $request)
    {
        return $this->bulkUpdateStatus($request, 'publish');
    }

    public function bulkExpire(Request $request)
    {
        return $this->bulkUpdateStatus($request, 'expired');
    }

    protected function bulkUpdateStatus(Request $request, $status)
    {
        $ids = $request->input('ids');

        if ($ids) {
            DiscountVoucher::whereIn('id', $ids)->update(['status' => $status]);
            return response()->json(['success' => true, 'message' => "Voucher berhasil diubah menjadi $status."]);
        }

        return response()->json(['success' => false, 'message' => 'Tidak ada voucher yang dipilih.'], 400);
    }
}
