<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
        'plat_nomor',
        'nomor_antrian',
        'keluhan'
    ];

    public function kendaraan()
    {
        return $this->hasOne(Kendaraan::class);
    }

    public function servis()
    {
        return $this->hasMany(Servis::class);
    }
}