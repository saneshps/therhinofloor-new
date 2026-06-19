<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationMeta extends Model
{
    use HasFactory;
    protected $fillable = [
        'application_id',
        'meta_title',
        'keywords',
        'meta_details'

    ];
}
