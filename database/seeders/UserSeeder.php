<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin Donlight',
            'email' => 'admin@donlight.com',
            'password' => Hash::make('dummy'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Customer Donlight',
            'email' => 'customer@donlight.com',
            'password' => Hash::make('dummy'),
            'role' => 'customer',
        ]);
    }
}
