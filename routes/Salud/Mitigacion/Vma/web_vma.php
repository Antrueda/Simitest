<?php
    Route::group(['prefix' => '{id}/vma'], function () {
        Route::get('', [
            'uses' => 'Salud\Mitigacion\Vma\VmaController@index',
            'middleware' => ['permission:vma-leer|vma-crear|vma-editar|vma-borrar']
        ])->name('mitigacion.vma');
        Route::get('nuevo', [
            'uses' => 'Salud\Mitigacion\Vma\VmaController@create',
            'middleware' => ['permission:vma-crear|vma-editar']
        ])->name('mitigacion.vma.nuevo');
        Route::post('nuevo', [
            'uses' => 'Salud\Mitigacion\Vma\VmaController@store',
            'middleware' => ['permission:vma-crear']
        ]);
        Route::get('editar/{id0}', [
            'uses' => 'Salud\Mitigacion\Vma\VmaController@edit',
            'middleware' => ['permission:vma-crear|vma-editar']
        ])->name('mitigacion.vma.editar');
        Route::put('editar/{id0}', [
            'uses' => 'Salud\Mitigacion\Vma\VmaController@update',
            'middleware' => ['permission:vma-editar']
        ]);
    });
