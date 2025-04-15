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
        $district = District::all(); // Ambil semua kecamatan
        $villages = Village::all(); // Ambil semua desa
        $roles = Role::whereIn('id', [1, 2, 3])->get(); // Hanya Admin, Seller, dan satu lainnya

        return view('admin.pages.users.user-create', compact('roles', 'city', 'district', 'villages'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'role_id' => 'required|exists:roles,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg',
            'shipping_addresses.*.no_telp' => 'nullable|string|max:15',
            'shipping_addresses.*.city_id' => 'nullable|integer|exists:cities,id',
            'shipping_addresses.*.district_id' => 'required|integer|exists:districts,id',
            'shipping_addresses.*.village_id' => 'required|integer|exists:villages,id',
            'shipping_addresses.*.address' => 'nullable|string|max:1000',
        ]);

        try {
            // Handle image upload
            $imagePath = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = $image->hashName();
                $image->move(public_path('storage/users'), $imageName);
                $imagePath = 'users/' . $imageName;
            }

            // Create user
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number, // Simpan nomor handphone
                'password' => Hash::make($request->password),
                'role_id' => $request->role_id,
                'image' => $imagePath,
            ]);

            // Handle shipping addresses
            if ($request->has('shipping_addresses')) {
                foreach ($request->shipping_addresses as $shipping) {
                    $user->shippingAddresses()->create([
                        'no_telp' => $shipping['no_telp'] ?? null,
                        'city_id' => $shipping['city_id'] ?? null,
                        'district_id' => $shipping['district_id'] ?? null,
                        'village_id' => $shipping['village_id'] ?? null,
                        'address' => $shipping['address'] ?? null,
                    ]);
                }
            }

            return redirect()->route('users.index')->with('success', 'User  berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan user: ' . $e->getMessage());
        }
    }

    public function edit(User $user)
    {
        $shippingAddresses = $user->shippingAddresses;
        $roles = Role::all();
        return view('admin.pages.users.edit', compact('user', 'shippingAddresses', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone_number' => 'nullable|string|max:15|unique:users,phone_number,' . $user->id, // Validasi nomor handphone untuk update
            'password' => 'nullable|string|min:6|confirmed',
            'role_id' => 'required|exists:roles,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg',
            'shipping_addresses.*.id' => 'nullable|integer|exists:shipping_addresses,id',
            'shipping_addresses.*.no_telp' => 'nullable|string|max:15',
            'shipping_addresses.*.city_id' => 'nullable|integer',
            'shipping_addresses.*.district_id' => 'nullable|integer',
            'shipping_addresses.*.village_id' => 'nullable|integer',
            'shipping_addresses.*.address' => 'nullable|string|max:1000',
        ]);

        try {
            $dataToUpdate = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number, // Update nomor handphone
                'role_id' => $request->role_id,
            ];

            if ($request->filled('password')) {
                $dataToUpdate['password'] = Hash::make($request->password);
            }

            if ($request->hasFile('image')) {
                $dataToUpdate['image'] = $request->file('image')->store('users', 'public');
            }

            $user->update($dataToUpdate);

            if ($request->has('shipping_addresses')) {
                foreach ($request->shipping_addresses as $shipping) {
                    $data = [
                        'no_telp' => $shipping['no_telp'] ?? null,
                        'city_id' => $shipping['city_id'] ?? null,
                        'district_id' => $shipping['district_id'] ?? null,
                        'village_id' => $shipping['village_id'] ?? null,
                        'address' => $shipping['address'] ?? null,
                    ];

                    if (!empty($shipping['id'])) {
                        $shippingAddress = ShippingAddress::where('id', $shipping['id'])
                            ->where('user_id', $user->id)
                            ->first();

                        if ($shippingAddress) {
                            $shippingAddress->update($data);
                        }
                    } else {
                        $user->shippingAddresses()->create($data);
                    }
                }
            }

            return redirect()->route('users.index')->with('success', 'User berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui user: ' . $e->getMessage());
        }
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