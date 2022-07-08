<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique()->default('')->comment('医生姓名');
            $table->string('title')->default('医师')->comment('医生职称');
            $table->string('age')->default('')->comment('从业年限');
            $table->text('introduce')->comment('医生个人简介');
            $table->string('school')->default('')->comment('学历');
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
        Schema::dropIfExists('doctor');
    }
}
