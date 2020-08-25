<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\Parametro;
use App\Models\sicosocial\NnajNfamili;
use App\Models\Sistema\SisDocfuen;
use Carbon\Carbon;

use App\Models\Sistema\SisNnaj;
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
        's_apodo',
        'sis_nnaj_id',
        'nnaj_nfamili_id',
        'prm_tipoblaci_id',
        'prm_vestimenta_id',
        'sis_docfuen_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',

    ];

    public function prmVestimenta()
    {
        return $this->belongsTo(Parametro::class,'prm_vestimenta_id');
    }
    public function nnaj_nfamili()
    {
        return $this->belongsTo(NnajNfamili::class);
    }
    public function nnaj_docu()
    {
        return $this->belongsTo(NnajDocu::class);
    }
    public function sis_nnaj()
    {
        return $this->belongsTo(SisNnaj::class);
    }
    public function tipoDocumento()
    {
        return $this->belongsTo(Parametro::class, 'prm_documento_id');
    }
    public function prmTipoPobla()
    {
        return $this->belongsTo(Parametro::class, 'prm_tipoblaci_id');
    }

    public function gsanguino()
    {
        return $this->belongsTo(Parametro::class, 'prm_gsanguino_id');
    }

    public function factorh()
    {
        return $this->belongsTo(Parametro::class, 'prm_factor_rh_id');
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
                $dataxxxx['fi_nucleo_familiar_id'] = NnajNfamili::nucleo($dataxxxx['sis_nnaj_id']);
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
    public function sis_docfuen()
    {
        return $this->belongsTo(SisDocfuen::class);
    }

}
