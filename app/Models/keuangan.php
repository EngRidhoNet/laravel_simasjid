<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keuangan extends Model
{
    use HasFactory;

    protected $table = 'table_keuangan';

    protected $fillable = [
        'id_masjid',
        'jenis_transaksi',
        'tanggal',
        'keterangan',
        'jumlah',
        'saldo'
    ];

    public function masjid(){
        return $this->belongsTo(Masjid::class,'id_masjid','id');
    }
}
