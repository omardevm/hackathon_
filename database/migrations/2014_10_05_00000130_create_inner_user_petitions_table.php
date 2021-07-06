<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInnerUserPetitionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inner_user_petitions', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('code',13)->unique();
		    $table->string('category',11);
		    $table->string('traffic_light',5);
		    $table->string('deliver_form',7);
            $table->integer('inner_user_id')->unsigned();
		    $table->timestamps();
		});

        Schema::table('inner_user_petitions', function($table) {
            $table->foreign('inner_user_id')->references('id')->on('inner_users');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inner_user_petitions');
	}

}
