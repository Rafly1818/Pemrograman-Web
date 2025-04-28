<?php

namespace Database\Seeders;

use App\Models\Logo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        if(Logo::count()==0){
            Logo::create([
                'title' => 'PemWeb',
                'image' => '',
            ]);
        } 
    }
}
