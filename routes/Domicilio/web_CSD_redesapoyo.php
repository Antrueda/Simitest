<?php
$routexxx = 'csdredesapoyo';
$controll = 'Domicilio\CsdRedesApoyo';
  Route::group(['prefix' => '{padrexxx}/redesapoyo'], function () use($routexxx,$controll){
      Route::get('', [
      'uses' => $controll.'Controller@index',
      'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
      ])->name($routexxx);
      Route::get('antecede', [
          'uses' => $controll.'Controller@getAntecedentes',
          'middleware' => ['permission:'.$routexxx.'-leer']
      ])->name($routexxx.'.antecede');
  
      Route::get('nuevo', [
      'uses' => $controll.'Controller@create',
      'middleware' => ['permission:'.$routexxx.'-crear']
    ])->name($routexxx.'.nuevo');
  
    Route::post('crear', [
      'uses' => $controll.'Controller@store',
      'middleware' => ['permission:'.$routexxx.'-crear']
    ])->name($routexxx.'.crear');
  
    Route::get('editar/{modeloxx}', [
      'uses' => $controll.'Controller@edit',
      'middleware' => ['permission:'.$routexxx.'-editar']
    ])->name($routexxx.'.editar');
  
    Route::put('editar/{modeloxx}', [
      'uses' => $controll.'Controller@update',
      'middleware' => ['permission:'.$routexxx.'-editar']
    ])->name($routexxx.'.editar');
  
    Route::get('ver/{modeloxx}', [
      'uses' => $controll.'Controller@show',
      'middleware' => ['permission:'.$routexxx.'-leer']
    ])->name($routexxx.'.ver');
  
    Route::get('borrar/{modeloxx}', [
        'uses' => $controll.'Controller@inactivate',
        'middleware' => ['permission:'.$routexxx.'-borrar']
      ])->name($routexxx.'.borrar');
  
      Route::put('borrar/{modeloxx}', [
      'uses' => $controll . 'Controller@destroy',
      'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');
  });

