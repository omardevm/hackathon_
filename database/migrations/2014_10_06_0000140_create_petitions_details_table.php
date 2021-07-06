<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetitionsDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('petitions_details', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('code');
            $table->integer('product_id')->unsigned();
            $table->integer('quantity');
		    $table->timestamps();
		});

        Schema::table('petitions_details', function($table) {
            $table->foreign('code')->references('code')->on('inner_user_petitions');
            $table->foreign('product_id')->references('id')->on('products');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('petitions_details');
	}

}
