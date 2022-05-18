<?php
$routexxx = 'assemodu';

Route::group(['prefix' => 'assemodu'], function () use ($routexxx) {
    require_once('web_asissema.php');
});
