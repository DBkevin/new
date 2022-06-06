<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTopicIdForeignToNotice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notice', function (Blueprint $table) {
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
        Schema::table('notice', function (Blueprint $table) {
            //
             $table->dropForeign('notice_topic_id_foreign');
            $table->dropColumn('topic_id');
        });
    }
}
