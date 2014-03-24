<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TimeList extends Migration {
	private $table = 'time_list';

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create($this->table, function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('stime');
			$table->integer('etime');
		
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop($this->table);
	}

}
