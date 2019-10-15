<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmitTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submit_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('submit_id')->unsigned();
            $table->foreign('submit_id')->references('id')->on('submit')->onDelete('cascade');

            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tag')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submit_tag');
    }
}
