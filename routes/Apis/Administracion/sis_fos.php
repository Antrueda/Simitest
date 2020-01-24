<?php

use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosTse;
use Illuminate\Http\Request;


Route::get('fos/tiposeg', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	$dataxxxx = $request->all();
	$activoxx = $dataxxxx['botonesx'];
	return datatables()
		->eloquent(
			FosTse::select(
				[
					'fos_tses.id',
					'fos_tses.nombre',
					'areas.nombre as s_area',
					'fos_tses.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('areas', 'fos_tses.area_id', '=', 'areas.id')
				->join('sis_estas', 'fos_tses.sis_esta_id', '=', 'sis_estas.id')

		)
		->addColumn('btns', $dataxxxx['botonesx'])
		->addColumn('sis_esta_id', 'layouts.components.botones.estadoxx')
		->rawColumns(['btns', 'sis_esta_id'])

		->toJson();
});

Route::get('fos/subtipo', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	$dataxxxx = $request->all();
	return datatables()
		->eloquent(
			FosStse::select(
				[
					'fos_stses.id',
					'fos_stses.nombre',
					'areas.nombre as s_area',
					'fos_tses.nombre as s_seguimiento',
					'fos_stses.sis_esta_id',
					'sis_estas.s_estado'
				]
			)
				->join('fos_tses', 'fos_stses.fos_tse_id', '=', 'fos_tses.id')
				->join('areas', 'fos_tses.area_id', '=', 'areas.id')
				->join('sis_estas', 'fos_tses.sis_esta_id', '=', 'sis_estas.id')

		)
		->addColumn('btns', $dataxxxx['botonesx'])
		->addColumn('sis_esta_id', 'layouts.components.botones.estadoxx')
		->rawColumns(['btns', 'sis_esta_id'])
		->toJson();
});
