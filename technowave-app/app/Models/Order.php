<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model{

    use HasFactory;
    
    protected $fillable = [

        'user_id',
        'subtotal',
        'total',
        'payment',
        'payment_id',

    ];

    public function products(): BelongsToMany{

        return $this->belongsToMany(Product::class)->withPivot('order_product_price', 'order_product_quantity');

    }

    public function order_product(){

        return $this->hasMany(Order_product::class, 'order_id');
        
    }

}
