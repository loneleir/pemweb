<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru;
use Illuminate\Support\Str;

class GuruSeeder extends Seeder
{
    public function run()
    {
        Guru::create([
            'nama_lengkap' => 'Zayne',
            'nip' => '198501012019031001',
            'email' => 'zayne@example.com',
            'jenis_kelamin' => 'L',
            'mata_pelajaran' => 'Matematika',
            'tanggal_lahir' => '1985-01-01',
            'alamat' => 'Jl. Melati No. 12',
            'telepon' => '081234567890',
        ]);

        Guru::create([
            'nama_lengkap' => 'Sylus',
            'nip' => '198703152020031002',
            'email' => 'Sylus@example.com',
            'jenis_kelamin' => 'L',
            'mata_pelajaran' => 'Bahasa Inggris',
            'tanggal_lahir' => '1987-03-15',
            'alamat' => 'Jl. Mawar No. 7',
            'telepon' => '081987654321',
        ]);

        
    }
}
