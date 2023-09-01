<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use PHPUnit\Event\TestData\MoreThanOneDataSetFromDataProviderException;

class CheckoutHelper{

    private $products = null;
    private $subtotal = 0;
    private $total = 0;

    private $deliveryFee = 0;

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
        if ($this->subtotal < '6000'){

        $this->deliveryFee = $this->subtotal * 0.05;

        }
    }

    public function calculateTotal(){

        return $this->total = $this->subtotal + $this->deliveryFee;

    }

    public function getSubtotal(){

        return $this->subtotal;

    }

    public function getdeliveryFee(){

        return $this->deliveryFee;

    }

    public function getTotal(){

        return $this->total;

    }

}