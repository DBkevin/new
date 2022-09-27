<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminuserForeignTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminuser_foreign', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('adminuser_id')->nullable(true)->unsigned()->commit('外键和flag表关联');
            $table->foreign('adminuser_id')->references('id')->on('admin_users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('news_id')->nullable(true)->unsigned()->commit('外键和new表关联');
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('question_id')->nullable(true)->unsigned()->commit('外键和quetion表关联');
            $table->foreign('question_id')->references('id')->on('question')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('information_id')->nullable(true)->unsigned()->commit('外键和知识表关联');
            $table->foreign('information_id')->references('id')->on('information')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('adminuser_foreign');
        Schema::enableForeignKeyConstraints();
    }
}
