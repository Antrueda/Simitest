<?php
$controll = "Indicadores\Admin\InAccionGestion";
$permisox = "inacciongestion";
$routexxx = "accigest";
Route::group(["prefix" => 'acciongestion'], function () use($controll,$permisox,$routexxx) {
	Route::get("{padrexxx}", [
		"uses" => $controll."Controller@index",
		"middleware" => ["permission:{$permisox}-leer|{$permisox}-crear|{$permisox}-editar|{$permisox}-borrar"]
	])->name($routexxx);
	Route::get("{padrexxx}/nuevo", [
		"uses" => $controll."Controller@create",
		"middleware" => ["permission:{$permisox}-crear"]
	])->name($routexxx.".nuevo");
	Route::post("nuevo", [
		"uses" => $controll."Controller@store",
		"middleware" => ["permission:{$permisox}-crear"]
	])->name($routexxx.".crear");

	Route::get("editar/{objetoxx}", [
		"uses" => $controll."Controller@edit",
		"middleware" => ["permission:{$permisox}-editar"]
	])->name($routexxx.".editar");
	Route::put("editar/{objetoxx}", [
		"uses" => $controll."Controller@update",
		"middleware" => ["permission:{$permisox}-editar"]
	])->name($routexxx.".editar");
	Route::get("ver/{objetoxx}", [
		"uses" => $controll."Controller@show",
		"middleware" => ["permission:{$permisox}-leer"]
	])->name($routexxx.".ver");
	Route::post("porcenta", [
		"uses" => $controll."Controller@getPorcenta",
		"middleware" => ["permission:{$permisox}-crear"]
	])->name($routexxx.".porcenta");
});




