<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_goods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('good_id');
            $table->unsignedBigInteger('order_id');
            $table->timestamps();

            // good_id
            $table->index('good_id');
            $table->foreign('good_id', 'good_id_fk')->references('id')->on('goods');

            // order_id
            $table->index('order_id');
            $table->foreign('order_id', 'order_id_fk')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_goods');
    }
}
