<?php

namespace App\Models\Sistema;

use Illuminate\Database\Eloquent\Model;

use app\Models\User;
use app\Models\fichaIngreso\FiDatosBasico;
use app\Models\fichaIngreso\FiBienvenida;
use app\Models\fichaIngreso\FiResidencia;
use app\Models\sicosocial\Vsi;
use app\Models\consulta\Csd;
use app\Models\Acciones\Individuales\AiSalidaMayores;
use app\Models\Acciones\Individuales\AiReporteEvasion;
use app\Models\Acciones\Individuales\AiSalidaMenores;
use app\Models\Acciones\Individuales\AiRetornoSalida;
use app\Models\Salud\Mitigacion\Vma\MitVma;
use app\Models\Salud\Mitigacion\Vspa;

class SisNnaj extends Model{
    protected $fillable = ['sis_esta_id', 'user_crea_id', 'user_edita_id'];

    public function fi_datos_basico(){
        return $this->hasOne(FiDatosBasico::class);
    }

    public function FiBienvenida(){
        return $this->hasMany(FiBienvenida::class, 'sis_nnaj_id');
    }

    public function FiResidencia(){
        return $this->hasMany(FiResidencia::class, 'sis_nnaj_id');
    }

    public function getNnajDatosAttribute(){
        return
        $this->FiDatosBasico->first()->s_primer_nombre . ' ' .
        $this->FiDatosBasico->first()->s_segundo_nombre . ' ' .
        $this->FiDatosBasico->first()->s_primer_apellido . ' ' .
        $this->FiDatosBasico->first()->s_segundo_apellido . ' - ' .
        $this->FiDatosBasico->first()->s_documento;
    }

    public function Vsi(){
    	return $this->hasMany(Vsi::class, 'sis_nnaj_id');
    }

    public function AiSalidaMayores(){
        return $this->hasMany(AiSalidaMayores::class, 'sis_nnaj_id');
    }

    public function AiReporteEvasion(){
        return $this->hasMany(AiReporteEvasion::class, 'sis_nnaj_id');
    }

    public function AiSalidaMenores(){
        return $this->hasMany(AiSalidaMenores::class, 'sis_nnaj_id');
    }

    public function AiRetornoSalida(){
        return $this->hasMany(AiRetornoSalida::class, 'sis_nnaj_id');
    }

    public function Vspa(){
        return $this->hasMany(Vspa::class, 'sis_nnaj_id');
    }

    public function MitVma(){
        return $this->hasMany(MitVma::class, 'sis_nnaj_id');
    }

    public function csds(){
        return $this->belongsToMany(Csd::class,'csd_sis_nnaj', 'sis_nnaj_id', 'csd_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
