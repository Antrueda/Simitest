<?php

namespace app\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use app\Models\Parametro;
use app\Models\User;
use app\Models\Sistema\SisMunicipio;
use app\Models\Sistema\SisDepartamento;
use app\Models\Sistema\SisPai;

class CsdDatosBasico extends Model{
    protected $fillable = [
        'csd_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
        'primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido',
        'identitario', 'apodo', 'prm_sexo_id', 'prm_genero_id', 'prm_sexual_id', 'nacimiento',
        'pais_id', 'departamento_id', 'municipio_id',
        'prm_documento_id', 'prm_doc_fisico_id', 'prm_sin_fisico_id', 'documento',
        'pais_docum_id', 'departamento_docum_id', 'municipio_docum_id',
        'prm_gruposang_id', 'prm_factorsang_id', 'prm_militar_id', 'prm_libreta_id',
        'prm_civil_id', 'prm_etnia_id', 'prm_cual_id', 'prm_poblacion_id','prm_tipofuen_id'
    ];

    protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function sexo(){
        return $this->belongsTo(Parametro::class, 'prm_sexo_id');
    }

    public function genero(){
        return $this->belongsTo(Parametro::class, 'prm_genero_id');
    }

    public function sexual(){
        return $this->belongsTo(Parametro::class, 'prm_sexual_id');
    }

    public function pais(){
        return $this->belongsTo(SisPai::class, 'pais_id');
    }

    public function departamento(){
        return $this->belongsTo(SisDepartamento::class, 'departamento_id');
    }

    public function municipio(){
        return $this->belongsTo(SisMunicipio::class, 'municipio_id');
    }

    public function documento(){
        return $this->belongsTo(Parametro::class, 'prm_documento_id');
    }

    public function docFisico(){
        return $this->belongsTo(Parametro::class, 'prm_doc_fisico_id');
    }

    public function sinFisico(){
        return $this->belongsTo(Parametro::class, 'prm_sin_fisico_id');
    }

    public function paisDocum(){
        return $this->belongsTo(SisPai::class, 'pais_docum_id');
    }

    public function departamentoDocum(){
        return $this->belongsTo(SisDepartamento::class, 'departamento_docum_id');
    }

    public function municipioDocum(){
        return $this->belongsTo(SisMunicipio::class, 'municipio_docum_id');
    }

    public function gruposang(){
        return $this->belongsTo(Parametro::class, 'prm_gruposang_id');
    }

    public function factorsang(){
        return $this->belongsTo(Parametro::class, 'prm_factorsang_id');
    }

    public function militar(){
        return $this->belongsTo(Parametro::class, 'prm_militar_id');
    }

    public function libreta(){
        return $this->belongsTo(Parametro::class, 'prm_libreta_id');
    }

    public function civil(){
        return $this->belongsTo(Parametro::class, 'prm_civil_id');
    }

    public function etnia(){
        return $this->belongsTo(Parametro::class, 'prm_etnia_id');
    }

    public function grupoIndigena(){
        return $this->belongsTo(Parametro::class, 'prm_cual_id');
    }

    public function poblacion(){
        return $this->belongsTo(Parametro::class, 'prm_poblacion_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}