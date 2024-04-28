<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masjid extends Model
{
    use HasFactory;
    protected $table = 'table_masjid';
    protected $fillable = [
        'nama_masjid',
        'alamat_masjid',
        'telepon_masjid',
        'email_masjid',
        'foto_masjid',
        'deskripsi',
    ];
}
