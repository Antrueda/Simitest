<?php

namespace App\Models\fichaIngreso;

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

class FiDatosBasico extends Model
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

        'sis_departamento_id',
        'sis_municipio_id',
        'prm_gsanguino_id',
        'prm_factor_rh_id',
        'sis_nnaj_id',
        'fi_nucleo_familiar_id',
        'prm_poblacion_id',
        's_documento',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        'prm_estado_civil_id',
        'prm_situacion_militar_id',
        'prm_clase_libreta_id',
        'prm_identidad_genero_id',
        'prm_orientacion_sexual_id',
        'prm_etnia_id',
        'prm_poblacion_etnia_id',
        'prm_vestimenta_id',
        's_nombre_focalizacion',
        's_lugar_focalizacion',
        'sis_upzbarri_id',
        'prm_documento_id',
        'prm_doc_fisico_id',

        'sis_departamentoexp_id',
        'sis_municipioexp_id',
        's_nombre_identitario',
        'sis_pai_id',
        'sis_departamento_id',
        'sis_paiexp_id',
        'sis_departamentoexp_id',
        'i_prm_linea_base_id'
    ];

    public function tipoDocumento()
    {
        return $this->belongsTo(Parametro::class, 'prm_documento_id');
    }

    public function sexo()
    {
        return $this->belongsTo(Parametro::class, 'prm_sexo_id');
    }

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

    public static function usregisro($usuariox)
    {
        $usuariox = FiDatosBasico::ucreaedita($usuariox);
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
        return FiDatosBasico::where('sis_nnaj_id', $idxxxxxx)->where('sis_esta_id', 1)->first();
    }
    public static function getTransactionVsi($dataxxxx, $objetoxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['s_primer_nombre'] = strtoupper($dataxxxx['s_primer_nombre']);
            $dataxxxx['s_segundo_nombre'] = strtoupper($dataxxxx['s_segundo_nombre']);
            $dataxxxx['s_primer_apellido'] = strtoupper($dataxxxx['s_primer_apellido']);
            $dataxxxx['s_segundo_apellido'] = strtoupper($dataxxxx['s_segundo_apellido']);
            $dataxxxx['s_nombre_identitario'] = strtoupper($dataxxxx['s_nombre_identitario']);
            $dt = new DateTime($dataxxxx['d_nacimiento']);
            $dataxxxx['d_nacimiento'] = $dt->format('Y-m-d');
            $dataxxxx['s_apodo'] = strtoupper($dataxxxx['s_apodo']);
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if($dataxxxx['i_prm_ayuda_id']==null){
                $dataxxxx['i_prm_ayuda_id']=235;
            }
            $objetoxx->update($dataxxxx);
            return $objetoxx;
        }, 5);

        return $objetoxx;
    }
    public function grabar($dataxxxx, $objetoxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['s_primer_nombre'] = strtoupper($dataxxxx['s_primer_nombre']);
            $dataxxxx['s_segundo_nombre'] = strtoupper($dataxxxx['s_segundo_nombre']);
            $dataxxxx['s_primer_apellido'] = strtoupper($dataxxxx['s_primer_apellido']);
            $dataxxxx['s_segundo_apellido'] = strtoupper($dataxxxx['s_segundo_apellido']);
            $dataxxxx['s_nombre_identitario'] = strtoupper($dataxxxx['s_nombre_identitario']);
            $dt = new DateTime($dataxxxx['d_nacimiento']);
            $dataxxxx['d_nacimiento'] = $dt->format('Y-m-d');
            $dataxxxx['s_apodo'] = strtoupper($dataxxxx['s_apodo']);
            $dataxxxx['s_lugar_focalizacion'] = strtoupper($dataxxxx['s_lugar_focalizacion']);
            $dataxxxx['s_nombre_focalizacion'] = strtoupper($dataxxxx['s_nombre_focalizacion']);
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                /** Se va a modificar el registro */
                /** Cuántos días han transcurrido desde la creación de datos básicos FI */
                $diasxxxx = IndicadorHelper::setDiasTranscurridos($dataxxxx['sis_nnaj_id']);
                /** Saber si se creo el registro después de la línea base */
                $datobasi = FiDatosBasico::where('sis_nnaj_id', $dataxxxx['sis_nnaj_id'])->where('i_prm_linea_base_id', 228)->first();
                /** Para crearse el nuevo registro deben haber transcurido más de 45 días no haber registro */
                if ($diasxxxx > 45 && !isset($datobasi->id)) {
                    /** La línea base se pasa a inactivo para asegurar que no vuelva a ser modificada,
                     * solo será consultada */
                    $objetoxx->update(['sis_esta_id' => 0]);
                    /** El nuevo registro no es línea base */
                    $dataxxxx['i_prm_linea_base_id'] = 228;
                    /** Insertar nuevo registro */
                    $dataxxxx['sis_nnaj_id'] = $objetoxx->sis_nnaj_id;
                    $dataxxxx['fi_nucleo_familiar_id'] = $objetoxx->fi_nucleo_familiar_id;
                    $dataxxxx['user_crea_id'] = Auth::user()->id;
                    $objetoxx = FiDatosBasico::create($dataxxxx);
                    //DB::table($tablaxxx)->insert($dataxxxx);
                } else {
                    /** Actualizar registro */
                    $dataxxxx['fi_nucleo_familiar_id'] = $objetoxx->fi_nucleo_familiar_id;
                    $objetoxx->update($dataxxxx);
                }
            } else {
                /** Es un registro nuevo */
                $dataxxxx['sis_nnaj_id'] = SisNnaj::create(['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id])->id;
                $dataxxxx['fi_nucleo_familiar_id'] = FiNucleoFamiliar::nucleo($dataxxxx['sis_nnaj_id']);
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $dataxxxx['i_prm_linea_base_id'] = 227;
                $objetoxx = FiDatosBasico::create($dataxxxx);
            }
            $dataxxxx['i_prm_ocupacion_id'] = 1262;
            $dataxxxx['i_prm_parentesco_id'] = 805;
            $dataxxxx['i_prm_vinculado_idipron_id'] = 227;
            $dataxxxx['i_prm_convive_nnaj_id'] = 227;
            $compofam = FiComposicionFami::where('fi_nucleo_familiar_id', $dataxxxx['fi_nucleo_familiar_id'])->first();
            if ($compofam == null) {
                $compofam = '';
            }

            FiComposicionFami::transaccion($dataxxxx, $compofam);

            $dataxxxx['sis_tabla_id'] = 9;
            IndicadorHelper::asignaLineaBase($dataxxxx);

            return $objetoxx;
        }, 5);

        return $objetoxx;
    }
}
