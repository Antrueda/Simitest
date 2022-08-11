<?php

namespace App\Models\sistema;

use Illuminate\Database\Eloquent\Model;

class SisTabla extends Model
{
    protected $fillable = ['sis_docfuen_id' , 's_tabla' ,     's_descripcion','sis_esta_id','user_crea_id','user_edita_id',];
    public function sisDocfuen()
    {
        return $this->belongsTo(SisDocfuen::class);
    }
    
    public function sisTcampos()
    {
        return $this->hasMany(SisTcampo::class);
    }

    public static function combo($padrexxx, $cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }
        $tablaxxx = SisTabla::get();
        if ($padrexxx != '') {
            $tablaxxx = SisTabla::where('id', $padrexxx)->first()->sis_campo_tablas;
        }
        foreach ($tablaxxx as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_descripcion];
            } else {
                $comboxxx[$registro->id] =  $registro->s_descripcion;
            }
        }
        return $comboxxx;
    }

    public static function comboTabla($padrexxx, $cabecera, $ajaxxxxx)
    {
        $comboxxx = [];
        if ($cabecera) {
            $comboxxx = ['' => 'Seleccione'];
        }

            $tablaxxx = SisTabla::where('sis_docfuen_id', $padrexxx)->get();

        foreach ($tablaxxx as $registro) {
            if ($ajaxxxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_descripcion];
            } else {
                $comboxxx[$registro->id] =  $registro->s_descripcion;
            }
        }
        return $comboxxx;
    }
}
