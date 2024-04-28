<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $table = 'table_pengurus';

    protected $fillable = [
        'id_masjid',
        'nama',
        'jabatan',
        'no_hp',
        'email',
    ];

    public function masjid(){
        return $this->belongsTo(Masjid::class ,'id_masjid','id');
    }
}
