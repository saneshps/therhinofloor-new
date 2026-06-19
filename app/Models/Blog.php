<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'description',
        'author_id',
        'default_image',
        'meta_title',
        'meta_description',
        'alt',
        'status'
    ];
}
