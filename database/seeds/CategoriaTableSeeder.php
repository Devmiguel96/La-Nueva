<?php 

use Illuminate\Database\Seeder;


class CategoriaTableSeeder extends Seeder
{
	
	public function run()
	{
		\DB::table('categorias')->insert(array(
			'nombre' => 'DEPORTES',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'COLOMBIA',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'TECNOLOGICA',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'ECONOMÍCA',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'POLÍTICA',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'MUNDO',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'OPINIÓN',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'ENTRETENIMIENTO',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'OTROS..',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('usuarios')->insert(array(
				'nombre' =>'la nueva',
				'apellido'=>'estereo',
				'email'=>'lanueva@hotmail.com',
				'password'=>\Hash::make('lanueva'),
				'roles_id'=>'1',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
	}
}


?>