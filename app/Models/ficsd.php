<?php

namespace App;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\Parametro;
use App\Models\sicosocial\FiNucleoFamiliar;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisDepartamento;
use App\Models\sistema\SisMunicipio;
use Carbon\Carbon;

use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisPai;
use App\Models\sistema\SisUpzbarri;
use App\Models\User;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ficsd extends Model
{
    protected $fillable = [
        'i_prm_ayuda_id',
        'sis_departamento_id',
        'sis_municipio_id',
        'prm_gsanguino_id',
        'prm_factor_rh_id',
        'sis_nnaj_id',
        'prm_poblacion_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        'prm_estado_civil_id',
        'prm_situacion_militar_id',
        'prm_clase_libreta_id',
        'prm_etnia_id',
        'prm_poblacion_etnia_id',
        'sis_upzbarri_id',
        'sis_departamentoexp_id',
        'sis_municipioexp_id',
        'sis_pai_id',
        'sis_departamento_id',
        'sis_paiexp_id',
        'sis_departamentoexp_id',
        'i_prm_linea_base_id'
    ];

     public function gsanguino()
    {
        return $this->belongsTo(Parametro::class, 'prm_gsanguino_id');
    }

    public function factorh()
    {
        return $this->belongsTo(Parametro::class, 'prm_factor_rh_id');
    }

    public function poblacion()
    {
        return $this->belongsTo(Parametro::class, 'prm_poblacion_id');
    }


    public function sis_upzbarri()
    {
        return $this->belongsTo(SisUpzbarri::class);
    }

   

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function sis_pai()
    {
        return $this->belongsTo(SisPai::class);
    }
    public function sis_departamento()
    {
        return $this->belongsTo(SisDepartamento::class);
    }
    public function sis_municipio()
    {
        return $this->belongsTo(SisMunicipio::class);
    }

    public function sis_paiexp()
    {
        return $this->belongsTo(SisPai::class, 'sis_paiexp_id');
    }
    public function sis_departamentoexp()
    {
        return $this->belongsTo(SisDepartamento::class, 'sis_departamentoexp_id');
    }
    public function sis_municipioexp()
    {
        return $this->belongsTo(SisMunicipio::class, 'sis_municipioexp_id');
    }

  
    public function SisNnaj()
    {
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public static function usarioNnaj($idxxxxxx)
    {
        return ficsd::where('sis_nnaj_id', $idxxxxxx)->where('sis_esta_id', 1)->first();
    }
}
