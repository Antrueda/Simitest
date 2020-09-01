<?php
$routexxx='fidatbas';
$controll='FichaIngreso\Fi';
Route::group(['prefix' => 'fi'], function () use($routexxx,$controll){
	Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
    ])->name($routexxx);
    Route::get('listaxxx', [
		'uses' => $controll.'Controller@getListado',
		'middleware' => ['permission:'.$routexxx.'-leer']
    ])->name($routexxx.'.listaxxx');

	Route::get('nuevo', [
	    'uses' => $controll.'Controller@create',
	    'middleware' => ['permission:'.$routexxx.'-crear']
    ])->name($routexxx.'.nuevo');
    Route::post('crear', [
	    'uses' => $controll.'Controller@store',
	    'middleware' => ['permission:'.$routexxx.'-crear']
    ])->name($routexxx.'.crear');

    Route::get('editar/{objetoxx}', [
	    'uses' => $controll.'Controller@edit',
	    'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => $controll.'Controller@update',
	    'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');


	Route::get('ver/{objetoxx}', [
	    'uses' => $controll.'Controller@show',
	    'middleware' => ['permission:'.$routexxx.'-leer']
	])->name($routexxx.'.ver');

    Route::get('borrar/{objetoxx}', [
        'uses' => $controll . 'Controller@inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');

    Route::put('borrar/{objetoxx}', [
        'uses' => $controll . 'Controller@destroy',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');


	include_once('web_fi_actividadestl.php');
	include_once('web_fi_autorizacion.php');
	include_once('web_fi_bienvenida.php');
	include_once('web_fi_composicion_fami.php');
	include_once('web_fi_consumo_spa.php');
	include_once('web_fi_contacto.php');
	include_once('web_fi_datosbasico.php');
	include_once('web_fi_formacion.php');
	include_once('web_fi_generacion_ingreso.php');
	include_once('web_fi_justicia_restaurativa.php');
  include_once('web_fi_razone_archivo.php');
	include_once('web_fi_razone.php');
	include_once('web_fi_redes_apoyo.php');
	include_once('web_fi_red_apoyo_actual.php');
	include_once('web_fi_residencia.php');
	include_once('web_fi_salud.php');
	include_once('web_fi_salud_enfermedad.php');
	include_once('web_fi_proceso_familiar.php');
	include_once('web_fi_sustancia_consumida.php');
	include_once('web_fi_situacion_especial.php');
	include_once('web_fi_vestuario.php');
	include_once('web_fi_violencia.php');
	include_once('web_fi_jr_familiar.php');
});
