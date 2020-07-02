<?php

namespace App\Models\sicosocial;

use App\Helpers\Indicadores\IndicadorHelper;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Parametro;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisDependencia;
use Illuminate\Support\Facades\Auth;

class Vsi extends Model{
    protected $fillable = ['sis_nnaj_id', 'dependencia_id', 'fecha', 'user_crea_id', 'user_edita_id', 'sis_esta_id'];

    protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function dependencia(){
        return $this->belongsTo(SisDependencia::class, 'dependencia_id');
    }

    public function VsiDatosVincula(){
        return $this->hasMany(VsiDatosVincula::class, 'vsi_id');
    }

    public function VsiBienvenida(){
        return $this->hasMany(VsiBienvenida::class, 'vsi_id');
    }

    public function VsiViolencia(){
        return $this->hasMany(VsiViolencia::class, 'vsi_id');
    }

    public function VsiEducacion(){
        return $this->hasMany(VsiEducacion::class, 'vsi_id');
    }

    public function VsiSalud(){
        return $this->hasMany(VsiSalud::class, 'vsi_id');
    }

    public function VsiRelFamiliar(){
        return $this->hasMany(VsiRelFamiliar::class, 'vsi_id');
    }

    public function VsiRelSociales(){
        return $this->hasMany(VsiRelSociales::class, 'vsi_id');
    }

    public function VsiAntecedente(){
        return $this->hasMany(VsiAntecedente::class, 'vsi_id');
    }

    public function VsiActEmocional(){
        return $this->hasMany(VsiActEmocional::class, 'vsi_id');
    }

    public function VsiFacProtector(){
        return $this->hasMany(VsiFacProtector::class, 'vsi_id');
    }

    public function VsiFacRiesgo(){
        return $this->hasMany(VsiFacRiesgo::class, 'vsi_id');
    }

    public function VsiPotencialidad(){
        return $this->hasMany(VsiPotencialidad::class, 'vsi_id');
    }

    public function VsiMeta(){
        return $this->hasMany(VsiMeta::class, 'vsi_id');
    }

    public function VsiSitEspecial(){
        return $this->hasMany(VsiSitEspecial::class, 'vsi_id');
    }

    public function VsiGenIngreso(){
        return $this->hasMany(VsiGenIngreso::class, 'vsi_id');
    }

    public function VsiAbuSexual(){
        return $this->hasMany(VsiAbuSexual::class, 'vsi_id');
    }

    public function VsiConsumo(){
        return $this->hasMany(VsiConsumo::class, 'vsi_id');
    }

    public function VsiRedSocial(){
        return $this->hasMany(VsiRedSocial::class, 'vsi_id');
    }

    public function VsiRedsocActual(){
        return $this->hasMany(VsiRedsocActual::class, 'vsi_id');
    }

    public function VsiRedsocPasado(){
        return $this->hasMany(VsiRedsocPasado::class, 'vsi_id');
    }

    public function VsiConcepto(){
        return $this->hasMany(VsiConcepto::class, 'vsi_id');
    }

    public function VsiConsentimiento(){
        return $this->hasMany(VsiConsentimiento::class, 'vsi_id');
    }

    public function VsiDinfamMadre(){
        return $this->hasMany(VsiDinfamMadre::class, 'vsi_id');
    }

    public function VsiDinfamPadre(){
        return $this->hasMany(VsiDinfamPadre::class, 'vsi_id');
    }

    public function VsiDinFamiliar(){
        return $this->hasMany(VsiDinFamiliar::class, 'vsi_id');
    }

    public function VsiEstEmocional(){
        return $this->hasMany(VsiEstEmocional::class, 'vsi_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function emocionales(){
        return $this->belongsToMany(Parametro::class,'vsi_nnaj_emocional', 'vsi_id', 'parametro_id');
    }

    public function sexuales(){
        return $this->belongsToMany(Parametro::class,'vsi_nnaj_sexual', 'vsi_id', 'parametro_id');
    }

    public function comportamentales(){
        return $this->belongsToMany(Parametro::class,'vsi_nnaj_comportamental', 'vsi_id', 'parametro_id');
    }

    public function academicas(){
        return $this->belongsToMany(Parametro::class,'vsi_nnaj_academica', 'vsi_id', 'parametro_id');
    }

    public function sociales(){
        return $this->belongsToMany(Parametro::class,'vsi_nnaj_social', 'vsi_id', 'parametro_id');
    }

    public function familiares(){
        return $this->belongsToMany(Parametro::class,'vsi_nnaj_familiar', 'vsi_id', 'parametro_id');
    }

    public static function indicador($sis_nnaj_id, $sis_tabla_id)
    {
        // $dataxxxx['sis_tabla_id'] = $sis_tabla_id;
        // $dataxxxx['sis_nnaj_id'] = $sis_nnaj_id;
        // $dataxxxx['user_crea_id'] = Auth::user()->id;
        // $dataxxxx['user_edita_id'] = Auth::user()->id;
        // IndicadorHelper::asignaLineaBase($dataxxxx);
    }
}
