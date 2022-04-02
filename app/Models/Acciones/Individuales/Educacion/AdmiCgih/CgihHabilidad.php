<?php

namespace App\Models\Acciones\Individuales\Educacion\AdmiCgih;


use App\Models\User;
use App\Models\sistema\SisEsta;
use App\Models\sistema\SisDepen;
use App\Models\Usuario\Estusuario;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdmiCgi\CgiCategoria;
use Illuminate\Database\Eloquent\SoftDeletes;


class CgihHabilidad extends Model
{
    use SoftDeletes;


    protected $table = 'cgih_habilidads';

    protected $fillable = [


        'categorias_id',
        'prm_letras_id',
        'habilidades',
        'estusuarios_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',

    ];

    public function categoria() {
        return $this->belongsTo(CgihItem::class);
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
