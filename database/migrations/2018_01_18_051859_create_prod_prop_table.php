<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdPropTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prod_prop', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('prod_id')->comment('商品id');
            $table->unsignedInteger('prop_id')->comment('属性id');
            $table->foreign('prod_id')->references('id')->on('products');
            $table->foreign('prop_id')->references('id')->on('props');
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
        Schema::dropIfExists('prod_prop');
    }
}
