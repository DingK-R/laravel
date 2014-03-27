<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Administrator extends Migration {
	private $table = 'administrator';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create($this->table, function($table){
			$table->increments('id');
			$table->string('username');
			$table->string('password');
			$table->string('email');
			$table->string('real_name');
			$table->string('status');
			$table->string('role');
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
		Schema::dropIfExists('administrator');
	}

}
