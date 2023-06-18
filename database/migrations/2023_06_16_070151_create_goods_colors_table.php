<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_colors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('good_id'); // 2
            $table->unsignedBigInteger('color_id'); // 5
            $table->unsignedInteger('quantity'); // 100

            $table->timestamps();

            $table->index('good_id');
            $table->index('color_id');

            $table->foreign('good_id')->references('id')->on('goods');
            $table->foreign('color_id')->references('id')->on('colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods_colors');
    }
}
