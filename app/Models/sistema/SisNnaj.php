<?php

namespace App\Models\Sistema;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiBienvenida;
use App\Models\fichaIngreso\FiResidencia;
use App\Models\sicosocial\Vsi;
use App\Models\consulta\Csd;
use App\Models\Acciones\Individuales\AiSalidaMayores;
use App\Models\Acciones\Individuales\AiReporteEvasion;
use App\Models\Acciones\Individuales\AiSalidaMenores;
use App\Models\Acciones\Individuales\AiRetornoSalida;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiRazone;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\Salud\Mitigacion\Vma\MitVma;
use App\Models\Salud\Mitigacion\Vspa;

class SisNnaj extends Model
{
    protected $fillable = ['sis_esta_id', 'user_crea_id', 'user_edita_id', 'prm_escomfam_id'];

    public function fi_datos_basico()
    {
        return $this->hasOne(FiDatosBasico::class);
    }

    public function FiBienvenida()
    {
        return $this->hasMany(FiBienvenida::class, 'sis_nnaj_id');
    }

    public function FiResidencia()
    {
        return $this->hasMany(FiResidencia::class, 'sis_nnaj_id');
    }

    public function getNnajDatosAttribute()
    {
        return
            $this->FiDatosBasico->first()->s_primer_nombre . ' ' .
            $this->FiDatosBasico->first()->s_segundo_nombre . ' ' .
            $this->FiDatosBasico->first()->s_primer_apellido . ' ' .
            $this->FiDatosBasico->first()->s_segundo_apellido . ' - ' .
            $this->FiDatosBasico->first()->s_documento;
    }

    public function Vsi()
    {
        return $this->hasMany(Vsi::class, 'sis_nnaj_id');
    }

    public function AiSalidaMayores()
    {
        return $this->hasMany(AiSalidaMayores::class, 'sis_nnaj_id');
    }

    public function AiReporteEvasion()
    {
        return $this->hasMany(AiReporteEvasion::class, 'sis_nnaj_id');
    }

    public function AiSalidaMenores()
    {
        return $this->hasMany(AiSalidaMenores::class, 'sis_nnaj_id');
    }

    public function AiRetornoSalida()
    {
        return $this->hasMany(AiRetornoSalida::class, 'sis_nnaj_id');
    }

    public function Vspa()
    {
        return $this->hasMany(Vspa::class, 'sis_nnaj_id');
    }

    public function MitVma()
    {
        return $this->hasMany(MitVma::class, 'sis_nnaj_id');
    }

    public function csds()
    {
        return $this->belongsToMany(Csd::class, 'csd_sis_nnaj', 'sis_nnaj_id', 'csd_id');
    }

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function nnaj_upis()
    {
        return $this->hasMany(NnajUpi::class);
    }

    public function getNnajUpiAttribute()
    {
        $upixxxxx = [['valuexxx' => '', 'optionxx' => 'Sin responsable']];
        foreach ($this->nnaj_upis as $value) {
            if ($value->prm_principa_id == 227) {
                $upixxxxx = [$value->sis_depen->ComboAjax];
            }
        }
        $respuest = [$upixxxxx];

        return  $respuest;
    }

    public function getFotoNnajAttribute()
    {
        $respuest='adminlte/dist/img/avatar5.png';
        if(isset($this->fi_razone->id)) {
            foreach ($this->fi_razone->fi_documentos_anexas as $key => $value) {
                if($value->i_prm_documento_id==2468) {
                    $respuest=$value->s_ruta;
                }
            }
        }

        return  $respuest;
    }
    public function getNnajUpiPrincipalAttribute()
    {
        $principa = '';
        foreach ($this->nnaj_upis as $value) {
            if ($value->prm_principa_id == 227) {
                $principa = $value->sis_depen_id;
            }
        }
        return  $principa;
    }
    public function nnaj_depes()
    {
        return $this->hasMany(NnajUpi::class);
    }
    public function fi_compfamis()
    {
        return $this->hasMany(FiCompfami::class);
    }
    public function fi_razone()
    {
        return $this->hasOne(FiRazone::class);
    }
}
