<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schedules', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('vessel_id');
			$table->integer('voyage_no');
			$table->dateTime('etd');
			$table->dateTime('eta');
			$table->dateTime('atd');
			$table->dateTime('ata');
			$table->enum('status',array('Loading', 'Unloading', 'On Voyage'));
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
		Schema::drop('schedules');
	}

}
