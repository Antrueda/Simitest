<?php
$routexxx='edaprudi';
$controll='Acciones\Individuales\Educacion\Administ\Pruediag\EduPruediagnosController@';
Route::group(['prefix' => 'pdianostica'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'index',
		'middleware' => ['permission:'.$routexxx.'-moduloxx']
    ])->name($routexxx);
    require_once('web_edagrado.php');
    require_once('web_edaasign.php');
    require_once('web_edapresa.php');
});


