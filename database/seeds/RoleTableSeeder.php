<?php 

use Illuminate\Database\Seeder;
 

class RoleTableSeeder extends Seeder
{
	
	public function run()
	{	     
	        \DB::table('roles')->insert(array(
				'nombre' =>'admin'
		    ));
		    \DB::table('roles')->insert(array(
				'nombre' =>'user'
		    ));
		    \DB::table('usuarios')->insert(array(
				'nombre' =>'Admin',
				'apellido'=>'Admin',
				'email'=>'admin@hotmail.com',
				'password'=>\Hash::make('administrador'),
				'roles_id'=>'1'
		    ));
	    
		
	}
}


?>