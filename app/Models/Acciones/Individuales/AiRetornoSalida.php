<?php

namespace App\Models\Acciones\Individuales;

use Illuminate\Database\Eloquent\Model;

use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisDepen;
use App\Models\Parametro;

class AiRetornoSalida extends Model{
    protected $fillable = [
        'sis_nnaj_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
        'prm_upi_id', 'fecha', 'hora_retorno', 'prm_hor_ret_id',
        'descripcion', 'observaciones', 'nombres_retorna', 'prm_doc_id',
        'doc_retorna', 'prm_parentezco_id', 'responsable', 'user_doc1_id'
    ];
    
    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function upis(){
        return $this->belongsTo(SisDepen::class, 'prm_upi_id');
    }

    public function horaRetorno(){
        return $this->belongsTo(Parametro::class, 'prm_hor_ret_id');
    }

    public function documento(){
        return $this->belongsTo(Parametro::class, 'prm_doc_id');
    }

    public function parentezco(){
        return $this->belongsTo(Parametro::class, 'prm_parentezco_id');
    }

    public function condiciones(){
        return $this->belongsToMany(Parametro::class,'ai_retorno_salidas_condicion', 'retorno_id', 'parametro_id')->withPivot('valor_id');
    }
}