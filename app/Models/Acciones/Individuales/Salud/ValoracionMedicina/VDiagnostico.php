<?php

namespace App\Models\Acciones\Individuales\Salud\ValoracionMedicina;

use Illuminate\Database\Eloquent\Model;

class VDiagnostico extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'vmg_id', 'diag_id', 'codigo','concepto','esta_id'

    ];

    public function medicina(){
        return $this->belongsTo(Vsmedicina::class, 'vmg_id');
    }

    public function diagnostico(){
        return $this->belongsTo(Diagnostico::class, 'diag_id');
    }



}
