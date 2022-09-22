<?php

namespace App\Models\Acciones\Individuales\Salud\Vacunas;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Acciones\Individuales\Salud\Vacunas\TipoVacuna;

class Vacuna extends Model
{
    use SoftDeletes;

    protected $table = 'vacunas';


    protected $fillable = [
        'tipo_vacunas_id',// cumple 
        'nombre',// cumple
        'descripcion',// cumple 
        'estusuarios_id',//cumple 
        'sis_esta_id',// cumple 
        'user_crea_id',//cumple 
        'user_edita_id',//cumple 
    ];
    
    public function getNombreAttribute($value)
    {
        return strtoupper($value);
    }

    public function getDescripcionAttribute($value)
    {
        return strtoupper($value);
    }

    public function tiposActividad() {
        return $this->belongsTo(TipoVacuna::class);
    }


    
    public function tipoVacuna() {
        return $this->belongsTo(TipoVacuna::class);
    }


    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function curso() {
        return $this->belongsTo(Curso::class,'cursos_id');
    }
}
