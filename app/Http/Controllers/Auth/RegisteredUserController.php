<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\ShippingAddress;
use App\Models\City;
use App\Models\District;
use App\Models\Village;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $city = City::all(); // Ambil semua kota
        $district = District::all(); // Ambil semua kecamatan
        $villages = Village::all(); // Ambil semua desa
        $roles = Role::whereIn('id', [1, 2, 3])->get(); 

        return view('auth.register', compact('city', 'district', 'villages', 'roles'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

            // shipping address
            'shipping_addresses.0.city_id' => ['nullable', 'exists:cities,id'],
            'shipping_addresses.0.district_id' => ['nullable', 'exists:districts,id'],
            'shipping_addresses.0.village_id' => ['nullable', 'exists:villages,id'],
            'shipping_addresses.0.address' => ['nullable', 'string'],
            'shipping_addresses.0.no_telp' => ['nullable', 'string'],
        ]);

        DB::transaction(function () use ($request, &$user) {
            // Simpan user
            $user = new User();
            $user->last_name = $request->last_name;
            $user->first_name = $request->first_name;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role_id = 3; // ✅ default role_id = 3 (buyer)
            $user->save();

            // Simpan alamat pengiriman
            $address = new ShippingAddress();
            $address->user_id = $user->id;
            $address->city_id = $request->shipping_addresses[0]['city_id'];
            $address->district_id = $request->shipping_addresses[0]['district_id'];
            $address->village_id = $request->shipping_addresses[0]['village_id'];
            $address->address = $request->shipping_addresses[0]['address'];
            $address->no_telp = $request->shipping_addresses[0]['no_telp'];
            $address->save();
        });

        event(new Registered($user));
        Auth::login($user);

        return redirect()->route('landing-page');
    }


    public function getDistricts($cityId) {
        $districts = District::where('city_id', $cityId)->get();
        return response()->json($districts);
    }
    
    public function getVillages($districtId) {
        $villages = Village::where('district_id', $districtId)->get();
        return response()->json($villages);
    }

    public function index(): View
    {
        // Ambil user beserta shipping address-nya
        $userId = Auth::id(); // Ambil ID user yang sedang login
        $user = User::with('shippingAddress')->findOrFail($userId); // Ambil user dengan relasi shippingAddress

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

        return view('landing.pages.profile.profile-index', compact('user', 'city', 'district', 'villages', 'roles'));
    }
    
    public function edit($id): View
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

        return view('landing.pages.profile.profile-edit', compact('user', 'city', 'district', 'villages', 'roles'));
    }

    
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'first_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['nullable', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
    
            // shipping address
            'shipping_addresses.0.city_id' => ['nullable', 'exists:cities,id'],
            'shipping_addresses.0.district_id' => ['nullable', 'exists:districts,id'],
            'shipping_addresses.0.village_id' => ['nullable', 'exists:villages,id'],
            'shipping_addresses.0.address' => ['nullable', 'string'],
            'shipping_addresses.0.no_telp' => ['nullable', 'string'],
        ]);
    
        DB::transaction(function () use ($request, $id) {
            $user = User::findOrFail($id);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
    
            $address = $user->shippingAddress;
            if ($address) {
                $address->update([
                    'city_id' => $request->shipping_addresses[0]['city_id'],
                    'district_id' => $request->shipping_addresses[0]['district_id'],
                    'village_id' => $request->shipping_addresses[0]['village_id'],
                    'address' => $request->shipping_addresses[0]['address'],
                    'no_telp' => $request->shipping_addresses[0]['no_telp'],
                ]);
            } else {
                ShippingAddress::create([
                    'user_id' => $user->id,
                    'city_id' => $request->shipping_addresses[0]['city_id'],
                    'district_id' => $request->shipping_addresses[0]['district_id'],
                    'village_id' => $request->  shipping_addresses[0]['village_id'],
                    'address' => $request->shipping_addresses[0]['address'],
                    'no_telp' => $request->shipping_addresses[0]['no_telp'],
                ]);
            }
        });
    
        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }
}
