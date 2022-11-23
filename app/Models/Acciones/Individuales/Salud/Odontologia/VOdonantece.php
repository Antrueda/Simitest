<?php

namespace App\Models\Acciones\Individuales\Salud\Odontologia;

use App\Models\Acciones\Individuales\Salud\Medicina\Compuesto;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Diagnostico;
use Illuminate\Database\Eloquent\Model;

class VOdonantece extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'trata_id', 'alergia_id', 'sangra_id',
        'odonto_id','anemia_id','gestia_id',
        'fuma_id', 'cardio_id', 'herpes_id', 
        'encia_id', 'muerde_id', 'enfactu_id','actutxt',
        'hepati_id','tens_id','vih_id',
        'fieb_id', 'asma_id', 'diabe_id', 
        'ulcer_id', 'toma_id', 'coaler_id','limit_id',
        'apret_id','resta_id','respir_id',
        'pato_id','tuber_id',

    ];

    public function odontologia(){
        return $this->belongsTo(VOdontologia::class, 'odonto_id');
    }

    public function medicamento()
    {
      return $this->belongsToMany(Compuesto::class, 'ante_medics', 'antece_id', 'comp_id');
    }
  
    public function diagnostico()
    {
      return $this->belongsToMany(Diagnostico::class, 'ante_enfers', 'antece_id', 'diag_id');
    }
  
}
