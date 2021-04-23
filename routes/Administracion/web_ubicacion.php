<?php
$routexxx='ubicacio';
$controll='Administracion\Ubicacion\UbicacionModulo';
Route::group(['prefix' => 'ubicacion'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-modulo']
    ])->name($routexxx);
});
require_once('Ubicacion/web_pais.php');
require_once('Ubicacion/web_departamento.php');
require_once('Ubicacion/web_municipio.php');
require_once('Ubicacion/web_localidad.php');
require_once('Ubicacion/web_localupz.php');
require_once('Ubicacion/web_upz.php');
require_once('Ubicacion/web_barrio.php');
