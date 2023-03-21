<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table='products';
    protected $guarded = [];

    public function categories(){
        return $this->belongsToMany(Category::class,'category_products');
    }

    public function product(){
        return $this->hasOne(ProductDetail::class)->withDefault();
    }
}
