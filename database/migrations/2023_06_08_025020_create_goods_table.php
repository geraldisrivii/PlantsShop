<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->float('price');
            $table->string('image');
            $table->unsignedInteger('amountBuys');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sales_id')->nullable();
            $table->timestamps();

            $table->index('category_id', 'goods_category_idx');
            $table->index('sales_id', 'goods_sales_idx');


            $table->unique('sales_id');

            $table->foreign('category_id', 'goods_category_fk')->references('id')->on('categories');
            $table->foreign('sales_id', 'goods_sales_fk')->references('id')->on('sales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
