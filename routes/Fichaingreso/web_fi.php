<?php
Route::group(['prefix' => 'fi'], function () {
	Route::get('', [
		'uses' => 'FichaIngreso\FiController@index',
		'middleware' => ['permission:fidatobasico-leer|fidatobasico-crear|fidatobasico-editar|fidatobasico-borrar']
	])->name('fi');
	Route::get('nuevo', [
	    'uses' => 'FichaIngreso\FiDatoBasicoController@create',
	    'middleware' => ['permission:fidatobasico-crear']
	])->name('fi.datobasico.nuevo');
	Route::post('crear', [
	    'uses' => 'FichaIngreso\FiDatoBasicoController@store',
	    'middleware' => ['permission:fidatobasico-crear']
	])->name('fi.datobasico.crear');

	
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
	include_once('web_fi_razone.php');
	include_once('web_fi_redes_apoyo.php');
	include_once('web_fi_red_apoyo_actual.php');
	include_once('web_fi_red_apoyo_antecedente.php');
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
