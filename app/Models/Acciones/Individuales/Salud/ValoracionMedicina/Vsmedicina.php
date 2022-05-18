<?php

namespace App\Models\Acciones\Individuales\Salud\ValoracionMedicina;

use Illuminate\Database\Eloquent\Model;

class Vsmedicina extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'nombre', 'codigo', 'estusuario_id',
    ];

    public function estusuario(){
        return $this->belongsTo(Estusuario::class, 'estusuario_id');
    }

    
}
