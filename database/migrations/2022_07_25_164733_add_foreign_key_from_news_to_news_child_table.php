<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyFromNewsToNewsChildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news_child', function (Blueprint $table) {
            //
            $table->integer('news_id')->unsigned()->after('id')->commit('外键和news关联');
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news_child', function (Blueprint $table) {
            //news_child_news_id_foreign
           $table->dropForeign('news_child_news_id_foreign');
            $table->dropColumn('news_id');
        });
    }
}
