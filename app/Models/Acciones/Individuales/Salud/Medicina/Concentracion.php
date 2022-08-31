<?php

namespace App\Models\Acciones\Individuales\salud\Medicina;


use App\Models\sistema\SisEsta;
use App\Models\User;
use App\Models\Usuario\Estusuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Concentracion extends Model
{
  
    use SoftDeletes;

    protected $table = 'concentracions';

    protected $fillable = [
        'nombre',
        'descripcion',
        'sis_esta_id',
        'estusuario_id',
        'user_crea_id',
        'user_edita_id',
    ];

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
