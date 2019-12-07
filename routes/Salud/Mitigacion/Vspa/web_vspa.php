<?php
    Route::group(['prefix' => '{id}/vspa'], function () {
        Route::get('', [
            'uses' => 'Salud\Mitigacion\Vspa\VspaController@index',
            'middleware' => ['permission:vspa-leer|vspa-crear|vspa-editar|vspa-borrar']
        ])->name('mitigacion.vspa');
        Route::get('nuevo', [
            'uses' => 'Salud\Mitigacion\Vspa\VspaController@create',
            'middleware' => ['permission:vspa-crear|vspa-editar']
        ])->name('mitigacion.vspa.nuevo');
        Route::post('nuevo', [
            'uses' => 'Salud\Mitigacion\Vspa\VspaController@store',
            'middleware' => ['permission:vspa-crear']
        ]);
        Route::get('editar/{id0}', [
            'uses' => 'Salud\Mitigacion\Vspa\VspaController@edit',
            'middleware' => ['permission:vspa-crear|vspa-editar']
        ])->name('mitigacion.vspa.editar');
        Route::put('editar/{id0}', [
            'uses' => 'Salud\Mitigacion\Vspa\VspaController@update',
            'middleware' => ['permission:vspa-editar']
        ]);
    });
