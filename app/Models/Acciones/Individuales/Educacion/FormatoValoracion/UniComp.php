<?php

namespace App\Models\Acciones\Individuales\Educacion\FormatoValoracion;

use Illuminate\Database\Eloquent\Model;

class UniComp extends Model
{
    protected $fillable = [
        'sis_nnaj_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id','fecha',
        'valora_id', 'conocimiento','desempeno','producto','concepto',
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function valora(){
        return $this->belongsTo(ValoraComp::class, 'valora_id');
    }


}
