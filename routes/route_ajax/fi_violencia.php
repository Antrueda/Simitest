<?php
Route::post('condespecial', [
    'uses' => 'AjaxxController@condespecial',
])->name('ajaxx.condespecial');
Route::post('ocultambitos', [
    'uses' => 'AjaxxController@ocultambitos',
])->name('ajaxx.ocultambitos');
Route::get('getDepartamentos', [
    'uses' => 'AjaxxController@getDepartamentos',
])->name('ajaxx.getDepartamentos');
Route::get('municipios', [
    'uses' => 'AjaxxController@municipios',
])->name('ajaxx.municipios');

Route::get('getmunicipios', [
    'uses' => 'AjaxxController@getMunicipios',
])->name('ajaxx.gmunicipios');