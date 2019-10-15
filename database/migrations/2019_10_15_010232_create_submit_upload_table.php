<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmitUploadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submit_upload', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('submit_id')->unsigned();
            $table->foreign('submit_id')->references('id')->on('submit')->onDelete('cascade');

            $table->integer('upload_id')->unsigned();
            $table->foreign('upload_id')->references('id')->on('upload')->onDelete('cascade');
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
        Schema::dropIfExists('submit_upload');
    }
}
