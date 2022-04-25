<?php

namespace App\Models\Acciones\Individuales\Educacion\CuestionarioGustos;

use App\Models\User;
use App\Models\sistema\SisEsta;
use App\Models\sistema\SisDepen;
use App\Models\Usuario\Estusuario;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\AdminCategoria;
use Illuminate\Database\Eloquent\SoftDeletes;


class AdminHabilidad extends Model
{
    use SoftDeletes;


    protected $table = 'cgih_habilidads';

    protected $fillable = [


        'categorias_id',// cumple 
        'cursos_id',// cumple 
        'prm_letras_id',// cumple
        'nombre',// cumple
        'descripcion',// cumple 
        'estusuarios_id',//cumple 
        'sis_esta_id',// cumple 
        'user_crea_id',//cumple 
        'user_edita_id',//cumple 

    


    ];
    public function tiposActividad() {
        return $this->belongsTo(AdminCategoria::class);
    }


    public function estusuarios() {
        return $this->belongsTo(Estusuario::class);
    }

    public function sisEsta() {
        return $this->belongsTo(SisEsta::class);
    }

    public function userCrea() {
        return $this->belongsTo(User::class);
    }

    public function userEdita() {
        return $this->belongsTo(User::class);
    }

  
}
