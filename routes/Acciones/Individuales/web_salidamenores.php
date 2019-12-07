<?php
  Route::group(['prefix' => '{id}/salidamenores'], function () {
    Route::get('', [
      'uses' => 'Acciones\Individuales\AISalidaMenoresController@index',
      'middleware' => ['permission:aisalidamenores-leer|aisalidamenores-crear|aisalidamenores-editar|aisalidamenores-borrar']
    ])->name('ai.salidamenores');
    Route::get('nuevo', [
    'uses' => 'Acciones\Individuales\AISalidaMenoresController@create',
    'middleware' => ['permission:aisalidamenores-crear|aisalidamenores-editar']
    ])->name('ai.salidamenores.nuevo');
    Route::post('nuevo', [
      'uses' => 'Acciones\Individuales\AISalidaMenoresController@store',
      'middleware' => ['permission:aisalidamenores-crear']
    ]);
    Route::get('editar/{id0}', [
      'uses' => 'Acciones\Individuales\AISalidaMenoresController@edit',
      'middleware' => ['permission:aisalidamenores-crear|aisalidamenores-editar']
    ])->name('ai.salidamenores.editar');
    Route::put('editar/{id0}', [
      'uses' => 'Acciones\Individuales\AISalidaMenoresController@update',
      'middleware' => ['permission:aisalidamenores-editar']
    ]);
  });
