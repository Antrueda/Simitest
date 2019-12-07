<?php
Route::group(['prefix' => '{id}/bienvenida'], function () {
  Route::get('', [
    'uses' => 'Domicilio\CsdBienvenidaController@show',
    'middleware' => ['permission:csdbienvenida-crear|csdbienvenida-editar']
  ])->name('CSD.bienvenida');
  Route::post('', [
    'uses' => 'Domicilio\CsdBienvenidaController@store',
    'middleware' => ['permission:csdbienvenida-crear']
  ]);
  Route::put('{id1}', [
    'uses' => 'Domicilio\CsdBienvenidaController@update',
    'middleware' => ['permission:csdbienvenida-editar']
  ])->name('CSD.bienvenida.editar');
});
