<?php
Route::post('campostabla', [
    'uses' => 'AjaxxController@campostabla',
])->name('ajaxx.campos');
Route::post('indicadores', [
    'uses' => 'AjaxxController@indicadores',
])->name('ajaxx.indicadores');

Route::post('preguntas', [
    'uses' => 'AjaxxController@preguntas',
])->name('ajaxx.preguntas');
Route::post('signapregunta', [
    'uses' => 'AjaxxController@signapregunta',
])->name('ajaxx.signapregunta');

Route::post('respuestas', [
    'uses' => 'AjaxxController@respuestas',
])->name('ajaxx.respuestas');
Route::post('asignarespuesta', [
    'uses' => 'AjaxxController@asignarespuesta',
])->name('ajaxx.asignarespuesta');

Route::post('lineasbase', [
    'uses' => 'AjaxxController@lineasbase',
])->name('ajaxx.lineasbase');
Route::post('asignarlineabase', [
    'uses' => 'AjaxxController@asignarlineabase',
])->name('ajaxx.asignarlineabase');