<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
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
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('storage/users'), $imageName);
            $imagePath = 'users/' . $imageName;
            }

        // Jika role_id tidak dipilih, defaultnya Buyer (id = 3)
        $role_id = $request->role_id ?? 3;

        User::create([
         'first_name' => $request->first_name,
         'last_name' => $request->last_name,
         'name' => trim($request->first_name . ' ' . $request->last_name),
         'email' => $request->email,
         'password' => Hash::make($request->password),
         'role_id' => $role_id,
         'image' => $imagePath,
        ]);
        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan');
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.pages.users.edit', compact('user', 'roles'));
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
        ]);

        if ($request->hasFile('image')) {
            if ($user->image && Storage::exists('public/' . $user->image)) {
                Storage::delete('public/' . $user->image);
            }
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('storage/users'), $imageName);
            $user->image = 'users/' . $imageName;
        }
        

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'name' => trim($request->first_name . ' ' . $request->last_name),
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'role_id' => $request->role_id,
            'image' => $user->image,
        ]);

        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui');
    }

    public function destroy($id)
    {
    $user = User::findOrFail($id);

    // Cek apakah user saat ini punya izin menghapus user ini
    // $this->authorize('delete', $user);

    // Cegah user menghapus dirinya sendiri
    if (Auth::id() == $user->id) {
        return back()->with('error', 'Anda tidak bisa menghapus akun Anda sendiri.');
    }

    // Hapus gambar jika ada
    if ($user->image && Storage::exists('public/' . $user->image)) {
        Storage::delete('public/' . $user->image);
    }
    $user->delete();

    return redirect()->route('users.index')->with('success', 'User berhasil dihapus');
    }

}
