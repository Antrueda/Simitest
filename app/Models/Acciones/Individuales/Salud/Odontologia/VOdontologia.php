<?php

namespace App\Models\Acciones\Individuales\Salud\Odontologia;

use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remision;
use App\Models\Parametro;
use App\Models\Sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class VOdontologia extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'upi_id', 'consulta_id', 'valora_id','fecha',
        'sis_nnaj_id',

    ];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function antecedentes(){
        return $this->hasOne(VOdonantece::class, 'odonto_id');
    }

    public function odontograma(){
        return $this->hasOne(VOdontograma::class, 'odonto_id');
    }

    
    public function examenes(){
        return $this->hasOne(VOdonexamen::class, 'odonto_id');
    }

    public function remision(){
        return $this->hasOne(VOdonremite::class, 'odonto_id');
    }




    public function consulta(){
        return $this->belongsTo(Parametro::class, 'consul_id');
    }
}
