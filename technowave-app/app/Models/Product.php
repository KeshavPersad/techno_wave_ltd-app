<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{

    use HasFactory;
    protected $table = 'products';
    
    protected $fillable = [
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
        'product_category', 
        'product_brand', 
    ];

    public function productStorePrice(){

        return $this->attributes['product_price'];

    }

    public function cartQuantityPrice(){

        return $this->product_price * $this->pivot->cart_quantity;

    }

    

}
