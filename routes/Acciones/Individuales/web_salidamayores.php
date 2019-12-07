<?php
Route::group(['prefix' => '{id}/salidamayores'], function () {
    Route::get('', [
        'uses' => 'Acciones\Individuales\AISalidaMayoresController@index',
        'middleware' => ['permission:aisalidamayores-leer|aisalidamayores-crear|aisalidamayores-editar|aisalidamayores-borrar']
    ])->name('ai.salidamayores');
    Route::get('nuevo', [
        'uses' => 'Acciones\Individuales\AISalidaMayoresController@create',
        'middleware' => ['permission:aisalidamayores-crear|aisalidamayores-editar']
    ])->name('ai.salidamayores.nuevo');
    Route::post('nuevo', [
        'uses' => 'Acciones\Individuales\AISalidaMayoresController@store',
        'middleware' => ['permission:aisalidamayores-crear']
    ]);
    Route::get('editar/{id0}', [
        'uses' => 'Acciones\Individuales\AISalidaMayoresController@edit',
        'middleware' => ['permission:aisalidamayores-crear|aisalidamayores-editar']
    ])->name('ai.salidamayores.editar');
    Route::put('editar/{id0}', [
        'uses' => 'Acciones\Individuales\AISalidaMayoresController@update',
        'middleware' => ['permission:aisalidamayores-editar']
    ]);
});