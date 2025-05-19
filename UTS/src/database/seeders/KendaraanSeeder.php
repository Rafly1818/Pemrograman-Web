<?php

    namespace Database\Seeders;
    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use App\Models\Kendaraan;
    use App\Models\Pelanggan;
    use Spatie\Permission\Models\Role;
    use App\Models\User;

    class KendaraanSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil semua pelanggan
        $pelanggans = Pelanggan::all();

        // Untuk setiap pelanggan, tambahkan 1 kendaraan dummy
        foreach ($pelanggans as $pelanggan) {
            Kendaraan::create([
                'pelanggan_id' => $pelanggan->id,
                'nama_kendaraan' => 'Kendaraan milik ' . $pelanggan->nama,
                'status' => collect(['menunggu', 'proses', 'selesai'])->random(),
            ]);
        }
    }
}