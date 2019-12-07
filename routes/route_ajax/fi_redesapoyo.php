<?php
Route::post('servicios', [
    'uses' => 'AjaxxController@servicios',
])->name('ajaxx.servicios');
