<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Database\Seeders\PelangganSeeder;
use Database\Seeders\KendaraanSeeder;
use Database\Seeders\ServisSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([ 
            PelangganSeeder::class,
            KendaraanSeeder::class,
            ServisSeeder::class,
            UserSeeder::class,
        ]);
        
    }
}
