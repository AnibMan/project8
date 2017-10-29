<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('q_id');
            $table->integer('sf_id')->unsigned();
            $table->integer('u_id')->unsigned();
            $table->integer('sub_id')->unsigned();
            $table->string('que',255);


            $table->foreign('sf_id')
                ->references('sf_id')
                ->on('studyfields')
                ->onDelete('cascade');

            $table->foreign('u_id')
                ->references('u_id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('sub_id')
                ->references('sub_id')
                ->on('subjects')
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
        Schema::dropIfExists('questions');
    }
}
