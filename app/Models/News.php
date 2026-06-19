<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'location',
        'date',
        'link',
        'description',
        'image',
        'image_alt',
        'status',
    ];
}
