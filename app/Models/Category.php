<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['category_name'];

    public function products() {
        return $this->belongsToMany(Product::class);
    }

    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id','id')->with('parent');
    }

    public function child()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id')->with('child');
    }

    public function subcategory() {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function cat_products() {
        return $this->belongsToMany(Product::class, 'products_categories');
    }

    public function cat_products_limit() {
        return $this->belongsToMany(Product::class, 'products_categories')->limit(8);
    }

    public function product_images() {
        return $this->hasMany(Image::class);
    }
}
