<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat role Admin
        Role::create([
            'name' => 'admin'
        ]);

        // Buat role Seller
        Role::create([
            'name' => 'seller'
        ]);

        // Buat role Buyer
        Role::create([
            'name' => 'buyer'
        ]);
    }
}
