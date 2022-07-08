<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->integer('topic_id')->unsigned()->comment('项目表');
            $table->foreign('topic_id')->references('id')->on('topic')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('doctor_id')->unsigned()->comment('医生表');
            $table->foreign('doctor_id')->references('id')->on('doctor')->onDelete('cascade')->onUpdate('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
