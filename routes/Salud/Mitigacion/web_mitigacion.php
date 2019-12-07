<?php
  Route::group(['prefix' => 'mitigacion'], function () {
    Route::get('', [
        'uses' => 'Salud\Mitigacion\MitigacionController@index',
        'middleware' => ['permission:mitigacionIndex-leer']
    ])->name('mitigacion');
    Route::get('{id}', [
        'uses' => 'Salud\Mitigacion\MitigacionController@show',
        'middleware' => ['permission:mitigacionIndex-leer']
    ])->name('mitigacion.ver');    
    include_once('Vspa/web_vspa.php');
    include_once('Vma/web_vma.php');
  });