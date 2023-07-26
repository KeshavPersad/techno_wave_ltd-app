<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class EditProductHelper{

    private $products = null;
    private $subtotal = 0;
    private $total = 0;

    public function __construct(Collection $products){

        if (!$products->isEmpty()) {

            $this->products = $products;
            $this->calculateSubtotal();

        }

    }

    public function isEmpty(){

        return (empty($this->products) || $this->products->isEmpty()) ? true : false;

    }

    public function getProducts(){

        return $this->products;

    }

    public function formatPrice($price){

        return number_format($price, '2', '.', ',');

    }

    public function formatDate($date){

        return Carbon::createFromFormat('Y-m-d H:i:s', $date)
            ->format('F jS, Y');

    }

    public function calculateSubtotal(){

        foreach ($this->products as $data){

            $this->subtotal += $data->cartQuantityPrice();

        }
        
    }

    public function calculateTotal(){

        return $this->total = $this->subtotal;

    }

    public function getSubtotal(){

        return $this->subtotal;

    }

    public function getTotal(){

        return $this->total;

    }

}