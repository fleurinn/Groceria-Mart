<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Definisikan gate 'delete-user'
        Gate::define('delete-user', function ($authUser, $userToDelete) {
            return $authUser->role === 'admin' && $authUser->id !== $userToDelete->id;
        });

        // // Definisikan gate 'edit-product'
        // Gate::define('edit-product', function ($authUser, $product) {
        //     // Hanya admin atau pemilik produk yang dapat mengedit produk
        //     return $authUser->role === 'admin' || $authUser->id === $product->user_id;
        // });
    }
}