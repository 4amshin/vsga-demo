<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atraksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_atraksi',
        'gambar',
        'rating',
        'harga',
    ];
}
