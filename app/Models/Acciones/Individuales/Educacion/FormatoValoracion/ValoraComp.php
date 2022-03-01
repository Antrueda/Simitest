<?php

namespace App\Models\Acciones\Individuales\Educacion\FormatoValoracion;

use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;

class ValoraComp extends Model
{
    protected $fillable = [
        'sis_nnaj_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id','fecha',
        'unidades', 'cursos_id','user_id',
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function cursos(){
        return $this->belongsTo(MatriculaCurso::class, 'cursos_id');
    }

    public function competencias(){
        return $this->hasMany(UniComp::class, 'valora_id');
    }
}
