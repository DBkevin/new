<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyFromDoctorToNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            //
            $table->integer('doctor_id')->nullable(true)->unsigned()->after('id')->commit('外键和doctor关联');
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
        Schema::table('news', function (Blueprint $table) {
            //
            $table->dropForeign('news_doctor_id_foreign');
            $table->dropColumn('doctor_id');
        });
    }
}
