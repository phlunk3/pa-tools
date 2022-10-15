<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissingAttacksColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::table('attacks', function (Blueprint $table) {
            $table->string('prerelease_time',255)->nullable();
	    $table->integer('is_prereleased')->nullable();
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attacks', function (Blueprint $table) {
            $table->dropColumn('is_prereleased');
            $table->dropColumn('prerelease_time');
	});
    }
}
