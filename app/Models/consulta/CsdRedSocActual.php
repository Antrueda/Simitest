<?php

namespace App\Models\consulta;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdRedsocActual extends Model
{
    protected $fillable = [
        'csd_id', 'prm_tipo_id', 'nombre', 'servicios', 'telefono', 'direccion', 'user_crea_id', 'user_edita_id', 'sis_esta_id','prm_tipofuen_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function tipo(){
        return $this->belongsTo(Parametro::class, 'prm_tipo_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['nombre'] = strtoupper($dataxxxx['nombre']);
            $dataxxxx['servicios'] = strtoupper($dataxxxx['servicios']);
            $dataxxxx['direccion'] = strtoupper($dataxxxx['direccion']);
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = CsdRedsocActual::create($dataxxxx);
            }

            $dataxxxx['sis_tabla_id'] = 28;
            IndicadorHelper::asignaLineaBase($dataxxxx);

            return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
