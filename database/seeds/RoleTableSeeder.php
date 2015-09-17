<?php 

use Illuminate\Database\Seeder;
 

class RoleTableSeeder extends Seeder
{
	
	public function run()
	{	     
	        \DB::table('roles')->insert(array(
				'nombre' =>'admin',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		    ));
		    \DB::table('roles')->insert(array(
				'nombre' =>'user',
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