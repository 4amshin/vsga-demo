<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtraksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('atraksis')->insert([
            [
                'nama_atraksi' => 'Penangkaran Lebah',
                'gambar' => null,
                'rating' => 4.3,
                'harga' => 300000,
            ],
            [
                'nama_atraksi' => 'Agrowisata Kebun Durian',
                'gambar' => null,
                'rating' => 4.5,
                'harga' => 50000,
            ],
            [
                'nama_atraksi' => 'Pembuatan Gula Aren',
                'gambar' => null,
                'rating' => 4.7,
                'harga' => 30000,
            ],
        ]);
    }
}
