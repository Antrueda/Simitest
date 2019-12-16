<?php
    Route::group(['prefix' => '{id}/vspa'], function () {
        Route::get('', [
            'uses' => 'Acciones\Individuales\Salud\Mitigacion\VspaController@index',
            'middleware' => ['permission:vspa-leer|vspa-crear|vspa-editar|vspa-borrar']
        ])->name('mitigacion.vspa');
        Route::get('nuevo', [
            'uses' => 'Acciones\Individuales\Salud\Mitigacion\VspaController@create',
            'middleware' => ['permission:vspa-crear|vspa-editar']
        ])->name('mitigacion.vspa.nuevo');
        Route::post('nuevo', [
            'uses' => 'Acciones\Individuales\Salud\Mitigacion\VspaController@store',
            'middleware' => ['permission:vspa-crear']
        ]);
        Route::get('editar/{id0}', [
            'uses' => 'Acciones\Individuales\Salud\Mitigacion\VspaController@edit',
            'middleware' => ['permission:vspa-crear|vspa-editar']
        ])->name('mitigacion.vspa.editar');
        Route::put('editar/{id0}', [
            'uses' => 'Acciones\Individuales\Salud\Mitigacion\VspaController@update',
            'middleware' => ['permission:vspa-editar']
        ]);
    });
