<?php
Route::group(['prefix' => 'educacio'], function () {
    require_once('Administ/web_administ.php');
    require_once('Usuariox/web_usuariox.php');
});
