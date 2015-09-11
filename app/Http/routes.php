<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('login', 'WelcomeController@index');

Route::get('/',function(){
	
	return Redirect(url('/noticias'));
});

Route::controllers([
	'categorias'=>'CategoriasController',
	'noticias'=>'NoticiaController',
	'buscador'=>'BuscadorController',
    'admin'=>'AdminController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('usuarios','UsuarioController');
Route::resource('comentarios','ComentarioController');
Route::resource('programas','ProgramasController');