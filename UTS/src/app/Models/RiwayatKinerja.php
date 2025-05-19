<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKinerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id',
        'semester',
        'tahun_ajaran',
        'nilai_kinerja',
        'catatan',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
