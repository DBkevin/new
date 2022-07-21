<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyFromTopicAndDoctorToQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('question', function (Blueprint $table) {
            //
            $table->integer('topic_id')->unsigned()->after('id')->commit('外键和topic关联');
            $table->foreign('topic_id')->references('id')->on('topic')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('doctor_id')->nullable(true)->unsigned()->after('id')->commit('外键和topic关联');
            $table->foreign('doctor_id')->references('id')->on('doctor')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('question', function (Blueprint $table) {
            //
            $table->dropForeign('question_topic_id_foreign');
            $table->dropColumn('topic_id');
            $table->dropForeign('question_doctor_id_foreign');
            $table->dropColumn('doctor_id');
        });
    }
}
