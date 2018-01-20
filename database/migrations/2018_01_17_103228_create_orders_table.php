<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->index()->comment('订单编号');
            $table->enum('status',['receive','emit','done'])->comment('接收,已发出，完成三个订单状态');
            // json格式订单包含商品详情
            $table->json('prod_info')->comment('json显示商品信息');
            $table->float('price');
            $table->unsignedInteger('number')->comment('数量');
            $table->float('total')->comment('总价');
            $table->json('address')->comment('收货地址');

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
        Schema::dropIfExists('orders');
    }
}
