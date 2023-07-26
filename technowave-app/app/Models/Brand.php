<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model{

    use HasFactory;

    protected $table = 'brands';

    protected $fillable = [
        'brand_title',
        'brand_description',
        'brand_status',
        'brand_image1',

    ];
}
