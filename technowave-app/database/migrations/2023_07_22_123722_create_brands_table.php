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

        Schema::create('brands', function (Blueprint $table){
            $table->id();
            $table->string('brand_title', 100);
            $table->text('brand_description');
            $table->tinyInteger('brand_status');
            $table->string('brand_image1', 200);
            $table->timestamps();
        });
    }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        Schema::dropIfExists('brands');
    }
};
