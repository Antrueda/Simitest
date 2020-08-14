<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\Sistema\SisNnaj;
use App\Models\Parametro;

class Csd extends Model{

    protected $fillable = ['proposito', 'fecha', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
    'sis_nnaj_id','prm_tipofuen_id'];

  	protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

  	public function nnajs(){
    	return $this->belongsToMany(SisNnaj::class, 'csd_sis_nnaj', 'csd_id', 'sis_nnaj_id');
  	}

  	public function CsdJusticia(){
        return $this->hasMany(CsdJusticia::class, 'csd_id');
    }

    public function CsdResidencia(){
        return $this->hasMany(CsdResidencia::class, 'csd_id');
    }

    public function CsdViolencia(){
        return $this->hasMany(CsdViolencia::class, 'csd_id');
    }

    public function CsdDatosBasico(){
        return $this->hasMany(CsdDatosBasico::class, 'csd_id');
    }

    public function CsdConclusiones(){
        return $this->hasMany(CsdConclusiones::class, 'csd_id');
    }

    public function CsdBienvenida(){
        return $this->hasMany(CsdBienvenida::class, 'csd_id');
    }

    public function CsdAlimentacion(){
        return $this->hasMany(CsdAlimentacion::class, 'csd_id');
    }

    public function CsdRedsocPasado(){
        return $this->hasMany(CsdRedsocPasado::class, 'csd_id');
    }

    public function CsdRedsocActual(){
        return $this->hasMany(CsdRedsocActual::class, 'csd_id');
    }

    public function CsdDinfamMadre(){
        return $this->hasMany(CsdDinfamMadre::class, 'csd_id');
    }

    public function CsdDinfamPadre(){
        return $this->hasMany(CsdDinfamPadre::class, 'csd_id');
    }

    public function CsdDinFamiliar(){
        return $this->hasMany(CsdDinFamiliar::class, 'csd_id');
    }

    public function CsdGeningAporta(){
        return $this->hasMany(CsdGeningAporta::class, 'csd_id');
    }

    public function CsdGenIngreso(){
        return $this->hasMany(CsdGenIngreso::class, 'csd_id');
    }

    public function CsdComFamiliar(){
        return $this->hasMany(CsdComFamiliar::class, 'csd_id');
    }

    public function CsdComFamiliarObservaciones(){
        return $this->hasMany(CsdComFamiliarObservaciones::class, 'csd_id');
    }

    public function especiales(){
        return $this->belongsToMany(Parametro::class,'csd_nnaj_especial', 'csd_id', 'parametro_id');
    }
}
