<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('good_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedInteger('amount');
            $table->timestamps();

            $table->index('good_id', 'basket_items_good_idx');
            $table->index('color_id', 'basket_items_color_idx');

            $table->foreign('good_id', 'basket_items_good_fk')->references('id')->on('goods');
            $table->foreign('color_id', 'basket_items_color_fk')->references('id')->on('colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basket_items');
    }
}
