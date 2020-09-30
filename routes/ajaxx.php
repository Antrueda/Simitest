<?php
Route::group(['prefix' => 'ajaxx'], function () {
	include_once('route_ajax/fi_ingreso.php');
	include_once('route_ajax/fi_salud.php');
	include_once('route_ajax/fi_escuela.php');
	include_once('route_ajax/fi_dato_basico.php');
	include_once('route_ajax/fi_contacto.php');
	include_once('route_ajax/fi_composicion.php');
	include_once('route_ajax/fi_bienvenida.php');
	include_once('route_ajax/fi_violencia.php');
	include_once('route_ajax/fi_justicia.php');
	include_once('route_ajax/fi_redesapoyo.php');
	include_once('route_ajax/fi_residencia.php');
	include_once('route_ajax/fi_actividad.php');

	include_once('route_ajax/in_indicador.php');
	include_once('route_ajax/ag_acciones.php');
	include_once('route_ajax/acciongestion.php');
    include_once('route_ajax/sis_dependencia.php');
    include_once('route_ajax/vsi_ajax.php');
});
