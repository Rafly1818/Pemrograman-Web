<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Servis;
use App\Models\Kendaraan;
use App\Models\Pelanggan;;
use Carbon\Carbon;

class ServisSeeder extends Seeder
{
    public function run(): void
    {
        $pelanggans = Pelanggan::all();

        foreach ($pelanggans as $pelanggan) {
            // Buat 1–2 servis per pelanggan
            $jumlahServis = rand(1, 2);

            for ($i = 0; $i < $jumlahServis; $i++) {
                Servis::create([
                    'pelanggan_id' => $pelanggan->id,
                    'kerusakan' => fake()->sentence(6),
                    'estimasi_selesai' => Carbon::today()->addDays(rand(1, 5)),
                    'biaya' => rand(100000, 500000),
                ]);
            }
        }
    }
}