<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servis extends Model
{
    use HasFactory;

    protected $table = 'servis';

    protected $fillable = [
        'pelanggan_id',
        'kerusakan',
        'estimasi_selesai',
        'biaya'
    ];

    protected $casts = [
        'estimasi_selesai' => 'date'
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

    public function getNamaKendaraanAttribute()
    {
        return $this->pelanggan->kendaraan->nama_kendaraan ?? null;
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
}