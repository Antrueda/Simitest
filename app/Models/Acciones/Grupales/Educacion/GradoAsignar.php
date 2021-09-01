<?php

namespace App\Models\Acciones\Grupales\Educacion;

use Illuminate\Database\Eloquent\Model;

class GradoAsignar extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'grado_matricula', 'sis_servicio_id','sis_depen_id'
    ];

    public function sis_depen()
    {
        return $this->belongsTo(SisDepen::class);
    }

    public function sis_servicio()
    {
        return $this->belongsTo(SisServicio::class);
    }

    public function grado_matricula()
    {
        return $this->belongsTo(Parametro::class, 'grado_matricula');
    }
}
