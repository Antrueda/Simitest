<?php
$routexxx = 'linebase';
$controll = "Indicadores\Administ\In" . ucfirst($routexxx) . "Controller@";
Route::group(['prefix' => '{padrexxx}/lineasbase'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx' . $routexxx . 'activarx']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'get'.ucfirst($routexxx),
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-asignarx|' . $routexxx . '-borrarxx' . $routexxx . 'activarx']
    ])->name($routexxx . '.listaxxx');
    Route::get('asignarx', [
        'uses' => $controll . 'get'.ucfirst($routexxx).'Asignar',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-asignarx|' . $routexxx . '-borrarxx' . $routexxx . 'activarx']
    ])->name($routexxx . '.asignarx');
    Route::get('nuevo', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
	])->name($routexxx . '.nuevoxxx');
    Route::post('crear', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.crearxxx');
});

Route::group(['prefix' => 'lineabase'], function () use ($routexxx, $controll) {
    Route::get('editar/{modeloxx}', [
        'uses' => $controll . 'edit',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.editarxx');
    Route::put('editar/{modeloxx}', [
        'uses' => $controll . 'update',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.editarxx');
    Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');
    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'destroy',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');
    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'activate',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'activar',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
    Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'show',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.leerxxxx');
});




// Route::group(['prefix' => 'inlineabase'], function ($routexxx,$controll) {
//     Route::get('', [
// 	    'uses' => 'Indicadores\InLineaBaseController@index',
// 	    'middleware' => ['permission:inlineabase-leer|inlineabase-crear|inlineabase-editar|inlineabase-borrar']
// 	])->name($routexxx);
// 	Route::get('nuevo', [
// 	    'uses' => 'Indicadores\InLineaBaseController@create',
// 	    'middleware' => ['permission:inlineabase-crear']
// 	])->name('li.lineabase.nuevo');
// 	Route::post('nuevo', [
// 	    'uses' => 'Indicadores\InLineaBaseController@store',
// 	    'middleware' => ['permission:inlineabase-crear']
// 	])->name('li.lineabase.crear');

// 	Route::get('editar/{objetoxx}', [
// 	    'uses' => 'Indicadores\InLineaBaseController@edit',
// 	    'middleware' => ['permission:inlineabase-editar']
// 	])->name('li.lineabase.editar');
// 	Route::put('editar/{objetoxx}', [
// 	    'uses' => 'Indicadores\InLineaBaseController@update',
// 	    'middleware' => ['permission:inlineabase-editar']
// 	])->name('li.lineabase.editar');
// 	Route::get('ver/{objetoxx}', [
// 	    'uses' => 'Indicadores\InLineaBaseController@show',
// 	    'middleware' => ['permission:inlineabase-leer']
// 	])->name('li.lineabase.ver');
// 	Route::delete('ver/{objetoxx}', [
// 	    'uses' => 'Indicadores\InLineaBaseController@destroy',
// 	    'middleware' => ['permission:inlineabase-borrar']
// 	])->name('li.lineabase.borrar');
// });
