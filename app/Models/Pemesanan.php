<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'atraksi_id',
        'nama',
        'email',
        'jumlah',
        'alamat',
    ];

    public function atraksi()
    {
        return $this->belongsTo(Pemesanan::class);
    }
}
