<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('amount');
            $table->unsignedBigInteger('status');
            $table->string('kassa_id');
            $table->string('checked_id');
            $table->timestamps();

            // user_id
            $table->index('user_id');
            $table->foreign('user_id', 'user_id_order_fk')->references('id')->on('users');

            // status
            $table->index('status');
            $table->foreign('status', 'status_order_fk')->references('id')->on('statuses');
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
