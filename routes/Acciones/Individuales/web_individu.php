<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'individ'], function () {
    require_once('Educacion/web_educacio.php');
    require_once('Vsmedmac/web_vsmedmac.php');
});
