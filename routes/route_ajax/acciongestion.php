<?php
Route::get('acciongestion', [
    'uses' => 'AjaxxController@acciongestion',
])->name('ajaxx.acciongestion');
Route::get('porcentaje', [
    'uses' => 'AjaxxController@porcentaje',
])->name('ajaxx.porcentaje');