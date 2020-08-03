<?php

use App\Helpers\Usuarios\UsuarioApi;
use Illuminate\Http\Request;

Route::get('usu/usuarios', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return UsuarioApi::getUsuarios($request);
});

Route::get('sis/areauser', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return UsuarioApi::getUsuarioArea($request);
});

Route::get('usu/dependencias', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return UsuarioApi::getDependenciaUser($request);
});

Route::get('usu/roles', function (Request $request) {
    if (!$request->ajax()) return redirect('/');
    return UsuarioApi::getUsuarioRoles($request);
});



