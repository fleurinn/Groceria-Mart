<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view (khusus role 3).
     */
    public function create(): View
    {
        return view('auth.login');
    }
    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->onlyInput('email');
        }
        $request->session()->regenerate();
        $user = Auth::user();
        if ($user->role_id == 3) {
            return redirect()->route('landing-page'); // atau dashboard untuk role 3
        } else {
            Auth::logout();
            return redirect()->route('login')->withErrors([
                'email' => 'Anda tidak memiliki akses untuk login di halaman ini.'
            ]);
        }
    }
    /**
     * Display the login GCMS view.
     */
    public function createGcms(): View
    {
        return view('auth.login-gcms');
    }
    /**
     * Handle an incoming GCMS authentication request.
     */
    public function storeGcms(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->onlyInput('email');
        }
        $request->session()->regenerate();
        $user = Auth::user();
        if (in_array($user->role_id, [1, 2, 4])) {
            if ($user->role_id == 1) {
                return redirect()->route('dashboard.admin');
            } elseif ($user->role_id == 2) {
                return redirect()->route('dashboard.seller');
            } elseif ($user->role_id == 4) {
                return redirect()->route('dashboard.kurir');
            }
        } else {
            Auth::logout();
            return redirect()->route('login-gcms')->withErrors([
                'email' => 'Anda tidak memiliki akses untuk login GCMS.'
            ]);
        }
    }
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logout berhasil. Sampai jumpa lagi!');
    }
}
