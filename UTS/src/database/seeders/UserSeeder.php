<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin', 'pelanggan', 'mekanik'];
        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        // Admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );
        $admin->assignRole('admin');

        // Pelanggan
        $pelanggan = User::firstOrCreate(
            ['email' => 'pelanggan@pelanggan.com'],
            [
                'name' => 'Pelanggan',
                'password' => Hash::make('password'),
            ]
        );
        $pelanggan->assignRole('pelanggan');

        // Mekanik
        $mekanik = User::firstOrCreate(
            ['email' => 'mekanik@mekanik.com'],
            [
                'name' => 'Mekanik',
                'password' => Hash::make('password'),
            ]
        );
        $mekanik->assignRole('mekanik');
    }
}
