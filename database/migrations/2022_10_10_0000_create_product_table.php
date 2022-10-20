<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
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
            $table->string('name', 255)->unique();
            $table->string('code', 255)->nullable();
            $table->string('category', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('price', 255)->nullable();
            $table->string('amount', 255)->nullable();
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
}

