<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            // Cart Count
            $cartCount = 0;
            if (Auth::check()) {
                $cartCount = \App\Models\Cart::where('user_id', Auth::id())->sum('quantity');
            }
    
            // Wishlist Count (by unique product_id in session)
            $wishlist = session('wishlist', []);
            $wishlistCount = is_array($wishlist) ? count($wishlist) : 0;
    
            // Share to all views
            $view->with('cartCount', $cartCount)
                 ->with('wishlistCount', $wishlistCount);
        });
    }
    
}
