<?php
Route::post('vinviolencia', [
    'uses' => 'AjaxxController@vinviolencia',
])->name('ajaxx.vinviolencia');
Route::post('rieviolencia', [
    'uses' => 'AjaxxController@rieviolencia',
])->name('ajaxx.rieviolencia');
Route::post('ocultapard', [
    'uses' => 'AjaxxController@ocultapard',
])->name('ajaxx.ocultapard');
Route::post('ocultasrpa', [
    'uses' => 'AjaxxController@ocultasrpa',
])->name('ajaxx.ocultasrpa');
Route::post('ocultaspoa', [
    'uses' => 'AjaxxController@ocultaspoa',
])->name('ajaxx.ocultaspoa');