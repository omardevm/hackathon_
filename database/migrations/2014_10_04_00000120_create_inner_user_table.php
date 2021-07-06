<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInnerUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inner_users', function(Blueprint $table)
		{
            $table->increments('id');
		    $table->string('curp', 18)->unique('unique_curp');
		    $table->string('email', 200)->unique('unique_email2')->default('');
		    $table->string('password');
		    $table->string('name',70);
		    $table->string('last_1',70);
		    $table->string('last_2',70);
            $table->string('telephone',12);
            $table->string('city',70);
            $table->string('street',70);
            $table->string('suburb',70);
            $table->string('zipcode',5);
            $table->string('category',11);
            $table->integer('users_id')->unsigned();
		    $table->timestamps();
		});

        Schema::table('inner_users', function($table) {
            $table->foreign('users_id')->references('id')->on('users');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inner_users');
	}

}
