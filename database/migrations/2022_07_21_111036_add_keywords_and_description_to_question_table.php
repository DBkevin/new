<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKeywordsAndDescriptionToQuestionTable extends Migration
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
            $table->string('description')->default('')->after('titel')->comment('描述');
            $table->string('keywords')->default('')->after('title')->comment('关键词');
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
            $table->dropColumn("description");
            $table->dropColumn("keywords");
        });
    }
}
