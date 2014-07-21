<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('routes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('schedule_id');
			$table->string('port_code');
			$table->string('port_name');
			$table->string('country');
			$table->dateTime('etd');
			$table->dateTime('eta');
			$table->dateTime('atd');
			$table->dateTime('ata');
			$table->enum('port_info', array('Port of Origin', 'Transit Port', 'Port of Destination'));
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
		Schema::drop('routes');
	}

}
