<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Parametro;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisUpzbarri;
use App\Models\User;

class FiResidencia extends Model
{
    protected $fillable = [
        'i_prm_tiene_dormir_id',
        'i_prm_tipo_duerme_id',
        'i_prm_tipo_tenencia_id',
        'i_prm_tipo_direccion_id',
        'i_prm_zona_direccion_id',
        'i_prm_tipo_via_id',
        's_nombre_via',
        'i_prm_alfabeto_via_id',
        'i_prm_tiene_bis_id',
        'i_prm_bis_alfabeto_id',
        'i_prm_cuadrante_vp_id',
        'i_via_generadora',
        'i_prm_alfabetico_vg_id',
        'i_placa_vg',
        'i_prm_cuadrante_vg_id',
        'i_prm_estrato_id',
        'i_prm_espacio_parcha_id',
        's_nombre_espacio_parcha',
        'sis_upzbarri_id',
        's_complemento',
        's_telefono_uno',
        's_telefono_dos',
        's_telefono_tres',
        's_email_facebook',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];

    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function sis_nnaj()
    {
        return $this->belongsTo(SisNnaj::class);
    }

    public function sisUpzbarri()
    {
        return $this->belongsTo(SisUpzbarri::class);
    }

    public function sis_barrio()
    {
        return $this->belongsTo(SisUpzbarri::class, 'sis_upzbarri_id');
    }
    public function getTelefonosAttribute()
    {
        return $this->s_telefono_uno . ' ' . $this->s_telefono_dos . ' ' . $this->s_telefono_tres;
    }

    public function getDireccionAttribute()
    {


        if($this->i_prm_zona_direccion_id==287){
            $dir = (!is_null($this->i_prm_tipo_via_id)) ? ' ' . $this->tipoVia->nombre : '';
            $dir .= (!is_null($this->s_nombre_via)) ? ' ' . $this->s_nombre_via : '';
            $dir .= (!is_null($this->i_prm_alfabeto_via_id)) ? ' ' . $this->alfabetoVia->nombre : '';
            $dir .= (!is_null($this->i_prm_tiene_bis_id)) ? ' bis' : '';
            $dir .= (!is_null($this->i_prm_bis_alfabeto_id)) ? ' ' . $this->bisAlfabeto->nombre : '';
            $dir .= (!is_null($this->i_prm_cuadrante_vp_id)) ? ' ' . $this->cuadranteVp->nombre : '';
            $dir .= (!is_null($this->i_via_generadora)) ? ' Nº ' . $this->i_via_generadora : '';
            $dir .= (!is_null($this->i_prm_alfabetico_vg_id)) ? ' ' . $this->alfabeticoVg->nombre : '';
            $dir .= (!is_null($this->i_placa_vg)) ? ' - ' . $this->i_placa_vg : '';
            $dir .= (!is_null($this->i_prm_cuadrante_vg_id)) ? ' ' . $this->cuadranteVg->nombre : '';
            $dir .= (!is_null($this->s_complemento)) ? ' ' . $this->s_complemento : '';
        }else{
            $dir = (!is_null($this->s_complemento)) ? ' ' . $this->s_complemento : '';
        }


        return $dir;
    }

    public function tipoVia()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_tipo_via_id');
    }

    public function alfabetoVia()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_alfabeto_via_id');
    }

    public function bisAlfabeto()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_bis_alfabeto_id');
    }

    public function cuadranteVp()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_cuadrante_vp_id');
    }

    public function alfabeticoVg()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_alfabetico_vg_id');
    }

    public function cuadranteVg()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_cuadrante_vg_id');
    }

    public static function residencia($usuariox)
    {
        $vestuari = ['residenc' => FiResidencia::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

        if ($vestuari['residenc'] == null) {
            $vestuari['formular'] = true;
        }
        return $vestuari;
    }
    private static function grabarOpciones($objetoxx, $dataxxxx)
    {
        FiCondicionAmbiente::where('fi_residencia_id', $objetoxx->id)->delete();
        $datosxxx = [
            'user_crea_id' => Auth::user()->id,
            'user_edita_id' => Auth::user()->id,
            'sis_esta_id' => 1,
            'fi_residencia_id' => $objetoxx->id
        ];
        foreach ($dataxxxx['i_prm_condicion_amb_id'] as $registro) {
            $datosxxx['i_prm_condicion_amb_id'] = $registro;
            FiCondicionAmbiente::create($datosxxx);
        }
    }
    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiResidencia::create($dataxxxx);
            }
            FiResidencia::grabarOpciones($objetoxx, $dataxxxx);

            $dataxxxx['sis_tabla_id'] = 30;
            //IndicadorHelper::asignaLineaBase($dataxxxx);

            $dataxxxx['sis_tabla_id'] = 6;
            //IndicadorHelper::asignaLineaBase($dataxxxx);

            return $objetoxx;
        }, 5);
        return $usuariox;
    }

    public static function transaccionInterfaz($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = FiResidencia::create($dataxxxx);
            }
          //  FiResidencia::grabarOpciones($objetoxx, $dataxxxx);

            $dataxxxx['sis_tabla_id'] = 30;
            //IndicadorHelper::asignaLineaBase($dataxxxx);

            $dataxxxx['sis_tabla_id'] = 6;
            //IndicadorHelper::asignaLineaBase($dataxxxx);

            return $objetoxx;
        }, 5);
        return $usuariox;
    }

    public function i_prm_condicion_amb_id()
    {
       return $this->belongsToMany(Parametro::class,'fi_condicion_ambientes','fi_residencia_id','i_prm_condicion_amb_id');
    }

    public function i_prm_tiene_dormir()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_tiene_dormir_id');
    }

    public function i_prm_tipo_duerme()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_tipo_duerme_id');
    }

    public function i_prm_tipo_tenencia()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_tipo_tenencia_id');
    }

    public function i_prm_estrato()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_estrato_id');
    }

    public function i_prm_espacio_parcha()
    {
        return $this->belongsTo(Parametro::class, 'i_prm_espacio_parcha_id');
    }

    public function fi_condicion_ambientes()
    {
        return $this->hasMany(FiCondicionAmbiente::class);
    }
}
