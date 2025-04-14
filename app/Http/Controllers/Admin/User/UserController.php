<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\ShippingAddress;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('role')->get();
        return view('admin.pages.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::whereIn('id', [1, 2])->get(); // Hanya Admin dan Seller yang bisa dipilih
        return view('admin.pages.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'role_id' => 'required|exists:roles,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'shipping_addresses.*.no_telp' => 'nullable|string|max:15',
            'shipping_addresses.*.city_id' => 'nullable|integer',
            'shipping_addresses.*.district_id' => 'nullable|integer',
            'shipping_addresses.*.village_id' => 'nullable|integer',
            'shipping_addresses.*.address' => 'nullable|string|max:1000',
        ]);

        try {
            $imagePath = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = $image->hashName();
                $image->move(public_path('storage/users'), $imageName);
                $imagePath = 'users/' . $imageName;
            }

            // Buat user
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $request->role_id,
                'image' => $imagePath,
            ]);

            // Simpan alamat pengiriman
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
            'password' => 'nullable|string|min:6|confirmed',
            'role_id' => 'required|exists:roles,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'shipping_addresses.*.id' => 'nullable|integer|exists:shipping_addresses,id',
            'shipping_addresses.*.no_telp' => 'nullable|string|max:15',
            'shipping_addresses.*.city_id' => 'nullable|integer',
            'shipping_addresses.*.district_id' => 'nullable|integer',
            'shipping_addresses.*.village_id' => 'nullable|integer',
            'shipping_addresses.*.address' => 'nullable|string|max:1000',
        ]);

        try {
            // Update user
            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'role_id' => $request->role_id,
                'password' => $request->password ? Hash::make($request->password) : $user->password,
                'image' => $request->hasFile('image') ? $request->file('image')->store('images', 'public') : $user->image,
            ]);

            // Update atau simpan alamat pengiriman
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
                        // Update alamat yang sudah ada
                        $shippingAddress = ShippingAddress::where('id', $shipping['id'])
                            ->where('user_id', $user->id)
                            ->first();

                        if ($shippingAddress) {
                            $shippingAddress->update($data);
                        }
                    } else {
                        // Buat alamat baru
                        $user->shippingAddresses()->create($data);
                    }
                }
            }

            return redirect()->route('users.index')->with('success', 'User  berhasil diperbarui');
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