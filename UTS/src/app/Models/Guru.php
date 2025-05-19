<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';

    protected $fillable = [
        'nama_lengkap',
        'nip',
        'email',
        'jenis_kelamin',
        'mata_pelajaran',
        'tanggal_lahir',
        'alamat',
        'telepon',
    ];

    // Jika nanti mau relasi ke riwayat kinerja
    public function riwayatKinerja()
    {
        return $this->hasMany(RiwayatKinerja::class);
    }
}
