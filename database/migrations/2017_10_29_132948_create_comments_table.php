<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('c_id');
            $table->integer('u_id')->unsigned();
            $table->integer('q_id')->unsigned();
            $table->string('com',255);

            $table->foreign('q_id')
                ->references('q_id')
                ->on('questions')
                ->onDelete('cascade');

            $table->foreign('u_id')
                ->references('u_id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
