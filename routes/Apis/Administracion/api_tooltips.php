<?php

use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosTse;
use Illuminate\Http\Request;

Route::get('tooltip/tooltip', function (Request $request) {
	if (!$request->ajax()) return redirect('/');
	$respuest = ['tooltipx' => ''];
	if ($request->idxxxxxx > 0) {
		switch ($request->casosxxx) {
			case 'fos_stse_id':
				$fosstsex = FosStse::where('id', $request->idxxxxxx)->first();
				$respuest = ['tooltipx' => $fosstsex->descripcion];
				break;
			case 'fos_tse_id':
				$fostsexx = FosTse::where('id', $request->idxxxxxx)->first();
				$respuest = ['tooltipx' => $fostsexx->descripcion];
				break;
		}
	}
	//ddd($respuest);
	return response()->json($respuest);
});
