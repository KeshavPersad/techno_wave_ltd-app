<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model{

    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [

        'user_id',
        'product_id',
        'product_title',
        'product_image1',
        'user_first_name',
        'user_last_name',
        'user_phone_number',
        'user_email',
        'starts_rated',
        'user_review',
    ];
    
}
