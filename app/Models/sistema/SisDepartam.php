<?php

namespace App\Models\sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SisDepartam extends Model
{
    protected $fillable = ['s_departamento', 'sis_pai_id', 's_iso', 'simianti_id', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];
    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

    public function sis_pai()
    {
        return $this->belongsTo(SisPai::class);
    }
    public function sis_municipios()
    {
        return $this->hasMany(SisMunicipio::class);
    }

    public static function combo($idpadrex, $esajaxxx)
    {
        $comboxxx = [];
        if ($esajaxxx == false) {
            $comboxxx = ['' => 'Seleccione'];
        } else {
            $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
        }

        foreach (SisDepartam::where(function ($dataxxxx) use ($idpadrex) {

            $dataxxxx->where(function($queryxxx)use($idpadrex){
                if($idpadrex!=2){
                    $idpadrex=1;
                }
                $queryxxx->where('sis_pai_id', $idpadrex);
            });
        })
        ->orderBy('s_departamento')->get() as $registro) {
            if ($esajaxxx) {
                $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_departamento];
            } else {
                $comboxxx[$registro->id] = $registro->s_departamento;
            }
        }
        return $comboxxx;
    }
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function getComboAjaxUnoAttribute()
    {
        return [['valuexxx' => $this->id, 'optionxx' => $this->s_departamento]];
    }
}
