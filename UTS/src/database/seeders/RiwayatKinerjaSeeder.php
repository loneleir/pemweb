<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RiwayatKinerja;

class RiwayatKinerjaSeeder extends Seeder
{
    public function run()
    {
        RiwayatKinerja::create([
            'guru_id' => 1,
            'semester' => 'Ganjil',
            'tahun_ajaran' => '2023/2024',
            'nilai_kinerja' => 85,
            'catatan' => 'Performa bagus pada semester ganjil',
        ]);

        RiwayatKinerja::create([
            'guru_id' => 1,
            'semester' => 'Genap',
            'tahun_ajaran' => '2023/2024',
            'nilai_kinerja' => 90,
            'catatan' => 'Peningkatan signifikan pada semester genap',
        ]);

        RiwayatKinerja::create([
            'guru_id' => 2,
            'semester' => 'Ganjil',
            'tahun_ajaran' => '2023/2024',
            'nilai_kinerja' => 78,
            'catatan' => 'Cukup baik, perlu peningkatan komunikasi',
        ]);
    }
}
