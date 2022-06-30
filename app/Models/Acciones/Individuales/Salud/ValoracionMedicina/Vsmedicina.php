<?php

namespace App\Models\Acciones\Individuales\Salud\ValoracionMedicina;

use App\Models\Parametro;
use App\Models\sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class Vsmedicina extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'upi_id', 'upiorigen_id', 'afili_id','fecha',
        'consul_id', 'entidad_id', 'poblaci_id',
        'remigen_id', 'remisal_id', 'remiint_id',
        'remiesp_id', 'certifi_id', 'remico_id',
        'motivoval', 'recomenda', 'sis_nnaj_id',
        'user_id','modal_id',

    ];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function remision(){
        return $this->belongsTo(Remision::class, 'remiint_id');
    }

    public function remiespecial(){
        return $this->belongsTo(Remiespecial::class, 'remiesp_id');
    }

    public function consulta(){
        return $this->belongsTo(Parametro::class, 'consul_id');
    }

    
}
