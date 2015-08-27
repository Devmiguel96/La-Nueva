<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',45);
			$table->string('apellido',45);
			$table->string('email',45)->unique();
			$table->string('password',60);
			$table->integer('roles_id')->unsigned();

			$table->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
			$table->rememberToken();
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
		Schema::drop('usuarios');
	}

}
