<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyfieldUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studyfield_user', function (Blueprint $table) {
            $table->integer('u_id')->unsigned()->index();
            $table->integer('sf_id')->unsigned()->index();

            $table->foreign('sf_id')
                ->references('sf_id')
                ->on('studyfields')
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
        Schema::dropIfExists('studyfield_user');
    }
}
