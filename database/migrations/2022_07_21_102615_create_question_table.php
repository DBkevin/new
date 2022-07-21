<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique()->default('')->comment('问答标题');
            $table->string('qbody')->default('')->comment('问题内容');
            $table->integer('qage')->comment('提问者年龄');
            $table->string('qaddress')->default('')->comment('提问者所在地');
            $table->integer('qcount')->default('1')->comment('改问题关注人数');
            $table->text('abody')->default('');
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
        Schema::dropIfExists('question');
    }
}
