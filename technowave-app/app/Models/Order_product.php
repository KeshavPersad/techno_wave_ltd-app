<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_product extends Model{
    
    use HasFactory;

    protected $table = 'order_product';

    protected $primaryKey = 'order_product_id';

    protected $fillable = [

        'order_id',
        'product_id',
        'order_product_price',
        'order_product_quantity',

    ];

}

