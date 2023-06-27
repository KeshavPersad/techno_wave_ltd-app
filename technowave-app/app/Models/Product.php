<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function productStorePrice(){

        return $this->attributes['product_price'];

    }

    public function cartQuantityPrice(){

        return $this->product_price * $this->pivot->cart_quantity;

    }

}
