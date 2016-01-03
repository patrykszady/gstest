<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hours', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('employee_id')->unsigned();  //change to integer? and employee_id
			$table->integer('hours');
			$table->integer('project_id')->unsigned();  //id on projects table
			$table->string('amount_paid');   //change type to integer?/number?
			$table->date('day_worked');
			$table->timestamps();

			$table->foreign('project_id')
				  ->references('id')
				  ->on('projects');
					  
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hours');
	}

}
