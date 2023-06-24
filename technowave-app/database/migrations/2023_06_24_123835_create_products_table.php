<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table){

            $table->id();
            $table->string('product_title', 100);
            $table->text('product_description');
            $table->decimal('product_price', $precision = 7, $scale = 2 )->default(0);
            $table->decimal('sale_price', $precision = 7, $scale = 2 )->default(0);
            $table->string('product_image1', 200);
            $table->string('product_image2', 200)->nullable();
            $table->string('product_image3', 200)->nullable();
            $table->string('product_image4', 200)->nullable();
            $table->string('product_status', 20);
            $table->string('product_category', 20);

            $table->timestamps();

        });    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{

        Schema::dropIfExists('products');
    }

};
