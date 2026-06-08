<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Pastikan baris ini ada

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Villa',
            'email' => 'admin@villacempaka.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
    }
}
