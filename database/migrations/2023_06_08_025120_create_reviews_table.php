<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('good_id');
            $table->timestamps();

            // user_id
            $table->index('user_id', 'reviews_user_id_idx');
            $table->foreign('user_id', 'reviews_user_id_fk')->references('id')->on('users');   
            
            // good id
            $table->index('good_id', 'reviews_good_id_idx');
            $table->foreign('good_id', 'reviews_good_id_fk')->references('id')->on('goods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
