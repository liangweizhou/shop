<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(/**
         * @param Blueprint $table
         */
            'evaluation', function (Blueprint $table) {
            $table->increments('id')->comment('用户评价');
            $table->longText('detail')->comment('评论内容');
            $table->unsignedTinyInteger('grade')->comment('几颗星');
            $table->enum('status',['y','n'])->comment('是否已经评价过');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('prod_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('prod_id')->references('id')->on('products');
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
        Schema::dropIfExists('evaluation');
    }
}
