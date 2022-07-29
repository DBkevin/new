<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDirnameToTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topic', function (Blueprint $table) {
           $table->string('dirname')->default(null)->nullable(true)->after('title')->unique()->comment('栏目简写');
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
            //
            $table->dropColumn("dirname");
        });
    }
}
