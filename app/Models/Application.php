<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'image',
        'image_alt',
        'description',
        'menu_order',
        'status',
    ];

    public function application_videos()
    {
        return $this->hasMany(ApplicationVideo::class, 'application_id', 'id');
    }
    public function application_images()
    {
        return $this->hasMany(ApplicationVideo::class, 'application_id', 'id');
    }
    public function application_meta()
    {
        return $this->hasOne(ApplicationMeta::class, 'application_id', 'id');
    }
}
