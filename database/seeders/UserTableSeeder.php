<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create data user
        User::create([
            'first_name'=> 'Adhya',
            'last_name' => 'Setyawati',
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('12345678'),
            'role_id'   => 1,
        ]);

        User::create([
            'first_name'=> 'Dedi',
            'last_name' => 'Humaedi',
            'name'      => 'Seller',
            'email'     => 'seller@gmail.com',
            'password'  => bcrypt('12345678'),
            'role_id'   => 2,
        ]);

        User::create([
            'first_name'=> 'Gea',
            'last_name' => 'Kiera',
            'name'      => 'buyer',
            'email'     => 'buyer@gmail.com',
            'password'  => bcrypt('12345678'),
            'role_id'   => 3,
        ]);

    }
}
