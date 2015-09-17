<?php 

use Illuminate\Database\Seeder;
 

class RoleTableSeeder extends Seeder
{
	
	public function run()
	{	     
	        \DB::table('roles')->insert(array(
	        	'id'=>'1',
				'nombre' =>'admin',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		    ));
		    \DB::table('roles')->insert(array(
		    	'id'=>'2',
				'nombre' =>'user',
				'created_at'=>date('Y-m-d H:m:s'),
				'updated_at'=>date('Y-m-d H:m:s')
		    ));
		    
	    
		
	}
}


?>