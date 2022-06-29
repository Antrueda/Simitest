<?php
$routexxx = 'perfilocupacional-modulo';
$controll='Acciones\Individuales\Educacion\PerfilOcupacional\Administracion\PerfilOcupModulo';

Route::group(['prefix' => 'modulo-perfil-ocupacional'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'Controller@index',
	//	'middleware' => ['permission:'.$routexxx.'-modulo']
    ])->name($routexxx);
});


require_once('web_perfil_ocupa_componentes.php');
require_once('web_perfil_ocupa_categorias.php');
require_once('web_perfil_ocupa_items_evaluar.php');

