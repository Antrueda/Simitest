<?php
Route::get('asistente', [
    'uses' => 'AjaxxController@asistente',
])->name('ajaxx.asistente');

Route::get('responsable', [
    'uses' => 'AjaxxController@responsable',
])->name('ajaxx.responsable');

Route::get('relacion', [
    'uses' => 'AjaxxController@relacion',
])->name('ajaxx.relacion');

Route::get('asigregistro', [
    'uses' => 'AjaxxController@asigregistro',
])->name('ajaxx.asigregistro');
