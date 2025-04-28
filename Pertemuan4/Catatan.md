# Model Migrasi dan Seeder

buat kan model, migrasi dan seeder dari Product, Seo, Page Config, Logo, Footer

`php artisan make:model Product -ms`, lanjutin sampe kelar

## Product

### Migrasi

```php
$table->string('name');
$table->text('description');
$table->string('image');
```

### Seeder

`ProductSeeder.php`

```php
<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Sample Product',
            'description' => 'This is a sample product description.',
            'image' => '',
        ]);
    }
}
```

`DatabaseSeeder.php`

```php
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (User::count() == 0) {
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
```

### Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'image',
    ];
}
```

---

## Seo

### Migrasi

```php
$table->string('title');
$table->text('description');
$table->string('keywords');
$table->string('canonical_url');
$table->string('robots');
$table->string('og_image');
```

### Seeder

`SeoSeeder.php`

```php
<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seo::create([
            'title' => 'Sample SEO Title',
            'description' => 'This is a sample SEO description.',
            'keywords' => 'sample, seo, keywords',
            'canonical_url' => 'https://example.com',
            'robots' => 'index, follow',
            'og_image' => '',
        ]);
    }
}
```

### Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;

    protected $table = 'seos';

    protected $fillable = [
        'title',
        'description',
        'keywords',
        'canonical_url',
        'robots',
        'og_image',
    ];
}
```

---

## PageConfig

### Migrasi

```php
$table->string('title');
$table->string('detail');
$table->string('image');
```

### Seeder

`PageConfigSeeder.php`

```php
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

```

### Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageConfig extends Model
{
    use HasFactory;
    protected $table = 'page_configs';
    protected $fillable = [
        'title',
        'detail',
        'image',
    ];
}

```

---

## Logo

### Migrasi

```php
$table->string('title');
$table->string('image');
```

### Seeder

`LogoSeeder.php`

```php
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

```

### Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    protected $table = 'logos';
    protected $fillable = [
        'title',
        'image',
    ];
}

```

---

## Footer

### Migrasi

```php
$table->string('section');
$table->string('label');
$table->string('url');
$table->integer('order')->default(0);
```

### Seeder

`FooterSeeder.php`

```php
<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Footer::count()==0){
            Footer::create([
                'section' => 'service',
                'label' => 'Online Service',
                'url' => 'http://localhost',
                'order' => 1,
            ]);
        } 
    }
}
```

### Model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Footer extends Model
{
    use HasFactory;
    protected $table = 'footers';
    protected $fillable = [
        'section',
        'url',
        'label',
        'order',
    ];
}

```

---

## Migrasi ke Database dan Insert Data Dummy Pada Seeder

`php artisan migrate`, setelah itu lakukan `php artisan db:seed`

kalo ada yang error, fix sendiri ya

# Filament Resource

Seletah melakukan migrasi data dan insert data dummy/data testing, lakukan filament resource dengan cara `php artisan make:filament-resource Product --generate` lakuin itu semua ke product, dll

# Resource Views

jujur bagian ini gua males nyusunnya

## Livewire

generate livewire untuk show home page

`php artisan make:livewire ShowHomePage`

## Routing 

lakukan routing agar livewire bisa digunakan di `Routes/web.php`
```php
<?php

use App\Livewire\ShowHomePage;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', ShowHomePage::class)->name('home');

```

## Partials

sisanya copas ajalah dari github gua. males gua nyusunnya