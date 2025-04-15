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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
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

            // Log success message
            \Log::info('User  berhasil ditambahkan', [
                'user_id' => $user->id,
                'email' => $user->email,
                'shipping_addresses' => $request->shipping_addresses,
            ]);

            return redirect()->route('profile-pengguna.index')->with('success', 'User  berhasil ditambahkan!');
        } catch (\Throwable $e) {
            \Log::channel('daily')->error('Gagal menyimpan user', [
                'error_message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all(),
            ]);
        
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan user. Silakan cek log.');
        }
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

        if (Auth::id() == $user->id) {
            return back()->with('error', 'Anda tidak bisa menghapus akun Anda sendiri.');
        }

        if ($user->image && Storage::exists('public/' . $user->image)) {
            Storage::delete('public/' . $user->image);
        }

        $user->shippingAddresses()->delete();
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus');
    }
}
