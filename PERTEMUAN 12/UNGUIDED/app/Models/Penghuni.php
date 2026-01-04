<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    protected $table = 'penghuni';
    
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat_asal',
        'tanggal_masuk',
        'status_penghuni',
    ];
}