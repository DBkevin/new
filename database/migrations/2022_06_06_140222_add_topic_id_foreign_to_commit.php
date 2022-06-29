<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTopicIdForeignToCommit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commit', function (Blueprint $table) {
            //
            $table->integer('topic_id')->unsigned()->after('id')->commit('外键和topic关联');
            $table->foreign('topic_id')->references('id')->on('topic')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commit', function (Blueprint $table) {
            $table->dropForeign('commit_topic_id_foreign');
            $table->dropColumn('topic_id');
        });
    }
}
