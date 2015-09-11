<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('horario');
			$table->string('comienza');
			$table->string('termina');
			$table->string('dirige');

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
		Schema::drop('programas');
	}

}
