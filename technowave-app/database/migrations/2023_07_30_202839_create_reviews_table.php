<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('user_image_review');
            $table->string('product_id');
            $table->string('product_title');
            $table->string('product_image1');
            $table->string('user_first_name');
            $table->string('user_last_name');
            $table->string('user_phone_number');
            $table->string('user_email');
            $table->string('stars_rated');
            $table->string('user_review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
