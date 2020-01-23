<?php
Route::group(['prefix' => 'usuario'], function () {
	Route::get('', [
		'uses' => 'Seguridad\UsuarioController@index',
		'middleware' => ['permission:usuario-leer|usuario-crear|usuario-editar|usuario-borrar']
	])->name('usuario');
	Route::get('nuevo', [
		'uses' => 'Seguridad\UsuarioController@create',
		'middleware' => ['permission:usuario-crear']
	])->name('usuario.nuevo');
	Route::post('crear', [
		'uses' => 'Seguridad\UsuarioController@store',
		'middleware' => ['permission:usuario-crear']
	])->name('usuario.crear');
	Route::get('editar/{usuario}', [
		'uses' => 'Seguridad\UsuarioController@edit',
		'middleware' => ['permission:usuario-editar']
	])->name('usuario.editar');
	Route::put('editar/{usuario}', [
		'uses' => 'Seguridad\UsuarioController@update',
		'middleware' => ['permission:usuario-editar']
	])->name('usuario.editar');
	Route::get('ver/{usuario}', [
		'uses' => 'Seguridad\UsuarioController@show',
		'middleware' => ['permission:usuario-leer']
	])->name('usuario.ver');
	Route::delete('borrar/{usuario}', [
		'uses' => 'Seguridad\UsuarioController@destroy',
		'middleware' => ['permission:usuario-borrar']
	])->name('usuario.borrar');

	Route::post('municipio', [
		'uses' => 'Seguridad\UsuarioController@municipioajax',

	])->name('usuario.municipio');
	Route::post('roles', [
		'uses' => 'Seguridad\UsuarioController@rolesajax',

	])->name('usuario.roles');
	Route::post('asignar', [
		'uses' => 'Seguridad\UsuarioController@asignaRolesAjax',

	])->name('usuario.asignar');
	Route::post('eliminarol', [
		'uses' => 'Seguridad\UsuarioController@elinarRolAjax',
	])->name('usuario.eliminarol');

	Route::post('dasignadas', [
		'uses' => 'Seguridad\UsuarioController@asignadasAjax',
	])->name('usuario.dasignadas');

	Route::post('dasignar', [
		'uses' => 'Seguridad\UsuarioController@asignaDependenciaAjax',
	])->name('usuario.dasignar');

	Route::post('eliminadependencia', [
		'uses' => 'Seguridad\UsuarioController@elinarDependenciaAjax',
	])->name('usuario.eliminadependencia');

	Route::get('tiempocarga', [
		'uses' => 'Seguridad\UsuarioController@tiempocarga',
	])->name('usuario.tiempocarga');
	/** Cambiar la contraseña */
	Route::get('password/{usuario}', [
		'uses' => 'Seguridad\UsuarioController@editpassword',
		'middleware' => ['permission:usuario-editar']
	])->name('usuario.password');
	Route::put('password/{usuario}', [
		'uses' => 'Seguridad\UsuarioController@updatepassword',
		'middleware' => ['permission:usuario-editar']
	])->name('usuario.password');

	Route::get('setAreas', [
		'uses' => 'Seguridad\UsuarioController@setAreas',
	])->name('usuario.setAreas');
	Route::get('setActinact', [
		'uses' => 'Seguridad\UsuarioController@setActinact',
	])->name('usuario.setActinact');
});
