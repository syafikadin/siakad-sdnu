<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function jadwal_pelajaran()
    {
        return $this->belongsTo(JadwalPelajaran::class);
    }
}
