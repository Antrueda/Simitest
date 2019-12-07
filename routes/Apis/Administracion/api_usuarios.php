<?php

use App\Models\User;
use Illuminate\Http\Request;

Route::get('usu/usuarios', function (Request $request) { 
	if (!$request->ajax()) return redirect('/');
	return datatables()
		->eloquent(User::select(
			['id',
			's_primer_nombre',
			's_segundo_nombre',
			's_primer_apellido',
			's_segundo_apellido',
			'i_prm_estado_id'
		]))
		->addColumn('btns', 'administracion/usuario/botones/botonesapi')
		->rawColumns(['btns'])
		->toJson();
});