<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissingBattlegroupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('battlegroup_fleets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fleet_id');
	    $table->integer('ship_id');
	    $table->integer('user_id');
	    $table->bigInteger('amount');
	    $table->integer('battlegroup_id')->nullable();
            $table->timestamps();
        });
        Schema::create('battlegroup_teamups', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('user_id')->nullable();
	    $table->integer('fleet_id')->nullable();
	    $table->integer('teamup_id')->nullable();
	    $table->integer('battlegroup_id')->nullable();
	    $table->string('name',255)->nullable();
	    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('battlegroup_fleets');
	    Schema::dropIfExists('battlegroup_teamups');
    }
}
