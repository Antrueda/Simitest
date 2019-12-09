<?php
    Route::group(['prefix' => '{id}/vma'], function () {
        Route::get('', [
            'uses' => 'Acciones\Individuales\Salud\Mitigacion\VmaController@index',
            'middleware' => ['permission:vma-leer|vma-crear|vma-editar|vma-borrar']
        ])->name('mitigacion.vma');
        Route::get('nuevo', [
            'uses' => 'Acciones\Individuales\Salud\Mitigacion\VmaController@create',
            'middleware' => ['permission:vma-crear|vma-editar']
        ])->name('mitigacion.vma.nuevo');
        Route::post('nuevo', [
            'uses' => 'Acciones\Individuales\Salud\Mitigacion\VmaController@store',
            'middleware' => ['permission:vma-crear']
        ]);
        Route::get('editar/{id0}', [
            'uses' => 'Acciones\Individuales\Salud\Mitigacion\VmaController@edit',
            'middleware' => ['permission:vma-crear|vma-editar']
        ])->name('mitigacion.vma.editar');
        Route::put('editar/{id0}', [
            'uses' => 'Acciones\Individuales\Salud\Mitigacion\VmaController@update',
            'middleware' => ['permission:vma-editar']
        ]);
    });
