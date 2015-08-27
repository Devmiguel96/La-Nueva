<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comentarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion');
			$table->integer('usuarios_id')->unsigned();
			$table->integer('noticias_id')->unsigned();

			$table->foreign('usuarios_id')->references('id')->on('usuarios')->onDelete('cascade');
			$table->foreign('noticias_id')->references('id')->on('noticias')->onDelete('cascade');
			
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
		Schema::drop('comentarios');
	}

}
