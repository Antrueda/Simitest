<?php
$routexxx='casomodulo';
$controll='Acciones\Individuales\Juridica\CasoJuridico\Administracion\CasoModulo';

Route::group(['prefix' => 'ModuloCaso'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-modulo']
    ])->name($routexxx);
});
require_once('web_tipocaso.php');
require_once('web_temacaso.php');
require_once('web_seguimientocaso.php');
require_once('web_asignarcaso.php');




