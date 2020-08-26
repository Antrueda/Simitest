<?php

namespace App\Models\fichaIngreso;

use app\Models\Parametro;
use App\Models\Sistema\SisDocfuen;
use app\Models\User;
use Illuminate\Database\Eloquent\Model;

class NnajFiCsd extends Model
{
    protected $fillable = [
        'fi_datos_basico_id',
        'prm_etnia_id',
        'prm_poblacion_etnia_id',
        'prm_tipoblaci_id',
        'prm_gsanguino_id',
        'prm_factor_rh_id',
        'prm_estado_civil_id',
        'sis_docfuen_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
    ];
    public function fi_datos_basico()
    {
        return $this->belongsTo(FiDatosBasico::class);
    }
    public function prmEtnia()
    {
        return $this->belongsTo(Parametro::class, 'prm_etnia_id');
    }
    public function poblacion()
    {
        return $this->belongsTo(Parametro::class, 'prm_tipoblaci_id');
    }
    public function gsanguino()
    {
        return $this->belongsTo(Parametro::class, 'prm_gsanguino_id');
    }
    public function prmPoblEtnia()
    {
        return $this->belongsTo(Parametro::class, 'prm_poblacion_etnia_id');
    }
    public function factorh()
    {
        return $this->belongsTo(Parametro::class, 'prm_factor_rh_id');
    }
    public function sis_docfuen()
    {
        return $this->belongsTo(SisDocfuen::class);
    }


    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class, 'user_edita_id');
    }
}
