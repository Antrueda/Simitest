<?php
$routexxx = 'fidatbas';
$controll = 'FichaIngreso\Fi';
Route::group(['prefix' => 'fi'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'Controller@index',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'Controller@getListado',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.listaxxx');

    Route::get('nuevo', [
        'uses' => $controll . 'Controller@create',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.nuevo');

    Route::get('agregar', [
        'uses' => $controll . 'Controller@agregar',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.agregar');


    Route::get('prueba', [
        'uses' => $controll . 'Controller@agregar',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.prueba');

    Route::post('adicionar', [
        'uses' => $controll . 'Controller@adicionar',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.adicionar');

    Route::post('crear', [
        'uses' => $controll . 'Controller@store',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.crear');

    Route::get('editar/{objetoxx}', [
        'uses' => $controll . 'Controller@edit',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editar');


    Route::get('editarcontacto/{objetoxx}', [
        'uses' => $controll . 'Controller@editAsistenciaANnnj',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editcont');

    Route::put('editar/{objetoxx}', [
        'uses' => $controll . 'Controller@update',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editar');

    Route::put('editarcontacto/{objetoxx}', [
        'uses' => $controll . 'Controller@update',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editcont');
    Route::get('ver/{objetoxx}', [
        'uses' => $controll . 'Controller@show',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.ver');

    Route::get('borrar/{objetoxx}', [
        'uses' => $controll . 'Controller@inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');

    Route::get('cafecnac', [
        'uses' => $controll . 'Controller@getFechaNacimiento',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.cafecnac');


    Route::put('borrar/{objetoxx}', [
        'uses' => $controll . 'Controller@destroy',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');

    Route::post('municipio', [
        'uses' => $controll . 'Controller@municipioajax',
    ])->name($routexxx . '.municipio');
    Route::get('estrateg', [
        'uses' => $controll . 'Controller@getEstrategia',
    ])->name($routexxx . '.estrateg');


    Route::get('nnajupse', [
        'uses' => $controll . 'Controller@getServicio',
    ])->name($routexxx . '.nnajupse');

    Route::get('buscnnaj', [
        'uses' => $controll . 'Controller@getBuscarNnaj',
    ])->name($routexxx . '.buscnnaj');

    Route::get('prueba/{prebaxxx}/{upzxxxxx}', [
        'uses' => $controll . 'Controller@prueba',
    ])->name($routexxx . '.homologx');

    Route::get('espejoxx/{opcionxx}/{desdexxx}/{hastaxxx}', [
        'uses' => $controll . 'Controller@getEspejoET',
    ])->name($routexxx . '.espejoxxx');


    include_once('web_fi_actividadestl.php');
    include_once('web_fi_autorizacion.php');
    include_once('web_fi_bienvenida.php');
    include_once('web_fi_benefici.php');
    include_once('web_fi_compfami.php');
    include_once('web_fi_consumo_spa.php');
    include_once('web_fi_contacto.php');
    include_once('web_fi_formacion.php');
    include_once('web_fi_generacion_ingreso.php');
    include_once('web_fi_justrest.php');
    include_once('web_fi_razone_archivo.php');
    include_once('web_fi_razone.php');
    include_once('web_fi_observacion.php');
    include_once('web_fi_redes_apoyo.php');
    include_once('web_fi_red_apoyo_actual.php');
    include_once('web_fi_residencia.php');
    include_once('web_fi_salud.php');
    include_once('web_fi_salud_enfermedad.php');
    include_once('web_fi_proceso_familiar.php');
    include_once('web_fi_sustancia_consumida.php');
    include_once('web_fi_situacion_especial.php');
    include_once('web_fi_vestuario.php');
    include_once('web_fi_violencia.php');
    include_once('web_fi_jr_familiar.php');
});
Route::group(['prefix' => 'homologar'], function () use ($routexxx, $controll) {
    Route::get('{temacomb}/{parametr}/{codigoxx}/{tablaxxx}', [
        'uses' => $controll . 'Controller@homologa',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.homologa');
});
