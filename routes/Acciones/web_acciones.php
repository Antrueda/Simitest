<?php
require_once('Grupales/web_grupales.php');

Route::group(['prefix' => 'ai'], function () {
  Route::get('', [
    'uses' => 'Acciones\Individuales\AIController@index',
    'middleware' => ['permission:aiindex-leer|aiindex-crear|aiindex-editar|aiindex-borrar']
  ])->name('ai');
  Route::get('{id}', [
    'uses' => 'Acciones\Individuales\AIController@show',
    'middleware' => ['permission:aiindex-leer|aiindex-crear|aiindex-editar|aibasico-borrar']
  ])->name('ai.ver');
  //require_once('Individuales/web_salidamayores.php');
  require_once('Individuales/web_evasion.php');
  require_once('Individuales/web_salidamenores.php');
  require_once('Individuales/web_retornosalida.php');
  require_once('Individuales/Mitigacion/web_vma.php');
  require_once('Individuales/Mitigacion/web_vspa.php');
});