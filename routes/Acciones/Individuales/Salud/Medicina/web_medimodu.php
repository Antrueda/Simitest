<?php
$routexxx = 'medicina-modulo';
$controll = 'Acciones\Individuales\Salud\Medicina\MedicamentoModuloController@';
Route::group(['prefix' => 'modulomedicina'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
    //    'middleware' => ['permission:' . $routexxx]
    ])->name($routexxx);


    
   // require_once('web_medicamentos.php');
    require_once('web_compuesto.php');
    require_once('web_presentacion.php');
    require_once('web_concentracion.php');
    require_once('web_medicamentoasignar.php');



});
