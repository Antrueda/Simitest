<?php
Route::group(['prefix' => '{activida}/asistente'], function () {
	Route::delete('inctivar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgActividadController@destroyasistente',
	    'middleware' => ['permission:agactividad-borrar']
	])->name('asistente.borrar');
});