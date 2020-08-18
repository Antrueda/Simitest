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

class ficsdvsi extends Model
{
    protected $fillable = [
        's_primer_nombre',
        's_segundo_nombre',
        's_primer_apellido',
        's_segundo_apellido',
        'prm_sexo_id',
        's_apodo',
        'd_nacimiento',
        'i_prm_ayuda_id',
        'sis_nnaj_id',
        's_documento',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        'prm_identidad_genero_id',
        'prm_orientacion_sexual_id',
        'prm_documento_id',
        'prm_doc_fisico_id',
        ];
        public function tipoDocumento()
        {
            return $this->belongsTo(Parametro::class, 'prm_documento_id');
        }
    
        public function sexo()
        {
            return $this->belongsTo(Parametro::class, 'prm_sexo_id');
        }
    
         public function sis_upzbarri()
        {
            return $this->belongsTo(SisUpzbarri::class);
        }
    
        public static function usregisro($usuariox)
        {
            $usuariox = ficsdvsi::ucreaedita($usuariox);
            return  $usuariox->s_primer_nombre . ' ' .
                $usuariox->s_segundo_nombre . ' ' .
                $usuariox->s_primer_apellido . ' ' .
                $usuariox->s_segundo_apellido;
        }
    
        public function creador()
        {
            return $this->belongsTo(User::class, 'user_crea_id');
        }
    
        public function editor()
        {
            return $this->belongsTo(User::class, 'user_edita_id');
        }
         
        public function getNombreCompletoAttribute()
        {
            return $this->s_primer_nombre . ' ' . $this->s_segundo_nombre . ' ' . $this->s_primer_apellido . ' ' . $this->s_segundo_apellido;
        }
    
        public function getEdadAttribute()
        {
            return Carbon::parse($this->d_nacimiento)->age;
        }
    
        public function SisNnaj()
        {
            return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
        }
    
        public static function usarioNnaj($idxxxxxx)
        {
            return ficsdvsi::where('sis_nnaj_id', $idxxxxxx)->where('sis_esta_id', 1)->first();
        }
  
}

