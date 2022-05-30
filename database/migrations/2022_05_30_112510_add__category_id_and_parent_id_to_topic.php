<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdAndParentIdToTopic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topic', function (Blueprint $table) {
            $table->integer('category_id')->unsigned()->after('keyword')->commit("外键,关联category表");
            $table->foreign('category_id')->references('id')->on('category');
             $table->integer('parent_id')->unsigned()->after('category_id')->default(0)->commit("外键,自关联零为父级");
            $table->foreign('parent_id')->references('id')->on('topic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('topic', function (Blueprint $table) {
            $table->dropForeign('topic_category_id_foreign');
            $table->dropColumn('category_id');
            $table->dropForeign('topic_parent_id_foreign');
            $table->dropColumn('parent_id');
        });
    }
}
