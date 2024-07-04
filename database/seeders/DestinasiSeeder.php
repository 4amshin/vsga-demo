<?php

namespace Database\Seeders;

use App\Models\Destinasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinasis')->insert([
            [
                'nama_destinasi' => 'Tebing',
                'gambar' => null,
            ],
            [
                'nama_destinasi' => 'Sarang Sarang',
                'gambar' => null,
            ],
            [
                'nama_destinasi' => 'Kebun Organik',
                'gambar' => null,
            ],
            [
                'nama_destinasi' => 'Bukit Bintang',
                'gambar' => null,
            ],
        ]);
    }
}
