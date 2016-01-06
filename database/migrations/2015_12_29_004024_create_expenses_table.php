<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('expenses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id')->unsigned();
			$table->string('amount_paid');
			$table->integer('employee_id')->unsigned();   //for now just ID -- need to create employee table //sub contractor
			$table->string('note');
			$table->integer('office');
			$table->date('paid_on');
			$table->string('receipt_url');
			$table->string('reimbursment');
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
		Schema::drop('expenses');
	}

}
