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

        Schema::create('products', function (Blueprint $table){
            $table->id();
            $table->bigInteger('category_id');
            $table->bigInteger('brand_id');
            $table->string('product_title', 100);
            $table->text('product_description');
            $table->text('product_add_info');
            $table->decimal('product_purchase_price', $precision = 7, $scale = 2)->default(0);
            $table->decimal('product_price', $precision = 7, $scale = 2)->default(0);
            $table->integer('product_quantity')->default(1);
            $table->string('product_image1', 200);
            $table->string('product_image2', 200);
            $table->string('product_image3', 200);
            $table->string('product_image4', 200);
            $table->integer('product_status')->default(1)->comment('1 for In Stock & 0 for Out of Stock');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        Schema::dropIfExists('products');
    }
};
