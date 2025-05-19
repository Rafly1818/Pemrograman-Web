<?php

namespace Database\Seeders;

use App\Models\Seo;
use App\Models\User;
use Filament\Pages\Page;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        if(User::count()==0){
            $user = \App\Models\User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
            ]);
    
            $user->assignRole('super_admin');
        }
        

        $this->call([
            ProductSeeder::class,
            PageConfigSeeder::class,
            LogoSeeder::class,
            SeoSeeder::class,
            FooterSeeder::class,
        ]);
    }
}
