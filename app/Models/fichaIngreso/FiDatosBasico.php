<?php

namespace App\Models\fichaIngreso;

use App\Models\fichaIngreso\NnajNacimi;
use App\Models\Parametro;
use App\Models\Sistema\SisDepen;
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
        'prm_tipoblaci_id',
        'prm_estrateg_id',
        'prm_vestimenta_id',
        'sis_docfuen_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
    ];



    public function prmVestimenta()
    {
        return $this->belongsTo(Parametro::class, 'prm_vestimenta_id');
    }


    public function nnaj_docu()
    {
        return $this->hasOne(NnajDocu::class);
    }

    public function nnaj_sit_mil()
    {
        return $this->hasOne(NnajSitMil::class);
    }

    public function fi_csdvsi()
    {
        return $this->hasOne(FiCsdvsi::class);
    }

    public function nnaj_sexo()
    {
        return $this->hasOne(NnajSexo::class);
    }

    public function nnaj_nacimi()
    {
        return $this->hasOne(NnajNacimi::class);
    }
    public function nnaj_fi_csd()
    {
        return $this->hasOne(NnajFiCsd::class);
    }

    public function nnaj_focali()
    {
        return $this->hasOne(NnajFocali::class);
    }
    public function fi_diligenc()
    {
        return $this->hasOne(FiDiligenc::class);
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
    public function sis_depen_id()
    {
        return $this->belongsToMany(SisDepen::class, 'nnaj_upis', 'sis_nnaj_id', 'sis_depen_id');
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

            if ($dataxxxx['prm_ayuda_id'] == null) {
                $dataxxxx['prm_ayuda_id'] = 235;
            }
            $objetoxx->nnaj_sexo->update($dataxxxx);
            $objetoxx->nnaj_docu->update($dataxxxx);
            $objetoxx->update($dataxxxx);



            return $objetoxx;
        }, 5);
        //ddd($objetoxx);
        return $objetoxx;
    }
    /**
     * grabar datos basicos del componente familiar
     *
     */
    public static function getDbcomfamiliar($dataxxxx, $objetoxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['s_primer_nombre'] = strtoupper($dataxxxx['s_primer_nombre']);
            $dataxxxx['s_segundo_nombre'] = strtoupper($dataxxxx['s_segundo_nombre']);
            $dataxxxx['s_primer_apellido'] = strtoupper($dataxxxx['s_primer_apellido']);
            $dataxxxx['s_segundo_apellido'] = strtoupper($dataxxxx['s_segundo_apellido']);
            $dataxxxx['user_edita_id'] = Auth::user()->id;

            if ($objetoxx != '') {
                /** Actualizar registro */
                $objetoxx->update($dataxxxx);
            } else {
                /** Es un registro nuevo */
                $dataxxxx['sis_nnaj_id'] = SisNnaj::create(['sis_esta_id' => 1, 'user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id, 'prm_escomfam_id' => 228])->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiDatosBasico::create($dataxxxx);
            }
            $dataxxxx['objetoxx']=$objetoxx;
            $dataxxxx['fi_datos_basico_id']=$objetoxx->id;
            NnajNacimi::getTransaccion($dataxxxx);
            return $objetoxx;
        }, 5);

        return $objetoxx;
    }
   public static function getMayusculas($dataxxxx)
   {
    $dataxxxx['s_primer_nombre'] = strtoupper($dataxxxx['s_primer_nombre']);
    $dataxxxx['s_segundo_nombre'] = strtoupper($dataxxxx['s_segundo_nombre']);
    $dataxxxx['s_primer_apellido'] = strtoupper($dataxxxx['s_primer_apellido']);
    $dataxxxx['s_segundo_apellido'] = strtoupper($dataxxxx['s_segundo_apellido']);
    $dataxxxx['s_nombre_identitario'] = strtoupper($dataxxxx['s_nombre_identitario']);
    $dataxxxx['s_apodo'] = strtoupper($dataxxxx['s_apodo']);
    return $dataxxxx;
   }
    public static function getTransactionCsd($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $objetoxx=$dataxxxx['modeloxx'];
            $dataxxxx=$dataxxxx['requestx']->all();
            $dataxxxx=FiDatosBasico::getMayusculas($dataxxxx);
            $dt = new DateTime($dataxxxx['d_nacimiento']);
            $dataxxxx['d_nacimiento'] = $dt->format('Y-m-d');
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            /**
             * verificar que la persona ya se encuentre registrada
             */
            $dataxxxx['sis_docfuen_id']=4;
            $objetver=NnajDocu::where('s_documento',$dataxxxx['s_documento'] )->first();
            if ($objetoxx == ''&& isset($objetver->id)) {
                $objetoxx=$objetver->fi_datos_basico;
            }
            if ($objetoxx != '') {
                /** Actualizar registro */
                $objetoxx->update($dataxxxx);
            } else {
                /** Es un registro nuevo */
                $dataxxxx['prm_estrateg_id']=1269;
                $dataxxxx['sis_nnaj_id'] = SisNnaj::create(['sis_esta_id' => 1, 'user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id, 'prm_escomfam_id' => 227])->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiDatosBasico::create($dataxxxx);
                /**
                 * agregar el nnaj a la composocion familiar
                 */
                $dataxxxx['sis_nnajnnaj_id'] = $dataxxxx['sis_nnaj_id'];
                $dataxxxx['i_prm_ocupacion_id'] = 1269;
                $dataxxxx['i_prm_parentesco_id'] = 282;
                $dataxxxx['i_prm_vinculado_idipron_id'] = 228;
                $dataxxxx['i_prm_convive_nnaj_id'] = 228;
                $dataxxxx['prm_reprlega_id']=228;
                FiCompfami::create($dataxxxx);
            }
            $dataxxxx['fi_datos_basico_id'] = $objetoxx->id;
            $dataxxxx['objetoxx']=$objetoxx;
            FiCsdvsi::getTransaccion($dataxxxx);
            NnajSexo::getTransaccion($dataxxxx);
            NnajNacimi::getTransaccion($dataxxxx);
            NnajDocu::getTransaccion($dataxxxx);
            NnajSitMil::getTransaccion($dataxxxx);
            NnajFiCsd::getTransaccion($dataxxxx);
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
                /** Actualizar registro */
                $objetoxx->update($dataxxxx);
                $dataxxxx['fi_datos_basico_id'] = $objetoxx->id;
                $objetoxx->nnaj_sexo->update($dataxxxx);
                $objetoxx->nnaj_docu->update($dataxxxx);

                $objetoxx->nnaj_nacimi->update($dataxxxx);
                $objetoxx->nnaj_sit_mil->update($dataxxxx);
                $objetoxx->nnaj_focali->update($dataxxxx);
                $objetoxx->nnaj_fi_csd->update($dataxxxx);

            } else {
                /** Es un registro nuevo */
                $dataxxxx['sis_nnaj_id'] = SisNnaj::create(['sis_esta_id' => 1, 'user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id, 'prm_escomfam_id' => 227])->id;
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiDatosBasico::create($dataxxxx);
                $dataxxxx['fi_datos_basico_id'] = $objetoxx->id;
                NnajSexo::create($dataxxxx);
                NnajNacimi::create($dataxxxx);
                NnajDocu::create($dataxxxx);
                NnajSitMil::create($dataxxxx);
                NnajFocali::create($dataxxxx);
                NnajFiCsd::create($dataxxxx);

                /**
                 * agregar el nnaj a la composocion familiar
                 */
                $dataxxxx['sis_nnajnnaj_id'] = $dataxxxx['sis_nnaj_id'];
                $dataxxxx['i_prm_ocupacion_id'] = 1269;
                $dataxxxx['i_prm_parentesco_id'] = 805;
                $dataxxxx['i_prm_vinculado_idipron_id'] = 227;
                $dataxxxx['i_prm_convive_nnaj_id'] = 227;
                $dataxxxx['prm_reprlega_id']=227;
                if($objetoxx->nnaj_nacimi->Edad<18){
                    $dataxxxx['prm_reprlega_id']=228;
                }
                FiCompfami::create($dataxxxx);
            }

           NnajUpi::setUpiDatosBasicos($dataxxxx, $objetoxx);
           FiDiligenc::transaccion($dataxxxx, $objetoxx);
            return $objetoxx;
        }, 5);

        return $objetoxx;
    }




    public static function setSisServ($dataxxxx, $objetoxx){

        $datosxxx = [
            'nnaj_upi_id' => $dataxxxx['sis_depen_id'],
            'user_crea_id' => Auth::user()->id,
            'user_edita_id' => Auth::user()->id,
            'sis_esta_id' => 1,
            'prm_principa_id' => 227,
            'sis_depser_id' => $dataxxxx['sis_depser_id']
        ];

        NnajDese::create($datosxxx);
    }
    public function sis_docfuen()
    {
        return $this->belongsTo(SisDocfuen::class);
    }
}
