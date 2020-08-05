<?php
$routexxx = 'vsinnajs';
$controll = 'Sicosocial\VsiNnaj';
Route::group(['prefix' => 'nnajsvsi'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'Controller@index',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx);

    Route::get('nnajs', [
        'uses' => $controll . 'Controller@getNnajs',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.nnajsxxx');
    $routexxx = 'vsixxxxx';
    $controll = 'Sicosocial\Vsi';
    Route::group(['prefix' => '{padrexxx}/vsi'], function () use ($routexxx, $controll) {
        Route::get('', [
            'uses' => $controll . 'Controller@index',
            'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
        ])->name($routexxx);
        Route::get('vsis', [
            'uses' => $controll . 'Controller@getVsi',
            'middleware' => ['permission:' . $routexxx . '-leer']
        ])->name($routexxx . '.vsisxxxx');
        Route::get('nuevo', [
            'uses' => $controll.'Controller@create',
            'middleware' => ['permission:'.$routexxx.'-crear']
        ])->name($routexxx.'.nuevo');
        Route::post('crear', [
            'uses' => $controll.'Controller@store',
            'middleware' => ['permission:'.$routexxx.'-crear']
        ])->name($routexxx.'.crear');
    });
});
include_once('web_vsi.php');
include_once('web_VSI_basico.php');
include_once('web_VSI_bienvenida.php');
include_once('web_VSI_violencia.php');
include_once('web_VSI_educacion.php');
include_once('web_VSI_dinFamiliar.php');
include_once('web_VSI_relfamiliar.php');
include_once('web_VSI_relsocial.php');
include_once('web_VSI_genIngresos.php');
include_once('web_VSI_salud.php');
include_once('web_VSI_actemocional.php');
include_once('web_VSI_estemocional.php');
include_once('web_VSI_presabusosexual.php');
include_once('web_VSI_situacionespecial.php');
include_once('web_VSI_redesapoyo.php');
include_once('web_VSI_antecedente.php');
include_once('web_VSI_consumo.php');
include_once('web_VSI_factor.php');
include_once('web_VSI_meta.php');
include_once('web_VSI_areaajuste.php');
include_once('web_VSI_concepto.php');
include_once('web_VSI_consentimiento.php');
