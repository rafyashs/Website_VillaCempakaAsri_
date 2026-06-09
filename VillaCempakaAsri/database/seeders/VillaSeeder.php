<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       \App\Models\Villa::insert([
        ['nama_villa' => 'Rumah Lumbung', 'tipe' => 'Lumbung Tradisional', 'harga' => 850000],
        ['nama_villa' => 'Rumah Kayu 3 Kamar', 'tipe' => 'Villa Keluarga', 'harga' => 1200000],
        ['nama_villa' => 'Rumah Kayu 4 Kamar', 'tipe' => 'Villa Keluarga', 'harga' => 1500000],
        ['nama_villa' => 'Rumah Cempaka Asri', 'tipe' => 'Villa Asri', 'harga' => 950000],
        ['nama_villa' => 'E-Private Pool', 'tipe' => 'Private Pool', 'harga' => 1800000],
        ]);
    }
}
