<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SliderController extends Controller
{
    public function index()
    {
        $categoryproducts = CategoryProduct::all();        
        $sliders = Slider::with('categoryproduct')->paginate(10);

        return view('admin.pages.banner.hero-index', compact('sliders', 'categoryproducts'));
    }

    public function create()
    {
        $categoryproducts = CategoryProduct::all();
        return view('admin.pages.banner.hero-create', compact('categoryproducts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'               => 'required|string|max:255',
            'description'         => 'required|string|max:1000',
            'image'               => 'required|image|mimes:jpeg,jpg,png',
            'status'              => 'required|in:draft,publish',
            'category_product_id' => 'required|exists:category_products,id',
        ]);

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->move(public_path('storage/sliders'), $imageName);

        Slider::create([
            'title'               => $request->title,
            'description'         => $request->description,
            'image'               => $imageName,
            'status'              => $request->status,
            'category_product_id' => $request->category_product_id,
        ]);

        return redirect()->route('sliders.index')->with('success', 'Slider berhasil ditambahkan.');
    }

    public function edit(Slider $slider)
    {
        $categoryproducts = CategoryProduct::all();
        return view('admin.pages.banner.hero-edit', compact('slider', 'categoryproducts'));
    }

    public function update(Request $request, Slider $slider)
    {
        try {
            Log::info('Mulai proses update slider', [
                'slider_id' => $slider->id,
                'request_data' => $request->all()
            ]);

            $request->validate([
                'title'               => 'required|string|max:255',
                'description'         => 'required|string|max:1000',
                'image'               => 'nullable|image|mimes:jpeg,jpg,png',
                'status'              => 'required|in:draft,publish',
                'category_product_id' => 'required|exists:category_products,id',
            ]);

            if ($request->hasFile('image')) {
                if ($slider->image && Storage::exists('public/sliders/' . $slider->image)) {
                    Storage::delete('public/sliders/' . $slider->image);
                }

                $image = $request->file('image');
                $imageName = $image->hashName();
                $image->move(public_path('storage/sliders'), $imageName);

                $slider->update([
                    'title'               => $request->title,
                    'description'         => $request->description,
                    'image'               => $imageName,
                    'status'              => $request->status,
                    'category_product_id' => $request->category_product_id,
                ]);
            } else {
                $slider->update([
                    'title'               => $request->title,
                    'description'         => $request->description,
                    'status'              => $request->status,
                    'category_product_id' => $request->category_product_id,
                ]);
            }

            return redirect()->route('sliders.index')->with('success', 'Slider berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error('Gagal memperbarui slider: ' . $e->getMessage());
            return redirect()->route('sliders.index')->with('error', 'Gagal memperbarui slider.');
        }
    }

    public function destroy(Slider $slider)
    {
        try {
            if ($slider->image && Storage::exists('public/sliders/' . $slider->image)) {
                Storage::delete('public/sliders/' . $slider->image);
            }

            $slider->delete();

            return redirect()->route('sliders.index')->with('success', 'Slider berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('sliders.index')->with('error', 'Terjadi kesalahan saat menghapus slider: ' . $e->getMessage());
        }
    }

    public function show(string $id): View
    {
        $slider = Slider::with('products')->findOrFail($id);
        return view('sliders.show', compact('slider'));
    }

    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');

        if (empty($ids)) {
            return response()->json(['success' => false, 'message' => 'Tidak ada slider yang dipilih.'], 400);
        }

        $sliders = Slider::whereIn('id', $ids)->get();

        foreach ($sliders as $slider) {
            if ($slider->image) {
                $imagePath = 'public/sliders/' . $slider->image;
                if (Storage::exists($imagePath)) {
                    Storage::delete($imagePath);
                }
            }
        }

        Slider::whereIn('id', $ids)->delete();

        return response()->json(['success' => true, 'message' => 'Slider berhasil dihapus.']);
    }

    public function bulkDraft(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            Slider::whereIn('id', $ids)->update(['status' => 'draft']);
            return response()->json(['success' => true, 'message' => 'Slider berhasil diubah ke draft.']);
        }

        return response()->json(['success' => false, 'message' => 'Tidak ada slider yang dipilih.'], 400);
    }

    public function bulkPublish(Request $request)
    {
        $ids = $request->input('ids');

        if ($ids) {
            Slider::whereIn('id', $ids)->update(['status' => 'publish']);
            return response()->json(['success' => true, 'message' => 'Slider berhasil dipublikasikan.']);
        }

        return response()->json(['success' => false, 'message' => 'Tidak ada slider yang dipilih.'], 400);
    }
}
