<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;

    protected $table = 'table_artikel';

    protected $fillable = [
        'judul',
        'penulis',
        'isi',
        'tanggal',
        'gambar'
    ];
}
