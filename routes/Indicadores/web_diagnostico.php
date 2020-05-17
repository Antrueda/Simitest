<?php
$controll = "Indicadores\InValorInicial";
$permisox = "indiagnostico";
$routexxx = "valoinic";
Route::group(["prefix" => "valorinicial"], function () use($controll,$permisox,$routexxx) {
	Route::get("", [
		"uses" => $controll."Controller@index",
		"middleware" => ["permission:{$permisox}-leer|{$permisox}-crear|{$permisox}-editar|{$permisox}-borrar"]
	])->name($routexxx);
	Route::get("nuevo", [
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


	Route::get("nivel", [
		"uses" => $controll."Controller@nivel",
	])->name($routexxx.".nivel");
	Route::delete("ver/{objetoxx}", [
		"uses" => $controll."Controller@destroy",
		"middleware" => ["permission:{$permisox}-borrar"]
	])->name($routexxx.".borrar");
		Route::get("{padrexxx}/bases", [
			"uses" => $controll."Controller@bases",
			"middleware" => ["permission:{$permisox}-leer|{$permisox}-crear|{$permisox}-editar|{$permisox}-borrar"]
		])->name($routexxx.".nnajbases");

});
