<?php 

use Illuminate\Database\Seeder;


class CategoriaTableSeeder extends Seeder
{
	
	public function run()
	{
		\DB::table('categorias')->insert(array(
			'nombre' => 'Deportiva'
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'Judicial'
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'Tecnologica'
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'Economica'
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'Politica'
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'Otros'
		));
	}
}


?>