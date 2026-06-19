<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subtitle',
        'slug',
        'display_title',
        'category_id',
        'brand_id',
        'description',
        'manager_id',
        'default_image',
        'is_demo',
        'is_featured',
        'trending_products',
        'powersave',
        'top_rated',
        'menu_order',
        'status'
    ];



    public function product_images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
    public function product_videos()
    {
        return $this->hasMany(ProductVideo::class, 'product_id', 'id');
    }

    public function product_catalogues()
    {
        return $this->hasMany(ProductCatalogue::class, 'product_id', 'id');
    }

    public function product_catalogues_broshures()
    {
        return $this->hasMany(ProductCatalogue::class, 'product_id', 'id')->where('pdf_type', 'brochure');
    }
    public function product_catalogues_case_studies()
    {
        return $this->hasMany(ProductCatalogue::class, 'product_id', 'id')->where('pdf_type', 'casestudy');
    }
    public function product_models()
    {
        return $this->hasMany(ProductModel::class, 'product_id', 'id');
    }
    public function product_specfications()
    {
        return $this->hasMany(ProductSpecification::class, 'product_id', 'id');
    }
    public function product_manager()
    {
        return $this->hasOne(Team::class, 'id', 'manager_id');
    }
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function product_brand()
    {
        return $this->hasOne(Supplier::class, 'id', 'brand_id');
    }
    public function product_meta()
    {
        return $this->hasOne(ProductMeta::class, 'product_id', 'id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }


    
}
