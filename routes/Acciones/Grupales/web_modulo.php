<?php
$controll = 'Acciones\Grupales\Modulo';
$routxxxx = 'taccform';
Route::group(['prefix' => 'modulogrupales'], function () use($controll, $routxxxx) {
    Route::get('', [
        'uses' => $controll . 'Controller@index',
        'middleware' => ['permission:' . $routxxxx . '-modulo']
    ])->name($routxxxx);
});
