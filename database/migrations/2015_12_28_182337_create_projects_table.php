<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('project_name');
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
			$table->integer('status'); //pending/started/ect
			$table->integer('client_id')->unsigned(); // unsigned = must be positive
			$table->date('started_on');
			$table->date('finished_on');
			$table->timestamps();

			$table->foreign('client_id')
				  ->references('id')
				  ->on('clients');
				  // ->onDelete('cascade') if project is deleted delete the clients tables too
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
