<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'application_id',
        'title',
        'image_url',
        'image_type',
        'priority'
    ];
}
