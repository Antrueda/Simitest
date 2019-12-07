<?php 
Route::post('departamentos', [
		'uses' => 'AjaxxController@departamentos',
	])->name('ajaxx.departamento');
	Route::post('upzs', [
		'uses' => 'AjaxxController@upzs',
	])->name('ajaxx.upz');
	Route::post('barrios', [
		'uses' => 'AjaxxController@barrios',
	])->name('ajaxx.barrio');
	Route::post('edad', [
		'uses' => 'AjaxxController@saberEdad',
	])->name('ajaxx.edad');
	Route::post('poblacionetnia', [
		'uses' => 'AjaxxController@poblacionetnia',
	])->name('ajaxx.poblacionetnia');
	Route::post('ayuda', [
		'uses' => 'AjaxxController@ayuda',
	])->name('ajaxx.ayuda');
	
	
	Route::post('consecutivoceduala', [
		'uses' => 'AjaxxController@consecutivoceduala',
	])->name('ajaxx.consecutivoceduala');
	Route::post('situacionmilitar', [
		'uses' => 'AjaxxController@situacionmilitar',
	])->name('ajaxx.situacionmilitar');
	
	
	Route::post('claselibreta', [
		'uses' => 'AjaxxController@claselibreta',
	])->name('ajaxx.claselibreta');

	Route::post('cuentadocumento', [
		'uses' => 'AjaxxController@cuentadocumento',
	])->name('ajaxx.cuentadocumento');