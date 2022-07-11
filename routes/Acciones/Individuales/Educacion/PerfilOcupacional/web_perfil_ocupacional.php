<?php
$routexxx = 'perfilocupacional';
$controll = 'Acciones\Individuales\Educacion\PerfilOcupacional\PerfilOcupacionalController@';

Route::group(['prefix' => '{padrexxx}/perfilocupacional'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
         'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'listaxxx',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.listaxxx');
    Route::get('nuevo', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.nuevoxxx');
    Route::post('nuevo', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.crearxxx');
});


Route::group(['prefix' => 'perfilocupacional'], function () use ($controll, $routexxx) {
    Route::get('editar/{modeloxx}', [
	    'uses' => $controll.'edit',
	    'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.editarxx');
	Route::put('editar/{modeloxx}', [
	    'uses' => $controll.'update',
	    'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.editarxx');
	Route::get('ver/{modeloxx}', [
	    'uses' => $controll.'show',
	    'middleware' => ['permission:'.$routexxx.'-leerxxxx']
	])->name($routexxx.'.verxxxxx');
	Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');

    Route::get('nnajsele', [
		'uses' => $controll . 'getNnajsele',
		'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.nnajsele');

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
});









// Route::group(['prefix' => 'nnajfpo'], function () use ($routexxx, $controll) {
     
//         Route::get('{padrexxx}/perfil-ocupacional', [
//             'uses' => $controll . 'Controller@index',
//            'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
//         ])->name($routexxx.'-leer');
     
//         //peticion ajax
//         Route::get('{padrexxx}/perfil-ocupacional/listaxxx', [
//                 'uses' => $controll . 'Controller@getListado',
//                 'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
//             ])->name($routexxx . '.listaxxx');
   
//         Route::get('{padrexxx}/perfil-ocupacional/nuevo', [
//             'uses' => $controll.'Controller@create',
//             'middleware' => ['permission:'.$routexxx.'-crear']
//         ])->name($routexxx.'.nuevoxxx');

//         Route::post('{padrexxx}/perfil-ocupacional/nuevo', [
//                 'uses' => $controll.'Controller@store',
//                 'middleware' => ['permission:'.$routexxx.'-crear']
//             ])->name($routexxx.'.crear');

//             Route::get('{padrexxx}/perfil-ocupacional/ver/{modeloxx}', [
//                 'uses' => $controll . 'Controller@show',
//                 'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
//             ])->name($routexxx . '.ver');

//             Route::get('{padrexxx}/perfil-ocupacional/editar/{modeloxx}', [
//                 'uses' => $controll . 'Controller@edit',
//                 'middleware' => ['permission:' . $routexxx . '-editar']
//             ])->name($routexxx . '.editar');

//             Route::put('{padrexxx}/perfil-ocupacional/editar/{modeloxx}', [
//                 'uses' => $controll . 'Controller@update',
//                 'middleware' => ['permission:' . $routexxx . '-editar']
//             ])->name($routexxx . '.editar');

//             Route::get('{padrexxx}/perfil-ocupacional/borrar/{modeloxx}', [
//                 'uses' => $controll . 'Controller@inactivate',
//                 'middleware' => ['permission:' . $routexxx . '-borrar']
//             ])->name($routexxx . '.borrar');
        
//             Route::put('{padrexxx}/perfil-ocupacional/borrar/{modeloxx}', [
//                 'uses' => $controll . 'Controller@destroy',
//                 'middleware' => ['permission:' . $routexxx . '-borrar']
//             ])->name($routexxx . '.borrar');
           
//             Route::get('{padrexxx}/perfil-ocupacional/activar/{modeloxx}', [
//                 'uses' => $controll . 'Controller@getActivar',
//                 'middleware' => ['permission:' . $routexxx . '-borrar']
//             ])->name($routexxx . '.activar');
        
//             Route::put('{padrexxx}/perfil-ocupacional/activar/{modeloxx}', [
//                 'uses' => $controll . 'Controller@activar',
//                 'middleware' => ['permission:' . $routexxx . '-borrar']
//             ])->name($routexxx . '.activar');
// });
