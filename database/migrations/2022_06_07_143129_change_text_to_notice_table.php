<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTextToNoticeTable extends Migration
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
            $table->text('plan')->nullable()->comment('术前准备')->change();
            $table->text('nurse')->nullable()->comment('术后护理')->change();
            $table->text('sideEffects')->nullable()->comment('副作用及处理')->change();
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
            $table->string('plan')->nullable()->comment('术前准备')->change();
            $table->string('nurse')->nullable()->comment('术后护理')->change();
            $table->string('sideEffects')->nullable()->comment('副作用及处理')->change();
        });
    }
}
