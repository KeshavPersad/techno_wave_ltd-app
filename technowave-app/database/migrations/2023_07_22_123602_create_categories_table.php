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

        Schema::create('categories', function (Blueprint $table){
            $table->id();
            $table->string('category_title', 100);
            $table->text('category_description');
            $table->integer('category_status')->default(1)->comment('1 for Active & 0 for Inactive');;
            $table->string('category_image1', 200);
            $table->timestamps();
        });
    }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        Schema::dropIfExists('categories');
    }
};
