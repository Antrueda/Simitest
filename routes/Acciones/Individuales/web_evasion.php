<?php
Route::group(['prefix' => '{id}/evasion'], function () {
    Route::get('', [
        'uses' => 'Acciones\Individuales\AIEvasionController@index',
        'middleware' => ['permission:aievasion-leer|aievasion-crear|aievasion-editar|aievasion-borrar']
    ])->name('ai.evasion');
    Route::get('nuevo', [
        'uses' => 'Acciones\Individuales\AIEvasionController@create',
        'middleware' => ['permission:aievasion-crear|aievasion-editar']
    ])->name('ai.evasion.nuevo');
    Route::post('nuevo', [
        'uses' => 'Acciones\Individuales\AIEvasionController@store',
        'middleware' => ['permission:aievasion-crear']
    ]);
    Route::get('editar/{id0}', [
        'uses' => 'Acciones\Individuales\AIEvasionController@edit',
        'middleware' => ['permission:aievasion-crear|aievasion-editar']
    ])->name('ai.evasion.editar');
    Route::put('editar/{id0}', [
        'uses' => 'Acciones\Individuales\AIEvasionController@update',
        'middleware' => ['permission:aievasion-editar']
    ]);
});
