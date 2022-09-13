<?php

namespace App\Models\Acciones\Individuales\salud\Medicina;


use App\Models\sistema\SisEsta;
use App\Models\User;
use App\Models\Usuario\Estusuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class AsignaMedicamentos extends Model
{
    use SoftDeletes;

    protected $table = 'asigna_medicamentos';

    protected $fillable = [
        'compuesto_id',
        'presentacion_id',
        'concentracion_id',
        'sis_esta_id',
        'estusuario_id',
        'user_crea_id',
        'user_edita_id',
    ];

    public function compuesto() {
        return $this->belongsTo(Compuesto::class);
    }

    public function concentracion() {
        return $this->belongsTo(Concentracion::class);
    }

    public function presentacion() {
        return $this->belongsTo(Presentacion::class);
    }

    public function getNombreAttribute($value)
    {
        return strtoupper($value);
    }

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




}

