<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique()->default('')->comment('资讯标题');
            $table->string('seotitle')->nullable()->comment('seo标题');
            $table->string('discription')->default('')->comment('描述');
            $table->string('keywords')->default('')->comment('关键词');
            $table->text('body')->comment('文章内容');
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
        Schema::dropIfExists('information');
    }
}
