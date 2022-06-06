<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTopicIdForeignToInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info', function (Blueprint $table) {
            //
            $table->integer('topic_id')->unsigned()->after('id')->commit('外键和topic关联');
            $table->foreign('topic_id')->references('id')->on('topic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info', function (Blueprint $table) {
            //
            $table->dropForeign('info_topic_id_foreign');
            $table->dropColumn('topic_id');
        });
    }
}
