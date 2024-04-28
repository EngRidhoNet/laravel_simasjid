<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donatur extends Model
{
    use HasFactory;

    protected $table = 'table_donatur';

    protected $fillable = [
        'id_user'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user'); // Adjust model and column names if necessary
    }

}
