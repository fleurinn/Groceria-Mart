<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\ShippingAddress;
use App\Models\City;
use App\Models\District;
use App\Models\Village;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileCustController extends Controller
{
    public function index()
    {
        $city = City::all(); // Ambil semua kota
        $district = District::all(); // Ambil semua kecamatan
        $villages = Village::all(); // Ambil semua desa
        $users = User::with('role')->get();
        $roles = Role::whereIn('id', [1, 2, 3, 4])->get(); // Tambahkan ini

        return view('landing.pages.profile.profile-index', compact('users', 'roles', 'city', 'district', 'villages'));
    }

    public function create()
    {
        $cities = City::all();
        $districts = District::all();
        $villages = Village::all();

        return view('landing.pages.profile.profile-index', compact('cities', 'districts', 'villages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_telp' => 'required|string|max:20',
            'city_id' => 'required|exists:cities,id',
            'district_id' => 'required|exists:districts,id',
            'village_id' => 'required|exists:villages,id',
            'address' => 'required|string|max:255',
        ]);

        $shippingAddress = ShippingAddress::create([
            'user_id' => Auth::id(),
            'no_telp' => $request->no_telp,
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'village_id' => $request->village_id,
            'address' => $request->address,
        ]);

        return redirect()->route('landing.pages.profile.profile-index')->with('success', 'Alamat berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $shippingAddress = ShippingAddress::findOrFail($id);

        if ($shippingAddress->user_id !== Auth::id()) {
            abort(403);
        }

        $cities = City::all();
        $districts = District::all();
        $villages = Village::all();

        return view('landing.pages.profile.profile-edit', compact('shippingAddress', 'cities', 'districts', 'villages'));
    }

    public function update(Request $request, $id)
    {
        $shippingAddress = ShippingAddress::findOrFail($id);

        if ($shippingAddress->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'no_telp' => 'required|string|max:20',
            'city_id' => 'required|exists:cities,id',
            'district_id' => 'required|exists:districts,id',
            'village_id' => 'required|exists:villages,id',
            'address' => 'required|string|max:255',
        ]);

        $shippingAddress->update([
            'no_telp' => $request->no_telp,
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'village_id' => $request->village_id,
            'address' => $request->address,
        ]);

        return redirect()->route('landing.pages.profile.profile-index')->with('success', 'Alamat berhasil diperbarui.');
    }

    public function getVillages($district_id)
    {
        $villages = \App\Models\Village::where('district_id', $district_id)->get();
        return response()->json($villages);
    }

    public function getDistricts($city_id)
    {
        $districts = District::where('city_id', $city_id)->get();

        return response()->json($districts);
    }

}

