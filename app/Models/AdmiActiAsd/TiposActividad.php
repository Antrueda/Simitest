<?php

namespace App\Models\AdmiActiAsd;

use App\Models\sistema\SisEsta;
use App\Models\User;
use App\Models\Usuario\Estusuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TiposActividad extends Model
{
    use SoftDeletes;

    protected $table = 'asd_tiactividad';

    protected $fillable = [
        'nombre',
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



    public static function combo(){
        $comboxxx = [];
       
        $comboxxx = ['' => 'Seleccione'];
  
        $parametr = TiposActividad::select(['id as valuexxx', 'nombre as optionxx'])
        ->where('sis_esta_id', 1)
        ->orderBy('nombre', 'asc')
        ->get();
        foreach($parametr as $registro) {
                $comboxxx[$registro->valuexxx] = $registro->optionxx;
        }
        return $comboxxx;
    }
}
