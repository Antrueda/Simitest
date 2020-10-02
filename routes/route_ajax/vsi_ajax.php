<?php
Route::get('nomasxxxx', [
    'uses' => 'AjaxxController@getNoMas',
])->name('ajaxx.nomasxxxx');
Route::get('buscempl', [
    'uses' => 'AjaxxController@getBuscatrabajo',
])->name('ajaxx.buscempl');
