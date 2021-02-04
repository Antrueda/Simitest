<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisDepartam;
use App\Models\Sistema\SisPai;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdDatosBasico extends Model{
    protected $fillable = [
        'csd_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
        's_primer_nombre', 's_segundo_nombre', 's_primer_apellido', 's_segundo_apellido',
        's_nombre_identitario', 's_apodo', 'prm_sexo_id', 'prm_identidad_genero_id', 'prm_orientacion_sexual_id', 'd_nacimiento',
        'sis_pai_id', 'sis_departam_id', 'sis_municipio_id',
        'prm_tipodocu_id', 'prm_doc_fisico_id', 'prm_ayuda_id', 's_documento',
        'sis_paiexp_id', 'sis_departamexp_id', 'sis_municipioexp_id',
        'prm_gsanguino_id', 'prm_factor_rh_id', 'prm_situacion_militar_id', 'prm_clase_libreta_id',
        'prm_estado_civil_id', 'prm_etnia_id', 'prm_poblacion_etnia_id', 'prm_tipoblaci_id','prm_tipofuen_id'
    ];

    protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function sexo(){
        return $this->belongsTo(Parametro::class, 'prm_sexo_id');
    }
    public function getEdadAttribute()
    {
        return Carbon::parse($this->d_nacimiento)->age;
    }
    public function genero(){
        return $this->belongsTo(Parametro::class, 'prm_identidad_genero_id');
    }

    public function sexual(){
        return $this->belongsTo(Parametro::class, 'prm_orientacion_sexual_id');
    }

    public function pais(){
        return $this->belongsTo(SisPai::class, 'sis_pai_id');
    }

    public function departamento(){
        return $this->belongsTo(SisDepartam::class, 'sis_departam_id');
    }

    public function municipio(){
        return $this->belongsTo(SisMunicipio::class, 'sis_municipio_id');
    }

    public function documento(){
        return $this->belongsTo(Parametro::class, 'prm_tipodocu_id');
    }

    public function docFisico(){
        return $this->belongsTo(Parametro::class, 'prm_doc_fisico_id');
    }

    public function sinFisico(){
        return $this->belongsTo(Parametro::class, 'prm_ayuda_id');
    }

    public function paisDocum(){
        return $this->belongsTo(SisPai::class, 'sis_paiexp_id');
    }

    public function departamentoDocum(){
        return $this->belongsTo(SisDepartam::class, 'sis_departamexp_id');
    }

    public function municipioDocum(){
        return $this->belongsTo(SisMunicipio::class, 'sis_municipioexp_id');
    }

    public function gruposang(){
        return $this->belongsTo(Parametro::class, 'prm_gsanguino_id');
    }

    public function factorsang(){
        return $this->belongsTo(Parametro::class, 'prm_factor_rh_id');
    }

    public function militar(){
        return $this->belongsTo(Parametro::class, 'prm_situacion_militar_id');
    }

    public function libreta(){
        return $this->belongsTo(Parametro::class, 'prm_clase_libreta_id');
    }

    public function civil(){
        return $this->belongsTo(Parametro::class, 'prm_estado_civil_id');
    }

    public function etnia(){
        return $this->belongsTo(Parametro::class, 'prm_etnia_id');
    }

    public function grupoIndigena(){
        return $this->belongsTo(Parametro::class, 'prm_poblacion_etnia_id');
    }

    public function poblacion(){
        return $this->belongsTo(Parametro::class, 'prm_tipoblaci_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function getTransaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = CsdDatosBasico::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
