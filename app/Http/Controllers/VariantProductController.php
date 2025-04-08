<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\VariantProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VariantProductController extends Controller
{
    public function index()
    {
        $variants = VariantProduct::with('product')->latest()->get();
        return view('dashboard.variant-products.index', compact('variants'));
    }

    public function create()
    {
        $products = Product::all();
        return view('dashboard.variant-products.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100',
            'stock' => 'required|integer|min:0',
            'status' => 'required|in:draft,publish',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('variant-images', 'public');
        }

        VariantProduct::create([
            'product_id' => $request->product_id,
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount ?? 0,
            'stock' => $request->stock,
            'status' => $request->status,
        ]);

        return redirect()->route('variant-products.index')->with('success', 'Varian produk berhasil ditambahkan.');
    }

    public function edit(VariantProduct $variantProduct)
    {
        $products = Product::all();
        return view('dashboard.variant-products.edit', compact('variantProduct', 'products'));
    }

    public function update(Request $request, VariantProduct $variantProduct)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100',
            'stock' => 'required|integer|min:0',
            'status' => 'required|in:draft,publish',
        ]);

        if ($request->hasFile('image')) {
            if ($variantProduct->image && Storage::disk('public')->exists($variantProduct->image)) {
                Storage::disk('public')->delete($variantProduct->image);
            }
            $variantProduct->image = $request->file('image')->store('variant-images', 'public');
        }

        $variantProduct->update([
            'product_id' => $request->product_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount ?? 0,
            'stock' => $request->stock,
            'status' => $request->status,
            'image' => $variantProduct->image, // Pastikan tidak null jika tidak diubah
        ]);

        return redirect()->route('variant-products.index')->with('success', 'Varian produk berhasil diperbarui.');
    }

    public function destroy(VariantProduct $variantProduct)
    {
        if ($variantProduct->image && Storage::disk('public')->exists($variantProduct->image)) {
            Storage::disk('public')->delete($variantProduct->image);
        }

        $variantProduct->delete();
        return redirect()->route('variant-products.index')->with('success', 'Varian produk berhasil dihapus.');
    }

    //Bulk
    public function bulkDelete(Request $request)
{
    $ids = $request->input('ids');

    if (empty($ids)) {
        return response()->json([
            'success' => false,
            'message' => 'Tidak ada varian produk yang dipilih.'
        ], 400);
    }

    $variants = VariantProduct::whereIn('id', $ids)->get();

    foreach ($variants as $variant) {
        if ($variant->image && Storage::disk('public')->exists($variant->image)) {
            Storage::disk('public')->delete($variant->image);
        }
    }

    VariantProduct::whereIn('id', $ids)->delete();

    return response()->json([
        'success' => true,
        'message' => 'Varian produk berhasil dihapus.'
    ]);
}

public function bulkDraft(Request $request)
{
    $ids = $request->input('ids');

    if (!empty($ids)) {
        VariantProduct::whereIn('id', $ids)->update(['status' => 'draft']);
        return response()->json([
            'success' => true,
            'message' => 'Varian produk berhasil diubah ke draft.'
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'Tidak ada varian produk yang dipilih.'
    ], 400);
}

public function bulkPublish(Request $request)
{
    $ids = $request->input('ids');

    if (!empty($ids)) {
        VariantProduct::whereIn('id', $ids)->update(['status' => 'publik']);
        return response()->json([
            'success' => true,
            'message' => 'Varian produk berhasil dipublikasikan.'
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'Tidak ada varian produk yang dipilih.'
    ], 400);
}

}
