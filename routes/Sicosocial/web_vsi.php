<?php
Route::group(['prefix' => 'vsi'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiController@index', 
		'middleware' => ['permission:vsidatobasico-leer|vsidatobasico-crear|vsidatobasico-editar|vsidatobasico-borrar']
	])->name('vsi');
	Route::get('{id}', [
		'uses' => 'Sicosocial\VsiController@show',
		'middleware' => ['permission:vsidatobasico-leer|vsidatobasico-crear|vsidatobasico-editar|vsidatobasico-borrar']
	])->name('VSI.ver');
    Route::get('nnaj/{id}', [
        'uses' => 'Sicosocial\VsiController@nnaj',
        'middleware' => ['permission:vsidatobasico-leer|vsidatobasico-crear|vsidatobasico-editar|vsidatobasico-borrar']
    ])->name('VSI.nnaj');
    Route::get('nueva/{id}', [
        'uses' => 'Sicosocial\VsiController@create',
        'middleware' => ['permission:vsidatobasico-crear']
    ])->name('VSI.nueva');
    Route::post('nueva/{id}', [
        'uses' => 'Sicosocial\VsiController@store',
        'middleware' => ['permission:vsidatobasico-crear']
    ]);
    Route::get('editar/{id}/{id0}', [
        'uses' => 'Sicosocial\VsiController@edit',
        'middleware' => ['permission:vsidatobasico-editar']
    ])->name('VSI.editar');
    Route::put('editar/{id}/{id0}', [
        'uses' => 'Sicosocial\VsiController@update',
        'middleware' => ['permission:vsidatobasico-editar']
    ]);
    Route::get('bloquear/{id}/{id0}', [
        'uses' => 'Sicosocial\VsiController@destroy',
        'middleware' => ['permission:vsidatobasico-borrar']
    ])->name('VSI.bloquear');
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
});