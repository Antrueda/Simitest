<?php

namespace App\Models\Acciones\Grupales\Educacion;

use App\Models\Parametro;
use Illuminate\Database\Eloquent\Model;

class GrupoAsignar extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'grupo_matricula_id', 'sis_servicio_id','sis_depen_id'
    ];
    //grupo_matricula
    public function sis_depen()
    {
        return $this->belongsTo(SisDepen::class);
    }

    public function sis_servicio()
    {
        return $this->belongsTo(SisServicio::class);
    }

    public function grupo_matricula()
    {
        return $this->belongsTo(GrupoMatricula::class, 'grupo_matricula_id');
    }


}
