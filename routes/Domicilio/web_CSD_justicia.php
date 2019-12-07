<?php
Route::group(['prefix' => '{id}/justicia'], function () {
  Route::get('', [
    'uses' => 'Domicilio\CsdJusticiaController@show',
    'middleware' => ['permission:csdjusticia-crear|csdjusticia-editar']
  ])->name('CSD.justicia');
  Route::post('', [
    'uses' => 'Domicilio\CsdJusticiaController@store',
    'middleware' => ['permission:csdjusticia-crear']
  ]);
  Route::put('{id1}', [
    'uses' => 'Domicilio\CsdJusticiaController@update',
    'middleware' => ['permission:csdjusticia-editar']
  ])->name('CSD.justicia.editar');
});
