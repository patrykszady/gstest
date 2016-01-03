<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('company_name');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('address');
			$table->string('unit_address');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->string('phone');
			$table->string('email');
			$table->integer('liablity_url'); 
			$table->integer('workers_comp_url'); 
			$table->integer('employee'); //ues or no 
			$table->date('liability_expiry');
			$table->date('workers_comp_expiry');
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
		Schema::drop('subs');
	}

}
