<?php
$routexxx='saludmodulo';
$controll='Acciones\Individuales\Educacion\MatriculaCursos\Administracion\CursosModulo';
Route::group(['prefix' => 'ModuloSalud'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-modulo']
    ])->name($routexxx);
});
require_once('web_diagnostico.php');
require_once('web_enfermedad.php');
require_once('web_enfermedadasignar.php');
require_once('web_remision.php');
require_once('web_remisionespe.php');
require_once('web_asignarespecial.php');



