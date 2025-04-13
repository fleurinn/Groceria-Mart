<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

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
        return view('admin.pages.banner.hero-index');
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

        // Simpan gambar baru
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

        return redirect()->route('slider.index')->with('success', 'Slider berhasil ditambahkan.');
    }

    public function edit(Slider $slider)
    {
        return view('admin.pages.banner.hero-index', compact('slider'));
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
                'status'              => 'required|in:Draft,Publish',
                'category_product_id' => 'required|exists:category_products,id',
            ]);

            // Cek apakah ada file gambar baru
            if ($request->hasFile('image')) {
                Log::info('Gambar baru ditemukan untuk slider ID: ' . $slider->id);

                // Hapus gambar lama
                if ($slider->image) {
                    $oldImagePath = public_path('storage/sliders/' . $slider->image);
                    if (File::exists($oldImagePath)) {
                        File::delete($oldImagePath);
                        Log::info('Gambar lama dihapus: ' . $oldImagePath);
                    } else {
                        Log::warning('Gambar lama tidak ditemukan: ' . $oldImagePath);
                    }
                }

                // Simpan gambar baru
                $image = $request->file('image');
                $imageName = $image->hashName();
                $image->move(public_path('storage/sliders'), $imageName);
                $slider->image = $imageName;
                Log::info('Gambar baru disimpan: ' . $imageName);
            }

            // Update data lainnya
            $slider->title               = $request->title;
            $slider->description         = $request->description;
            $slider->status              = $request->status;
            $slider->category_product_id = $request->category_product_id;
            $slider->save();

            Log::info('Slider berhasil diperbarui', ['slider_id' => $slider->id]);

            return redirect()->route('slider.index')->with('success', 'Slider berhasil diperbarui.');

        } catch (\Exception $e) {
            Log::error('Gagal memperbarui slider', [
                'slider_id' => $slider->id ?? null,
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString()
            ]);

            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui slider.');
        }
    }


    public function destroy(Slider $slider)
    {
        if ($slider->image) {
            $imagePath = public_path('storage/sliders/' . $slider->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $slider->delete();

        return redirect()->route('slider.index')->with('success', 'Slider berhasil dihapus.');
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
                $imagePath = public_path('storage/sliders/' . $slider->image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
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
