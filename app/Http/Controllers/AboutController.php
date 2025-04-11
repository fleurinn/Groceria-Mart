<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Menampilkan data tentang aplikasi/website.
     */
    public function index()
    {
        $about = About::first(); // Mengambil data pertama dari tabel
        return view('about.index', compact('about'));
    }

    /**
     * Menampilkan form untuk mengedit About.
     */
    public function edit()
    {
        $about = About::first();
        return view('about.edit', compact('about'));
    }

    /**
     * Memperbarui data About.
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $about = About::firstOrCreate([]);
    
        // Upload image1 jika ada
        if ($request->hasFile('image1')) {
            if ($about->image1) Storage::delete('public/about/' . $about->image1);
            $image1 = $request->file('image1');
            $image1Name = $image1->hashName();
            $image1->move(public_path('storage/about'), $image1Name);
            $about->image1 = $image1Name;
        }
    
        // Upload image2 jika ada
        if ($request->hasFile('image2')) {
            if ($about->image2) Storage::delete('public/about/' . $about->image2);
            $image2 = $request->file('image2');
            $image2Name = $image2->hashName();
            $image2->move(public_path('storage/about'), $image2Name);
            $about->image2 = $image2Name;
        }
    
        // Upload image3 jika ada
        if ($request->hasFile('image3')) {
            if ($about->image3) Storage::delete('public/about/' . $about->image3);
            $image3 = $request->file('image3');
            $image3Name = $image3->hashName();
            $image3->move(public_path('storage/about'), $image3Name);
            $about->image3 = $image3Name;
        }
    
        $about->title = $request->title;
        $about->description = $request->description;
        $about->save();
    
        return redirect()->route('about.index')->with('success', 'About page updated successfully.');
    }

}
