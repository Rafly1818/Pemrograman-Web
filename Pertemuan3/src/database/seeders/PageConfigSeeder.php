<?php

namespace Database\Seeders;

use App\Models\PageConfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PageConfig::create([
            'title' => 'Selamat datang di website kami',
            'detail' => 'Kami adalah perusahaan yang bergerak di bidang teknologi informasi',
            'image' => '',
        ]);
    }
}
