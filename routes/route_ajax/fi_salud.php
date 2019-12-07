<?php
Route::post('discapacitado', [
    'uses' => 'AjaxxController@discapacitado',
])->name('ajaxx.discapacitado');
Route::post('anticonceptivo', [
    'uses' => 'AjaxxController@anticonceptivo',
])->name('ajaxx.anticonceptivo');
Route::post('regimensalud', [
    'uses' => 'AjaxxController@regimensalud',
])->name('ajaxx.regimensalud');
Route::post('comidasdiarias', [
    'uses' => 'AjaxxController@comidasdiarias',
])->name('ajaxx.comidasdiarias');
Route::post('estagestando', [
    'uses' => 'AjaxxController@estagestando',
])->name('ajaxx.estagestando');
Route::post('estalactando', [
    'uses' => 'AjaxxController@estalactando',
])->name('ajaxx.estalactando');
Route::post('tienehijos', [
    'uses' => 'AjaxxController@tienehijos',
])->name('ajaxx.tienehijos');
Route::post('tieneprobsalud', [
    'uses' => 'AjaxxController@tieneprobsalud',
])->name('ajaxx.tieneprobsalud');
Route::post('consumedicamen', [
    'uses' => 'AjaxxController@consumedicamen',
])->name('ajaxx.consumedicamen');
Route::post('puntajesisben', [
    'uses' => 'AjaxxController@puntajesisben',
])->name('ajaxx.puntajesisben');