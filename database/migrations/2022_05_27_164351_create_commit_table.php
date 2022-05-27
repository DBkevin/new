<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id')->index()->comment('所属项目ID');
            $table->string('effect')->nullable()->comment('手术效果');
            $table->text('merit')->nullable()->comment('优点');
            $table->text('defect')->nullable()->comment('缺点');
            $table->text('crowd')->nullable()->comment('适应人群');
            $table->text('risk')->nullable()->comment('风险提示');
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
        Schema::dropIfExists('commit');
    }
}
