<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_title', 100);
            $table->text('product_description');
            $table->decimal('product_price', $precision = 7, $scale = 2)->default(0);
            $table->integer('product_quantity')->default(1);
            $table->string('product_image1', 200);
            $table->string('product_image2', 200);
            $table->string('product_image3', 200);
            $table->string('product_image4', 200);
            $table->string('product_status', 20);
            $table->string('product_category', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
