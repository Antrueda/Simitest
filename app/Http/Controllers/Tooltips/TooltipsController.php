<?php

namespace App\Http\Controllers\Tooltips;

use App\Http\Controllers\Controller;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosTse;
use Illuminate\Http\Request;

class TooltipsController extends Controller
{

    public function getTooltip(Request $request)
    {
        if ($request->ajax()) {
            $respuest = ['tooltipx' => ''];
            switch ($request->casosxxx) {
                case 'fos_tse_id':
                    $fosstsex = FosStse::where('id', $request->idxxxxxx)->first();
                    $respuest = ['tooltipx' => $fosstsex->descripcion];
                    break;
                case 'fos_stse_id':
                    $fosstsex = FosTse::where('id', $request->idxxxxxx)->first();
                    $respuest = ['tooltipx' => $fosstsex->descripcion];
                    break;
            }
            return response()->json($respuest);
        }
    }
}
