<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',
        'designation',
        'department',
        'image_url',
        'linkedin',
        'priority',
        'manager_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
