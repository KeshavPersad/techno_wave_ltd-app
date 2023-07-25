<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model{

    use HasFactory;

    protected $table = 'bill_address';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'user_street',
        'user_city',
    ];

}
