<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableReplys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('replys', function (Blueprint $table) {
            $table->integer('sf_id')->unsigned();
            $table->integer('sub_id')->unsigned();

            $table->foreign('sub_id')
                ->references('sub_id')
                ->on('subjects')
                ->onDelete('cascade');

            $table->foreign('sf_id')
                ->references('sf_id')
                ->on('studyfields')
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
        Schema::table('replys', function (Blueprint $table) {
            //
        });
    }
}
