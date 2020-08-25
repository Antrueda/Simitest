<?php

namespace app\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use app\Models\Parametro;

class CsdComFamiliar extends Model{

  protected $fillable = [
    'csd_id',       'user_crea_id',      'user_edita_id',    'sis_esta_id',
    'primer_apellido',   'segundo_apellido',  'primer_nombre',    'segundo_nombre',
    'identitario',       'prm_documento_id',  'documento',        'nacimiento', 'prm_sexo_id',
    'prm_estadoivil_id', 'prm_genero_id',     'prm_sexual_id',    'prm_grupo_etnico_id',
    'prm_ocupacion_id',  'prm_parentezco_id', 'prm_convive_id',   'prm_visitado_id',
    'prm_vin_actual_id', 'prm_vin_pasado_id', 'prm_regimen_id',   'prm_cualeps_id',
    'sisben',            'prm_sisben_id',     'prm_discapacidad_id', 'prm_cual_id', 
    'prm_peso_id',       'prm_peso_dos_id',   'prm_leer_id',       'prm_escribir_id', 
    'prm_operaciones_id','prm_aprobado_id',   'prm_educacion_id',  'prm_estudia_id', 'prm_cualGrupo_id','prm_tipofuen_id'
  ];

  protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

  public function csd(){
    return $this->belongsTo(Csd::class, 'csd_id');
  }

  public function documentos(){
    return $this->belongsTo(Parametro::class, 'prm_documento_id');
  }

  public function sexo(){
    return $this->belongsTo(Parametro::class, 'prm_sexo_id');
  }

  public function estadoCivil(){
    return $this->belongsTo(Parametro::class, 'prm_estadoivil_id');
  }

  public function genero(){
    return $this->belongsTo(Parametro::class, 'prm_genero_id');
  }

  public function sexual(){
    return $this->belongsTo(Parametro::class, 'prm_sexual_id');
  }

  public function grupoEtnico(){
    return $this->belongsTo(Parametro::class, 'prm_grupo_etnico_id');
  }

  public function cualGrupo(){
    return $this->belongsTo(Parametro::class, 'prm_cualGrupo_id');
  }

  public function ocupacion(){
    return $this->belongsTo(Parametro::class, 'prm_ocupacion_id');
  }

  public function parentezco(){
    return $this->belongsTo(Parametro::class, 'prm_parentezco_id');
  }

  public function convive(){
    return $this->belongsTo(Parametro::class, 'prm_convive_id');
  }

  public function visitado(){
    return $this->belongsTo(Parametro::class, 'prm_visitado_id');
  }
  
  public function vinculacionActual(){
    return $this->belongsTo(Parametro::class, 'prm_vin_actual_id');
  }

  public function vinculacionPasado(){
    return $this->belongsTo(Parametro::class, 'prm_vin_pasado_id');
  }

  public function regimen(){
    return $this->belongsTo(Parametro::class, 'prm_regimen_id');
  }

  public function eps(){
    return $this->belongsTo(Parametro::class, 'prm_cualeps_id');
  }

  public function prm_sisben(){
    return $this->belongsTo(Parametro::class, 'prm_sisben_id');
  }

  public function discapacidad(){
    return $this->belongsTo(Parametro::class, 'prm_discapacidad_id');
  }

  public function cualDiscapacidad(){
    return $this->belongsTo(Parametro::class, 'prm_cual_id');
  }

  public function pesoUno(){
    return $this->belongsTo(Parametro::class, 'prm_peso_id');
  }

  public function pesoDos(){
    return $this->belongsTo(Parametro::class, 'prm_peso_dos_id');
  }

  public function sabeLeer(){
    return $this->belongsTo(Parametro::class, 'prm_leer_id');
  }

  public function sabeEscribir(){
    return $this->belongsTo(Parametro::class, 'prm_escribir_id');
  }

  public function sabeOperaciones(){
    return $this->belongsTo(Parametro::class, 'prm_operaciones_id');
  }
  
  public function ultAprobado(){
    return $this->belongsTo(Parametro::class, 'prm_aprobado_id');
  }

  public function nivelEducacion(){
    return $this->belongsTo(Parametro::class, 'prm_educacion_id');
  }

  public function estudiaActual(){
    return $this->belongsTo(Parametro::class, 'prm_estudia_id');
  }
}
