<?php 

use Illuminate\Database\Seeder;


class CategoriaTableSeeder extends Seeder
{
	
	public function run()
	{
		\DB::table('categorias')->insert(array(
			'nombre' => 'Deportiva',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'Judicial',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'Tecnologica',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'Economica',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'Politica',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('categorias')->insert(array(
				'nombre'=>'Otros',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
		\DB::table('usuarios')->insert(array(
				'nombre' =>'Admin',
				'apellido'=>'Admin',
				'email'=>'admin@hotmail.com',
				'password'=>\Hash::make('administrador'),
				'roles_id'=>'1',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		));
	}
}


?>