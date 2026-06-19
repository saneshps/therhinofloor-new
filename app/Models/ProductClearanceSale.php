<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductClearanceSale extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'actual_price',
        'discount_price',
        'discount_percent',
        'status'
    ];
}
