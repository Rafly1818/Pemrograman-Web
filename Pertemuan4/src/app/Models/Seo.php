<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seo extends Model
{
    use HasFactory;

    protected $table = 'seos';
    protected $fillable = [
        'title',
        'description',
        'keywords',
        'cannonical_url',
        'robots',
        'og_image',
    ];
}
