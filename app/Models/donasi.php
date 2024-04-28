<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donasi extends Model
{
    use HasFactory;

    protected $table = 'table_donasi';

    protected $fillable = [
        'id_donatur',
        'id_masjid',
        'tanggal',
        'jumlah',
        'metode_pembayaran',
        'bukti_pembayaran'
    ];

    public function donatur(){
        return $this->belongsTo(donatur::class, 'id_donatur');
    }
    public function masjid(){
        return $this->belongsTo(masjid::class, 'id_masjid');
    }

}
