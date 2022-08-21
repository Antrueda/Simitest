<?php

namespace App\Models\AdmiActiAsd;

use App\Models\sistema\SisEsta;
use App\Models\User;
use App\Models\Usuario\Estusuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsdTiactividad extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'prm_lugactiv_id',
        'item',
        'descripcion',
        'estusuarios_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
    ];

    public function estusuarios() {
        return $this->belongsTo(Estusuario::class);
    }

    public function sisEsta() {
        return $this->belongsTo(SisEsta::class);
    }

    public function userCrea() {
        return $this->belongsTo(User::class);
    }

    public function userEdita() {
        return $this->belongsTo(User::class);
    }
     
    public function getNombreAttribute($value)
    {
        return strtoupper($value);
    }

    public function getDescripcionAttribute($value)
    {
        return strtoupper($value);
    }
    



    public static function combo($prm_lugar){
        $comboxxx = [];
       
        $comboxxx = ['' => 'Seleccione'];
  
        $parametr = AsdTiactividad::select(['id as valuexxx', 'nombre as optionxx'])
        ->where('sis_esta_id', 1)
        ->where('prm_lugactiv_id',$prm_lugar)
        ->orderBy('nombre', 'asc')
        ->get();
        foreach($parametr as $registro) {
                $comboxxx[$registro->valuexxx] = $registro->optionxx;
        }
        return $comboxxx;
    }
}
