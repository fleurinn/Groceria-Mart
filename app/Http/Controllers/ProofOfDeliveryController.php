<?php

namespace App\Http\Controllers;

use App\Models\ProofOfDelivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class ProofOfDeliveryController extends Controller
{
    public function index()
    {
        return response()->json(ProofOfDelivery::all(), 200);
    }

    public function store(Request $request)
{
    $request->validate([
        'checkout_id' => 'required|exists:checkouts,id',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'auto_location' => 'required|string|max:255'
    ]);

    // Simpan gambar dengan hashName ke folder 'proof_of_deliveries'
    $image = $request->file('image');
    $imageName = $image->hashName();
    $image->move(public_path('storage/proof_of_deliveries'), $imageName);
    $imagePath = 'proof_of_deliveries/' . $imageName;

    //Simpan data ke datebase
    $proof = ProofOfDelivery::create([
        'checkout_id' => $request->checkout_id,
        'image' => $imagePath,
        'auto_time' => now()->format('H:i:s'),
        'auto_date' => now()->format('Y-m-d'),
        'auto_location' => $request->auto_location,
    ]);

    return response()->json($proof, 201);
}
    public function show($id)
    {
        $proof = ProofOfDelivery::findOrFail($id);
        return response()->json($proof, 200);
    }

    public function destroy($id)
    {
        $proof = ProofOfDelivery::findOrFail($id);

        // Hapus file gambar jika ada
        if ($proof->image && Storage::disk('public')->exists($proof->image)) {
            Storage::disk('public')->delete($proof->image);
        }

        $proof->delete();

        return response()->json(['message' => 'Proof of Delivery deleted successfully'], 200);
    }
}
