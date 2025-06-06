<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelanggan_id',
        'nama_kendaraan',
        'status'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    // Accessor untuk mengakses data pelanggan dengan mudah
    public function getNamaPelangganAttribute()
    {
        return $this->pelanggan->nama;
    }

    public function getNoHpAttribute()
    {
        return $this->pelanggan->no_hp;
    }

    public function getPlatNomorAttribute()
    {
        return $this->pelanggan->plat_nomor;
    }

    public function getNomorAntrianAttribute()
    {
        return $this->pelanggan->nomor_antrian;
    }

    public function getKeluhanAttribute()
    {
        return $this->pelanggan->keluhan;
    }
}