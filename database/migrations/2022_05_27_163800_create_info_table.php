<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site')->nullable()->comment('手术部位');
            $table->string('price')->nullable()->comment('手术价格');
            $table->string('methods')->nullable()->comment('手术方式');
            $table->string('count')->nullable()->comment('治疗次数');
            $table->string('keep')->nullable()->comment('效果维持');
            $table->string('narcosis')->nullable()->comment('麻醉方式');
            $table->string('materials')->nullable()->comment('手术材料');
            $table->string('lengthOfStay')->nullable()->comment('住院时间');
            $table->string('removeTheTime')->nullable()->comment('拆线时间');
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
        Schema::dropIfExists('info');
    }
}
