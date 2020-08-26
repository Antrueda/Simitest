<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use app\Models\Parametro;
use App\Models\Sistema\SisBarrio;
use app\Models\User;

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
    's_complemento',
    'sis_localidad_id',
    'sis_upz_id',
    'sis_barrio_id',
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
public function sis_barrio()
  {
    return $this->belongsTo(SisBarrio::class, 'sis_barrio_id');
  }
  public function getTelefonosAttribute(){
    return $this->s_telefono_uno . ' ' . $this->s_telefono_dos . ' ' . $this->s_telefono_tres;
  }

  public function getDireccionAttribute(){
    $dir = (!is_null($this->i_prm_tipo_via_id)) ? ' '.$this->tipoVia->nombre : '';
    $dir .= (!is_null($this->s_nombre_via)) ? ' '.$this->s_nombre_via : '';
    $dir .= (!is_null($this->i_prm_alfabeto_via_id)) ? ' '.$this->alfabetoVia->nombre : '';
    $dir .= (!is_null($this->i_prm_tiene_bis_id)) ? ' bis' : '';
    $dir .= (!is_null($this->i_prm_bis_alfabeto_id)) ? ' '.$this->bisAlfabeto->nombre : '';
    $dir .= (!is_null($this->i_prm_cuadrante_vp_id)) ? ' '.$this->cuadranteVp->nombre : '';
    $dir .= (!is_null($this->i_via_generadora)) ? ' Nº '.$this->i_via_generadora : '';
    $dir .= (!is_null($this->i_prm_alfabetico_vg_id)) ? ' '.$this->alfabeticoVg->nombre : '';
    $dir .= (!is_null($this->i_placa_vg)) ? ' - '.$this->i_placa_vg : '';
    $dir .= (!is_null($this->i_prm_cuadrante_vg_id)) ? ' '.$this->cuadranteVg->nombre : '';
    return $dir;
  }

  public function tipoVia(){
    return $this->belongsTo(Parametro::class, 'i_prm_tipo_via_id');
  }

  public function alfabetoVia(){
    return $this->belongsTo(Parametro::class, 'i_prm_alfabeto_via_id');
  }

  public function bisAlfabeto(){
    return $this->belongsTo(Parametro::class, 'i_prm_bis_alfabeto_id');
  }

  public function cuadranteVp(){
    return $this->belongsTo(Parametro::class, 'i_prm_cuadrante_vp_id');
  }

  public function alfabeticoVg(){
    return $this->belongsTo(Parametro::class, 'i_prm_alfabetico_vg_id');
  }

  public function cuadranteVg(){
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

      $dataxxxx['sis_tabla_id']=30;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      $dataxxxx['sis_tabla_id']=6;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      return $objetoxx;
    }, 5);
    return $usuariox;
  }
}
