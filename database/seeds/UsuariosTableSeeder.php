<?php 

use Illuminate\Database\Seeder;
 
use Faker\Factory as Faker;

class UsuariosTableSeeder extends Seeder
{
	
	public function run()
	{
		$faker = Faker::create();

	    foreach (range(1 ,50 )as $index) {
	     
	        \DB::table('usuarios')->insert(array(
				'nombre' =>$faker->firstName,
				'apellido' =>$faker->lastName,
				'email' =>$faker->unique()->email,
				'password' =>\Hash::make('usuario'),
				'roles_id'=>'2'
		    ));
	    }

		
	}
}


?>