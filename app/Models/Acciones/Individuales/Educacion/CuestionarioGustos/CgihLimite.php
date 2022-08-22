<?php

namespace App\Models\AdmiActiAsd;

use App\Models\sistema\SisEsta;
use App\Models\User;
use App\Models\Usuario\Estusuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

<<<<<<< HEAD:app/Models/AdmiActiAsd/AsdDependencia.php
class AsdDependencia extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'sis_depen_id',
        'sis_servicio_id',
        'condicion',
=======
class CgihLimite extends Model
{
    use SoftDeletes;

    protected $table = 'cgih_limites';

    protected $fillable = [
        'limite',
        'descripcion',
        'sis_esta_id',
>>>>>>> master:app/Models/Acciones/Individuales/Educacion/CuestionarioGustos/CgihLimite.php
        'estusuarios_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',

        
    ];

    public function getDescripcionAttribute($value)
    {
        return strtoupper($value);
    }

    public function estusuarios() {
        return $this->belongsTo(Estusuario::class);
    }

    public function sisEsta() {
        return $this->belongsTo(SisEsta::class);
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

<<<<<<< HEAD:app/Models/AdmiActiAsd/AsdDependencia.php


=======
>>>>>>> master:app/Models/Acciones/Individuales/Educacion/CuestionarioGustos/CgihLimite.php
}
