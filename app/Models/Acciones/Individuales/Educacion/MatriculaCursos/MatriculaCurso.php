<?php

namespace App\Models\Acciones\Individuales\Educacion\MatriculaCursos;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class MatriculaCurso extends Model
{
    protected $fillable = [
        'sis_nnaj_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id','fecha',
        'doc_autorizado', 'telefono','ape1_autorizado','ape2_autorizado','celular','celular2',
        'nom1_autorizado', 'nom2_autorizado','prm_doc_id', 'prm_parentezco_id',
        'prm_ocupacion_id','prm_grupo','prm_curso', 'curso_id','user_id',
    ];


    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function grupo(){
        return $this->belongsTo(Parametro::class, 'prm_grupo');
    }

    public function calcularEdad($fecha)
    {
        return Carbon::parse($fecha)->age;
    }
}
