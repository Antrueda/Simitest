<?php
Route::post('trabajogenera', [
    'uses' => 'AjaxxController@trabajogenera',
])->name('ajaxx.trabajogenera');
Route::post('jornadagenera', [
    'uses' => 'AjaxxController@jornadagenera',
])->name('ajaxx.jornadagenera');
