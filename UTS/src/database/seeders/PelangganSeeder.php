<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Pelanggan;
use App\Models\Kendaraan;
use App\Models\Servis;
use Carbon\Carbon;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        $pelanggans = [
            [
                'nama' => 'Budi Santoso',
                'no_hp' => '081234567890',
                'alamat' => 'Jl. Merdeka No. 123, Jakarta',
                'plat_nomor' => 'B 1234 ABC',
                'nomor_antrian' => 'A001',
                'keluhan' => 'Ganti oli dan tune up',
                'kendaraan' => [
                    'nama_kendaraan' => 'Toyota Avanza 2020',
                    'status' => 'menunggu'
                ],
                'servis' => [
                    [
                        'kerusakan' => 'Oli mesin kotor dan perlu diganti',
                        'estimasi_selesai' => Carbon::today()->addDays(1),
                        'biaya' => 150000
                    ],
                    [
                        'kerusakan' => 'Filter udara tersumbat',
                        'estimasi_selesai' => Carbon::today()->addDays(2),
                        'biaya' => 75000
                    ]
                ]
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'no_hp' => '089876543210',
                'alamat' => 'Jl. Sudirman No. 456, Bandung',
                'plat_nomor' => 'D 5678 XYZ',
                'nomor_antrian' => 'A002',
                'keluhan' => 'Service rutin dan cek rem',
                'kendaraan' => [
                    'nama_kendaraan' => 'Daihatsu Terios 2019',
                    'status' => 'proses'
                ],
                'servis' => [
                    [
                        'kerusakan' => 'Rem depan bunyi dan kurang pakem',
                        'estimasi_selesai' => Carbon::today()->addDays(3),
                        'biaya' => 200000
                    ]
                ]
            ],
            [
                'nama' => 'Ahmad Wijaya',
                'no_hp' => '087654321098',
                'alamat' => 'Jl. Ahmad Yani No. 789, Surabaya',
                'plat_nomor' => 'L 9012 DEF',
                'nomor_antrian' => 'A003',
                'keluhan' => 'Perbaikan mesin dan ganti sparepart',
                'kendaraan' => [
                    'nama_kendaraan' => 'Suzuki Ertiga 2021',
                    'status' => 'selesai'
                ],
                'servis' => [
                    [
                        'kerusakan' => 'Mesin overheat dan radiator bocor',
                        'estimasi_selesai' => Carbon::today()->addDays(5),
                        'biaya' => 500000
                    ],
                    [
                        'kerusakan' => 'Ganti kampas kopling',
                        'estimasi_selesai' => Carbon::today()->addDays(7),
                        'biaya' => 300000
                    ]
                ]
            ],
            [
                'nama' => 'Rina Kartika',
                'no_hp' => '081555666777',
                'alamat' => 'Jl. Diponegoro No. 111, Yogyakarta',
                'plat_nomor' => 'AB 7777 CD',
                'nomor_antrian' => 'A004',
                'keluhan' => 'Mobil susah starter dan lampu redup',
                'kendaraan' => [
                    'nama_kendaraan' => 'Honda CRV 2022',
                    'status' => 'menunggu'
                ],
                'servis' => [
                    [
                        'kerusakan' => 'Aki lemah dan perlu diganti',
                        'estimasi_selesai' => Carbon::today()->addDays(1),
                        'biaya' => 2500000
                    ]
                ]
            ]
        ];

        foreach ($pelanggans as $data) {
            $kendaraanData = $data['kendaraan'];
            $servisData = $data['servis'];
            unset($data['kendaraan'], $data['servis']);

            $pelanggan = Pelanggan::create($data);
            $pelanggan->kendaraan()->create($kendaraanData);
            
            foreach ($servisData as $servis) {
                $pelanggan->servis()->create($servis);
            }
        }
    }
}