<?php

namespace App\Models\fichaIngreso;

use App\Models\Parametro;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiAccione extends Model
{
    protected $fillable = [
        'fi_actividadestl_id',
        'prm_accione_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    public static function getAcciones($dataxxxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx) {
            $datosxxx = [
                'fi_actividadestl_id' => $dataxxxx['modeloxx']->id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'sis_esta_id' => 1,
            ];
            FiAccione::where('fi_actividadestl_id', $dataxxxx['modeloxx']->id)->delete();

            foreach ($dataxxxx['dataxxxx']['prm_accione_id'] as $diagener) {
                $datosxxx['prm_accione_id'] = $diagener;
                FiAccione::create($datosxxx);
            }

            return $dataxxxx['modeloxx'];
        }, 5);
    }

    public function prm_accione()
    {
        return $this->belongsTo(Parametro::class, 'prm_accione_id');
    }
}
