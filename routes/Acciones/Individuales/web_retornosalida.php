<?php
  Route::group(['prefix' => '{id}/retornosalida'], function () {
    Route::get('', [
      'uses' => 'Acciones\Individuales\AIRetornoSalidaController@index',
      'middleware' => ['permission:airetornosalida-leer|airetornosalida-crear|airetornosalida-editar|airetornosalida-borrar']
    ])->name('ai.retornosalida');
    Route::get('nuevo', [
      'uses' => 'Acciones\Individuales\AIRetornoSalidaController@create',
      'middleware' => ['permission:airetornosalida-crear|airetornosalida-editar']
    ])->name('ai.retornosalida.nuevo');
    Route::post('nuevo', [
      'uses' => 'Acciones\Individuales\AIRetornoSalidaController@store',
      'middleware' => ['permission:airetornosalida-crear']
    ]);
    Route::get('editar/{id0}', [
      'uses' => 'Acciones\Individuales\AIRetornoSalidaController@edit',
      'middleware' => ['permission:airetornosalida-crear|airetornosalida-editar']
    ])->name('ai.retornosalida.editar');
    Route::put('editar/{id0}', [
      'uses' => 'Acciones\Individuales\AIRetornoSalidaController@update',
      'middleware' => ['permission:airetornosalida-editar']
    ])->name('ai.retornosalida.editar');
  });
