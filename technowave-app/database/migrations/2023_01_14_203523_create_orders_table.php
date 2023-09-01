<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        
        Schema::create('orders', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('user_first_name');
            $table->string('user_last_name');
            $table->string('user_phone_number');
            $table->string('user_email');
            $table->decimal('subtotal', $precision = 7, $scale = 2);
            $table->decimal('total', $precision = 7, $scale = 2);
            $table->string('payment')->default('none');
            $table->string('payment_id')->default('none');
            $table->bigInteger('user_lot_number')->nullable();
            $table->string('user_street')->nullable();
            $table->string('user_city')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        Schema::dropIfExists('orders');

    }
};
