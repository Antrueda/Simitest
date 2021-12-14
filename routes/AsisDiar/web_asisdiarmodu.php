<?php
$routexxx = 'asdimodu';
$controll = 'AsisDiar\AsisDiarModuloController@';
Route::group(['prefix' => 'moduloae'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx);

    require_once('web_asisdiar.php');
});
