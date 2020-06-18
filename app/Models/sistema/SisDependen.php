<?php

namespace App\Models\sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SisDependen extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'i_prm_cvital_id',
        'i_prm_tdependen_id',
        'sis_dependen_id',
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
                $objetoxx = SisDependen::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }


    public static function combo($cabecera, $ajaxxxxx)
    {

        $comboxxx = [];
        if ($cabecera) {
            if ($ajaxxxxx) {
                $comboxxx = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        foreach (SisDependen::get() as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
            } else {
                $comboxxx[$registro->id] = $registro->nombre;
            }
        }
        return $comboxxx;
    }

    public function sis_servicios()
    {

        return $this->belongsToMany(SisServicio::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function sis_barrio()
    {
        return $this->belongsTo(SisBarrio::class);
    }

    public function sis_eslugs(){
        return $this->belongsToMany(SisEslug::class)->withTimestamps();
    }

    public static function getLugares($dataxxxx){
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['esajaxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        $dependen=SisDependen::select(['sis_eslugs.id as valuexxx','sis_eslugs.s_espaluga as optionxx'])
        ->join('sis_dependen_sis_eslug','sis_dependens.id','=','sis_dependen_sis_eslug.sis_dependen_id')
        ->join('sis_eslugs','sis_dependen_sis_eslug.sis_eslug_id','=','sis_eslugs.id')
        ->where('sis_dependens.id',$dataxxxx['padrexxx'])
        ->get();
        foreach ($dependen as $registro) {
            if ($dataxxxx['esajaxxx']) {
                $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->optionxx];
            } else {
                $comboxxx[$registro->valuexxx] = $registro->optionxx;
            }
        }
        return $comboxxx;
    }
}
