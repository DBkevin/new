<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntrotdtionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('introtdtion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('operationtime')->nullable()->comment('手术时长');
            $table->string('swellingtime')->nullable()->comment('消肿时长');
            $table->string('removetime')->nullable()->comment('恢复时长');
            $table->string('price')->nullable()->comment('参考价格');
            $table->string('material')->nullable()->comment('材料设备');
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
        Schema::dropIfExists('introtdtion');
    }
}
