<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{

    use HasFactory;
    protected $table = 'products';
    
    protected $fillable = [

        'category_id', 
        'brand_id', 
        'product_title', 
        'product_description',
        'product_add_info',
        'product_price', 
        'product_quantity',
        'product_image1',
        'product_image2', 
        'product_image3', 
        'product_image4', 
        'product_status', 

    ];

    public function productStorePrice(){

        return $this->attributes['product_price'];

    }

    public function cartQuantityPrice(){

        $cartQuantityPrice = $this->product_price * $this->pivot->cart_quantity;
        return $cartQuantityPrice;

    }

    public function category(){

        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function brand(){

        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }
    
}
