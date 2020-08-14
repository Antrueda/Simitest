<?php

namespace App\Models\Salud\Mitigacion;

use App\Models\Parametro;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisNnaj;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Vspa extends Model{

    protected $table = 'mit_vspa';

    protected $fillable = [
        'sis_nnaj_id',          'user_crea_id',     'user_edita_id',        'sis_esta_id',
        'prm_upi_id',           'fecha',            'prm_valoracion_id',    'prm_icbf_id',          
        'previos',              'prm_gestante_id',
        'semanas_gestacion',    'prm_escolar_id',   'prm_ingresos_id',      'prm_modalidad_id',
        'prm_acude_id',         'prm_sitio_id',     'prm_probado_id',       'prm_cantidad_id',  
        'prm_inyectadas_id',    'edad',             'prm_dificultad_id',    'descripcion',          
        'prm_obtiene_id',       'donde', 'precio',  'cantidad',             'prm_medida_id',
        'prm_frecuencia_id',    'prm_costumbre_id', 'porque', 'sustancia',  'prm_comparte_id',
        'porque_comparte',      'prm_prueba_id',    'porque_prueba',        'observaciones',
        'obs_generales',        'obs_generales_dos','user_doc1_id',
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function upi(){
        return $this->belongsTo(SisDepen::class, 'prm_upi_id');
    }

    public function valoracion(){
        return $this->belongsTo(Parametro::class, 'prm_valoracion_id');
    }

    public function icbf(){
        return $this->belongsTo(Parametro::class, 'prm_icbf_id');
    }

    public function gestante(){
        return $this->belongsTo(Parametro::class, 'prm_gestante_id');
    }

    public function escolar(){
        return $this->belongsTo(Parametro::class, 'prm_escolar_id');
    }

    public function ingresos(){
        return $this->belongsTo(Parametro::class, 'prm_ingresos_id');
    }

    public function modalidad(){
        return $this->belongsTo(Parametro::class, 'prm_modalidad_id');
    }

    public function acude(){
        return $this->belongsTo(Parametro::class, 'prm_acude_id');
    }

    public function sitio(){
        return $this->belongsTo(Parametro::class, 'prm_sitio_id');
    }

    public function probado(){
        return $this->belongsTo(Parametro::class, 'prm_probado_id');
    }

    public function cantidad(){
        return $this->belongsTo(Parametro::class, 'prm_cantidad_id');
    }

    public function inyectadas(){
        return $this->belongsTo(Parametro::class, 'prm_inyectadas_id');
    }

    public function dificultad(){
        return $this->belongsTo(Parametro::class, 'prm_dificultad_id');
    }

    public function obtiene(){
        return $this->belongsTo(Parametro::class, 'prm_obtiene_id');
    }

    public function medida(){
        return $this->belongsTo(Parametro::class, 'prm_medida_id');
    }

    public function frecuencia(){
        return $this->belongsTo(Parametro::class, 'prm_frecuencia_id');
    }

    public function costumbre(){
        return $this->belongsTo(Parametro::class, 'prm_costumbre_id');
    }

    public function comparte(){
        return $this->belongsTo(Parametro::class, 'prm_comparte_id');
    }

    public function prueba(){
        return $this->belongsTo(Parametro::class, 'prm_prueba_id');
    }

    public function firma1(){
        return $this->belongsTo(User::class, 'user_doc1_id');
    }

    public function vspaTabla(){
        return $this->hasOne(VspaTabla::class, 'mit_vspa_id');
    }

    public function vspaTablaDos(){
        return $this->hasOne(VspaTablaDos::class, 'mit_vspa_id');
    }

    public function vspaTablaTres(){
        return $this->hasOne(VspaTablaTres::class, 'mit_vspa_id');
    }

    public function vspaTablaCuatro(){
        return $this->hasOne(VspaTablaCuatro::class, 'mit_vspa_id');
    }
}
