<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique()->default('')->comment('栏目名称');
            $table->text('description')->nullable()->comment('栏目描述');
            $table->text('keyword')->nullable()->comment('栏目关键词');
            $table->integer('category_id')->index()->comment('所属顶级大类');
            $table->integer('parent_id')->index()->default('0')->comment('默认0既二级栏目,所属父级栏目id');
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
        Schema::dropIfExists('topic');
    }
}
