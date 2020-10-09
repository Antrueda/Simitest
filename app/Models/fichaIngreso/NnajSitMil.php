<?php

namespace App\Models\fichaIngreso;

use App\Models\Sistema\SisDocfuen;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NnajSitMil extends Model
{
    protected $fillable = [
        'fi_datos_basico_id',
        'prm_situacion_militar_id',
        'prm_clase_libreta_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        'sis_docfuen_id',
    ];
    public function fi_datos_basico()
    {
        return $this->belongsTo(FiDatosBasico::class);
    }
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class, 'user_edita_id');
    }
    /**
     * almacenar datos de situación militar
     *
     * @param array $dataxxxx
     * @return $objetoxx
     */
    public static function getTransaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;

            if (isset($dataxxxx['objetoxx']->nnaj_sit_mil->id)) {
                $dataxxxx['objetoxx']->nnaj_sit_mil->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $dataxxxx['modeloxx'] = NnajSitMil::create($dataxxxx);
            }
            return $dataxxxx;
        }, 5);
        return $objetoxx;
    }

    public function sis_docfuen()
    {
        return $this->belongsTo(SisDocfuen::class);
    }

}
