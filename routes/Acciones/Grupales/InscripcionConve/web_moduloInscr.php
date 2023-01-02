<?php
$routexxx='programamodulo';
$controll='Acciones\Grupales\InscripcionSena\Administracion\ProgramaModulo';
Route::group(['prefix' => 'moduloConvenio'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-modulo']
    ])->name($routexxx);
});
require_once('web_programa.php');
require_once('web_modalidad.php');
require_once('web_tipoprograma.php');
require_once('web_convenio.php');
require_once('web_sedecentro.php');
require_once('web_programaasignar.php');

