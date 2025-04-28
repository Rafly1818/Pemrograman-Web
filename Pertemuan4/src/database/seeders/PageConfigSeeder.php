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
        if(PageConfig::count()==0){
            PageConfig::create([
                'title' => 'Welcome to Our Website',
                'detail' => 'We are glad to have you here. Explore our services and offerings.',
                'image' => '',
            ]);
        } 
    }
}
