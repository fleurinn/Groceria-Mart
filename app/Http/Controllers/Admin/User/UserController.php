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
        $shippingAddress = ShippingAddress::all(); // Ambil semua desa

        return view('admin.pages.users.user-index', compact('users', 'shippingAddress', 'roles', 'city', 'district', 'villages'));
    }


    public function create()
    {
        $city = City::all(); // Ambil semua kota
        $district = District::all(); // Ambil semua kecamatan
        $villages = Village::all(); // Ambil semua desa
        $roles = Role::whereIn('id', [1, 2, 3])->get(); // Hanya Admin, Seller, dan satu lainnya

        return view('admin.pages.users.user-create', compact('roles', 'city', 'district', 'villages'));
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

        // Simpan gambar utama dengan move()
        $imageName = $request->file('image')->hashName();
        $request->file('image')->move(public_path('storage/profile_images'), $imageName);

        // Simpan user
        $user = new User();
        $user->name = $request->name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->image = $imageName;
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
        $district = District::where('city_id', $city_id)->get();

        return response()->json($district);
    }

    public function edit($id)
    {
        // Ambil user beserta shipping address-nya
        $user = User::with('shippingAddress')->findOrFail($id);

        // Ambil semua data kota untuk dropdown city
        $city = City::all();

        // Ambil district hanya yang sesuai dengan city_id dari shipping address user
        $shipping = $user->shippingAddress;
        $district = collect(); // Default kosong

        if ($shipping && $shipping->city_id) {
            $district = District::where('city_id', $shipping->city_id)->get();
        }

        $villages = collect();
        if ($shipping && $shipping->district_id) {
            $villages = Village::where('district_id', $shipping->district_id)->get();
        }

        // Ambil data role
        $roles = Role::whereIn('id', [1, 2, 3])->get();

        return view('admin.pages.users.user-edit', compact('user', 'city', 'district', 'villages', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
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
        $address = $user->shippingAddress()->first();
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

        return redirect()->route('profile-pengguna.show', ['profile_pengguna' => $user->id])->with('success', 'User berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Cegah user menghapus dirinya sendiri
        if (Auth::id() == $user->id) {
            return back()->with('error', 'Anda tidak bisa menghapus akun Anda sendiri.');
        }

        // Hapus gambar jika ada
        if ($user->image && Storage::exists('public/profile_images/' . $user->image)) {
            Storage::delete('public/profile_images/' . $user->image);
        }

        // Hapus alamat pengiriman terkait
        foreach ($user->shippingAddresses ?? [] as $shippingAddress) {
            $shippingAddress->delete();
        }
        
        $user->delete();

        return redirect()->route('profile-pengguna.index')->with('success', 'User  berhasil dihapus');
    }

    public function show($id)
    {
        
        $user = User::with([
            'role',
            'shippingAddress.village',
            'shippingAddress.district',
            'shippingAddress.city'
        ])->findOrFail($id);

        return view('admin.pages.users.user-show', compact('user'));
    }

    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');
    
        if (empty($ids) || !is_array($ids)) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada user yang dipilih atau format ID salah.'
            ], 400);
        }
    
        $users = User::with('shippingAddress')->whereIn('id', $ids)->get();
    
        foreach ($users as $user) {
            // Hapus gambar profil jika ada
            if ($user->image) {
                Storage::delete('public/profile_images/' . $user->image);
            }
    
            // Hapus shipping address jika ada
            foreach ($user->shippingAddresses ?? [] as $shippingAddress) {
                $shippingAddress->delete();
            }
    
            // Hapus user
            $user->delete();
        }
    
        return response()->json([
            'success' => true,
            'message' => 'User dan alamat pengiriman berhasil dihapus.'
        ]);
    }
    
}

