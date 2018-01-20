<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdCateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prod_cate', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('prod_id');
            $table->unsignedInteger('cate_id');
            $table->foreign('prod_id')->references('id')->on('products');
            $table->foreign('cate_id')->references('id')->on('categories');
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
        Schema::dropIfExists('prod_cate');
    }
}
