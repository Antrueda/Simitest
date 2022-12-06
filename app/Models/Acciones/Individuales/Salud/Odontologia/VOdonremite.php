<?php

namespace App\Models\Acciones\Individuales\Salud\Odontologia;

use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remision;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class VOdonremite extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'user_id', 'remigen_id', 'remisal_id','remiint_id',
        'odonto_id','observacion','evolucion'

    ];

    public function odontologia(){
        return $this->belongsTo(VOdontologia::class, 'odonto_id');
    }

    public function remision(){
        return $this->belongsTo(Remision::class, 'remisal_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function modifico(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }



}
