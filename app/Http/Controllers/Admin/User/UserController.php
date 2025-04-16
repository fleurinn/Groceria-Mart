<?php

namespace App\Http\Controllers\Admin\User;

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

class UserController extends Controller
{
    public function index()
    {
        $city = City::all(); // Ambil semua kota
        $district = District::all(); // Ambil semua kecamatan
        $villages = Village::all(); // Ambil semua desa
        $users = User::with('role')->get();
        $roles = Role::whereIn('id', [1, 2, 3, 4])->get(); // Tambahkan ini

        return view('admin.pages.users.user-index', compact('users', 'roles', 'city', 'district', 'villages'));
    }


    public function create()
    {
        $city = City::all(); // Ambil semua kota
        $districts = District::all(); // Ambil semua kecamatan
        $villages = Village::all(); // Ambil semua desa
        $roles = Role::whereIn('id', [1, 2, 3])->get(); // Hanya Admin, Seller, dan satu lainnya

        return view('admin.pages.users.user-create', compact('roles', 'city', 'districts', 'villages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role_id' => 'required|exists:roles,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            // shipping address
            'shipping_addresses.0.city_id' => 'required|exists:cities,id',
            'shipping_addresses.0.district_id' => 'required|exists:districts,id',
            'shipping_addresses.0.village_id' => 'required|exists:villages,id',
            'shipping_addresses.0.address' => 'required|string',
            'shipping_addresses.0.no_telp' => 'required|string',
        ]);

        // Simpan user
        $user = new User();
        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;

        // Simpan foto jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $user->image = $imagePath;
        }

        $user->save();

        // Simpan alamat
        $address = new ShippingAddress();
        $address->user_id = $user->id;
        $address->city_id = $request->shipping_addresses[0]['city_id'];
        $address->district_id = $request->shipping_addresses[0]['district_id'];
        $address->village_id = $request->shipping_addresses[0]['village_id'];
        $address->address = $request->shipping_addresses[0]['address'];
        $address->no_telp = $request->shipping_addresses[0]['no_telp'];
        $address->save();

        return redirect()->route('profile-pengguna.index')->with('success', 'User berhasil ditambahkan!');
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

    public function edit($id)
    {
        $user = User::with('shippingAddresses')->findOrFail($id);
        $city = City::all();
        $districts = District::all();
        $villages = Village::all();
        $roles = Role::whereIn('id', [1, 2, 3])->get();

        return view('admin.pages.users.user-edit', compact('user', 'roles', 'city', 'districts', 'villages'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
            'role_id' => 'required|exists:roles,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            'shipping_addresses.0.city_id' => 'required|exists:cities,id',
            'shipping_addresses.0.district_id' => 'required|exists:districts,id',
            'shipping_addresses.0.village_id' => 'required|exists:villages,id',
            'shipping_addresses.0.address' => 'required|string',
            'shipping_addresses.0.no_telp' => 'required|string',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($user->image && Storage::disk('public')->exists($user->image)) {
                Storage::disk('public')->delete($user->image);
            }
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $user->image = $imagePath;
        }

        $user->save();

        $addressData = $request->shipping_addresses[0];
        $address = $user->shippingAddresses()->first();
        if (!$address) {
            $address = new ShippingAddress();
            $address->user_id = $user->id;
        }
        $address->city_id = $addressData['city_id'];
        $address->district_id = $addressData['district_id'];
        $address->village_id = $addressData['village_id'];
        $address->address = $addressData['address'];
        $address->no_telp = $addressData['no_telp'];
        $address->save();

        return redirect()->route('profile-pengguna.index')->with('success', 'User berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Cegah user menghapus dirinya sendiri
        if (Auth::id() == $user->id) {
            return back()->with('error', 'Anda tidak bisa menghapus akun Anda sendiri.');
        }

        // Hapus gambar jika ada
        if ($user->image && Storage::exists('public/' . $user->image)) {
            Storage::delete('public/' . $user->image);
        }

        // Hapus alamat pengiriman terkait
        foreach ($user->shippingAddresses as $shippingAddress) {
            $shippingAddress->delete();
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'User  berhasil dihapus');
    }
}

