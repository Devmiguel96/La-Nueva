<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('noticias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo');
			$table->string('detalle',500);
			$table->string('foto');
			$table->integer('categorias_id')->unsigned();
			$table->integer('usuarios_id')->unsigned();

			$table->foreign('categorias_id')->references('id')->on('categorias')->onDelete('cascade');
			$table->foreign('usuarios_id')->references('id')->on('usuarios')->onDelete('cascade');
			
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
		Schema::drop('noticias');
	}

}
