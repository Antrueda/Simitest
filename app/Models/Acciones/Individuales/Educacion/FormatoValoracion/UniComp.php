<?php

namespace App\Models\Acciones\Individuales\Educacion\FormatoValoracion;

use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Modulo;
use Illuminate\Database\Eloquent\Model;
use App\Models\sistema\SisNnaj;

class UniComp extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','fecha',
        'valora_id', 'conocimiento','desempeno','producto','concepto',
        'modulo_id', 'unidad_id','sis_nnaj_id'
    ];



    public function valora(){
        return $this->belongsTo(ValoraComp::class, 'valora_id');
    }

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function modulo(){
        return $this->belongsTo(Modulo::class, 'modulo_id');
    }
    
    public function unidad(){
        return $this->belongsTo(Modulo::class, 'unidad_id');
    }


}
