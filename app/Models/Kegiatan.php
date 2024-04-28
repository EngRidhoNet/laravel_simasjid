<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'table_kegiatan';

    protected $fillable = [
        'id_masjid',
        'nama_kegiatan',
        'deskripsi',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'tempat',
        'foto_kegiatan'
    ];

    public function masjid()
    {
        return $this->belongsTo(Masjid::class, 'id_masjid');
    }
}
