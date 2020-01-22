<?php

namespace App\Models\sistema;

use App\Models\Indicadores\Area;
use App\Models\Parametro;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SisDependencia extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'i_prm_cvital_id',
        'i_prm_tdependen_id',
        'sis_dependencia_id',
        'i_prm_sexo_id',
        's_direccion',
        'sis_departamento_id',
        'sis_municipio_id',
        'sis_localidad_id',
        'sis_barrio_id',
        's_telefono',
        's_correo',
        'i_tiempo',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        's_observacion'
    ];
    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function transaccion($dataxxxx, $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = SisDependencia::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }


    public static function combo($cabecera, $ajaxxxxx)
    {
        {
            $comboxxx = [];
            if ($cabecera) {
                if($ajaxxxxx){
                    $comboxxx = ['valuexxx'=>'','optionxx' => 'Seleccione'];
                }else{
                    $comboxxx = ['' => 'Seleccione'];
                }             
            }
            foreach (SisDependencia::get() as $registro) {
                if ($ajaxxxxx) {
                    $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
                } else {
                    $comboxxx[$registro->id] = $registro->nombre;
                }
            }
            return $comboxxx;
        }
    }

    public function sis_servicios()
    {
        {
            return $this->belongsToMany(SisServicio::class);
        }
    }

    public function users()
    {
        {
            return $this->belongsToMany(User::class);
        }
    }

    public function sis_barrio(){
        return $this->belongsTo(SisBarrio::class);
    }
}
