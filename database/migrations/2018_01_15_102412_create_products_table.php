<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('商品名');
            $table->string('code')->index()->comment('商品标码');
            // enum
           // $table->unsignedTinyInteger('status')->comment('是否有货');
            $table->enum('status',['yes','no'])->comment('是否有货');
            $table->longText('detail')->nullable()->comment('商品详情');
            $table->float('price')->comment('价格');
            $table->string('image')->comment('图片地址');
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
