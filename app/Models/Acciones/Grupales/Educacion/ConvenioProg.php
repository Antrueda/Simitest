<?php

namespace App\Models\Acciones\Grupales\Educacion;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConvenioProg extends Model
{
    use SoftDeletes;

    protected $table = 'convenio_progs';

    protected $fillable = [
        'id', 'nombre',
        'user_crea_id', 'user_edita_id', 'sis_esta_id' 
    ];

    public static function combo(){
        $comboxxx = [];
       
        $comboxxx = ['' => 'Seleccione'];
  
        $parametr = ConvenioProg::select(['id as valuexxx', 'nombre as optionxx'])
        ->where('sis_esta_id', 1)
        ->orderBy('nombre', 'asc')
        ->get();
        foreach($parametr as $registro) {
                $comboxxx[$registro->valuexxx] = $registro->optionxx;
        }
        return $comboxxx;
    }
}
