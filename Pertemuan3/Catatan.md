
# 📄 Setup Partials di Laravel (Filament / Non-Filament)

Dokumentasi ini menjelaskan cara memecah layout utama (`app.blade.php`) ke dalam partial components di folder `resources/views/components/partials`.

---

## 📁 Struktur Direktori

```
resources/views/
├── layouts/
│   └── app.blade.php
└── components/
    └── partials/
        ├── header.blade.php
        ├── navbar.blade.php
        ├── footer.blade.php
        └── scripts.blade.php
```

---

## 🧱 app.blade.php (Layout Utama)

```blade
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.partials.header')


<body>
@include('components.partials.navbar')


{{ $slot }}


@include('components.partials.footer')

</body>
@include('components.partials.scripts')
</html>
```

---

## ✂️ Partial Files

### 1. `components/partials/header.blade.php`

```blade
<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="{{ route('home') }}">
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{ asset ('front/images/logo.png') }}" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav m-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a wire:navigate class="nav-link" href="{{ route ('home') }}">Home</a></li>
                    <li class="nav-item"> <a wire:navigate class="nav-link" href="{{ route ('profile') }}">Profile</a></li>
                    <li class="nav-item"> <a wire:navigate class="nav-link" href="{{ route ('about') }}">About</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
```

---

### 2. `components/partials/navbar.blade.php`

```blade
<head>
	<meta charset="utf-8">
	<title>{{ $title ?? 'Pemweb' }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="{{ asset ('front/images/favicon.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset ('front/images/favicon.png') }}" type="image/x-icon">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="{{ asset ('front/plugins/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset ('front/plugins/font-awesome/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('front/plugins/font-awesome/brands.css') }}">
	<link rel="stylesheet" href="{{ asset ('front/plugins/font-awesome/solid.css') }}">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="{{ asset ('front/css/style.css') }}">
    @livewireStyles
</head>
```

---

### 3. `components/partials/footer.blade.php`

```blade
<footer class="section-sm bg-tertiary">
	<div class="container">
        <div class="container d-flex justify-content-center">
            <a wire:navigate href="{{ route ('home') }}"> Copyright 2025</a>
        </div>
	</div>
</footer>
```

---

### 4. `components/partials/scripts.blade.php`

```blade
<!-- # JS Plugins -->
<script src="{{ asset ('front/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset ('front/plugins/bootstrap/bootstrap.min.js') }}"></script>

<!-- Main Script -->
<script src="{{ asset ('front/js/script.js') }}"></script>
@livewireScripts
```

---


# 📘 Query Basic Pada Database (SQL)

Catatan ini menjelaskan fungsi dasar dalam SQL yang sering digunakan untuk mengelola dan memanipulasi data dalam tabel.

---

## 1. SELECT

Digunakan untuk mengambil data dari satu atau lebih tabel.

### Contoh:
```sql
SELECT * FROM users;
```
> Artinya: Ambil semua kolom dari tabel `users`.

```sql
SELECT users.id FROM users;
```
> Artinya: Ambil hanya kolom `id` dari tabel `users`.

---

## 2. FROM

Menunjukkan tabel sumber data yang ingin diambil.

### Contoh:
```sql
SELECT name FROM users;
```
> Artinya: Ambil kolom `name` dari tabel `users`.

---

## 3. JOIN

Digunakan untuk menggabungkan data dari dua atau lebih tabel yang memiliki relasi antar kolom.

### Contoh:
```sql
SELECT users.name, orders.total
FROM users
JOIN orders ON users.id = orders.user_id;
```
> Artinya: Gabungkan tabel `users` dan `orders` berdasarkan hubungan `users.id = orders.user_id`.

---

## 4. GROUP BY

Digunakan untuk mengelompokkan data berdasarkan satu atau beberapa kolom, biasanya digunakan bersama fungsi agregat seperti `COUNT()`, `SUM()`, `AVG()`.

### Contoh:
```sql
SELECT role, COUNT(*) FROM users GROUP BY role;
```
> Artinya: Hitung jumlah user untuk setiap role.

---

## 5. CREATE

Digunakan untuk membuat objek baru di database, seperti tabel.

### Contoh:
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)
);
```
> Artinya: Buat tabel `users` dengan kolom `id`, `name`, dan `email`.

---

## 6. UPDATE

Digunakan untuk mengubah data yang sudah ada di tabel.

### Contoh:
```sql
UPDATE users SET name = 'John Doe' WHERE id = 1;
```
> Artinya: Ubah nama user dengan `id = 1` menjadi `John Doe`.

---

## 7. DELETE

Digunakan untuk menghapus data dari tabel.

### Contoh:
```sql
DELETE FROM users WHERE id = 1;
```
> Artinya: Hapus user yang memiliki `id = 1`.

---

## 📝 Kesimpulan Singkat

| Fungsi    | Kegunaan                                                                 |
|-----------|--------------------------------------------------------------------------|
| SELECT    | Mengambil data dari tabel                                                |
| FROM      | Menentukan sumber tabel                                                  |
| JOIN      | Menggabungkan data dari dua tabel atau lebih                             |
| GROUP BY  | Mengelompokkan data berdasarkan kolom tertentu                           |
| CREATE    | Membuat tabel atau objek baru di database                                |
| UPDATE    | Mengubah data dalam tabel                                                |
| DELETE    | Menghapus data dari tabel                                                |


# Footer

generate model, migrasi dan seeder footer dengan cara

`php artisan make:model Footer -ms`

## Migration

tambahin table footer

```mysql
$table->string('footer');
```

lalu jalankan migrasi `php artisan migrate`

## Seeder

tambahin seeder footer

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Footer;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Footer::create([
            'footer' => '© 2023 All rights reserved. | Designed by Anraaa',
        ]);
    }
}
```

lalu sesuaikan dengan database seeder agar footer seeder dapat digenerate

```php
<?php

namespace Database\Seeders;

use App\Models\User;
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
            FooterSeeder::class,
        ]);
    }
}
```

setelah melakuka penyesuaian pada `FooterSeeder.php` dan `DatabaseSeeder.php`, jalankan perintah `php artisan db:seeed`

## Model

setelah seeder telah dikonfiguras, lalu lakukan penyesuaian pada model Footer yang ada di `App/Model/Footer.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Footer extends Model
{
    use HasFactory;

    protected $table = 'footers';
    protected $fillable = [
        'footer',
    ];
}
```

## Resource
Setelah model, lakukan generate resource untuk footer

`php artisan make:filament-resource Footer --generate`

lalu delete table created, updated at, dll menjadi

```php
public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('footer')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
```

## View

lalu ubah footer.blade.php agar datanya menjadi dinamis

```blade
@php
    $footer = \App\Models\Footer::first();
@endphp


<footer class="section-sm bg-tertiary">
	<div class="container">
        <div class="container d-flex justify-content-center">
            <a wire:navigate href="{{ route ('home') }}"> {{$footer->footer }}</a>
        </div>
	</div>
</footer>
```

