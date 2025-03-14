<?php

namespace App\Http\Controllers;

use App\Models\ShippingRate;
use Illuminate\Http\Request;

class ShippingRateController extends Controller
{
    /**
     * Menampilkan semua data ongkos kirim.
     */
    public function index()
    {
        $shippingRates = ShippingRate::latest()->get(); // Ambil semua data dengan urutan terbaru
        return view('shipping_rates.index', compact('shippingRates'));
    }

    /**
     * Menampilkan form untuk menambah data ongkos kirim.
     */
    public function create()
    {
        return view('shipping_rates.create');
    }

    /**
     * Menyimpan data ongkos kirim baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'origin' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'estimated_time' => 'required|string|max:255',
        ]);

        ShippingRate::create($request->all());

        return redirect()->route('shipping_rates.index')->with('success', 'Shipping rate added successfully.');
    }

    /**
     * Menampilkan form edit data ongkos kirim.
     */
    public function edit($id)
    {
        $shippingRate = ShippingRate::findOrFail($id);
        return view('shipping_rates.edit', compact('shippingRate'));
    }

    /**
     * Memperbarui data ongkos kirim.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'origin' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'estimated_time' => 'required|string|max:255',
        ]);

        $shippingRate = ShippingRate::findOrFail($id);
        $shippingRate->update($request->all());

        return redirect()->route('shipping_rates.index')->with('success', 'Shipping rate updated successfully.');
    }

    /**
     * Menghapus data ongkos kirim.
     */
    public function destroy($id)
    {
        $shippingRate = ShippingRate::findOrFail($id);
        $shippingRate->delete();

        return redirect()->route('shipping_rates.index')->with('success', 'Shipping rate deleted successfully.');
    }
}
