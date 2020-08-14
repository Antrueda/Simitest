<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisPai;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiComposicionFami extends Model
{
  protected $fillable = [
    's_primer_nombre',
    's_segundo_nombre',
    's_primer_apellido',
    's_segundo_apellido',
    's_nombre_identitario',
    's_telefono',
    's_documento',
    'd_nacimiento',
    'i_prm_parentesco_id',
    'sis_pai_id',
    'sis_departamento_id',
    'sis_municipio_id',
    'i_prm_ocupacion_id',
    'i_prm_vinculado_idipron_id',
    'i_prm_convive_nnaj_id',
    'fi_nucleo_familiar_id',
    'user_crea_id',
    'user_edita_id',
    'prm_documento_id',
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
  public static function composicion($usuariox)
  {
    $vestuari = ['composic' => FiComposicionFami::where('', $usuariox)->first(), 'formular' => false];

    if ($vestuari['composic'] == null) {
      $vestuari['formular'] = true;
    }
    return $vestuari;
  }

  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['s_primer_nombre'] = strtoupper($dataxxxx['s_primer_nombre']);
      $dataxxxx['s_segundo_nombre'] = strtoupper($dataxxxx['s_segundo_nombre']);
      $dataxxxx['s_primer_apellido'] = strtoupper($dataxxxx['s_primer_apellido']);
      $dataxxxx['s_segundo_apellido'] = strtoupper($dataxxxx['s_segundo_apellido']);
      $dataxxxx['s_nombre_identitario'] = strtoupper($dataxxxx['s_nombre_identitario']);
      $dt = new DateTime($dataxxxx['d_nacimiento']);
      $dataxxxx['d_nacimiento'] = $dt->format('Y-m-d');
      $dataxxxx['user_edita_id'] = Auth::user()->id;

      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $nnajxxxx = FiDatosBasico::where('fi_nucleo_familiar_id', $dataxxxx['fi_nucleo_familiar_id'])->first();
        $dataxxxx['fi_nucleo_familiar_id'] = $nnajxxxx->fi_nucleo_familiar_id;
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = FiComposicionFami::create($dataxxxx);
      }

      $dataxxxx['sis_tabla_id']=5;
      IndicadorHelper::asignaLineaBase($dataxxxx);

      return $objetoxx;
    }, 5);
    return $objetoxx;
  }

  public static function combo($padrexxx, $cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      $comboxxx = ['' => 'Seleccione'];
    }
    foreach (FiComposicionFami::where('fi_nucleo_familiar_id', $padrexxx->fi_nucleo_familiar_id)->get() as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = [
          'valuexxx' => $registro->id,
          'optionxx' => $registro->s_primer_nombre . ' ' . $registro->s_segundo_nombre . ' ' .
            $registro->s_primer_apellido . ' ' . $registro->s_segundo_apellido
        ];
      } else {
        $comboxxx[$registro->id] = $registro->s_primer_nombre . ' ' . $registro->s_segundo_nombre . ' ' .
          $registro->s_primer_apellido . ' ' . $registro->s_segundo_apellido;
      }
    }
    return $comboxxx;
  }

  /**
   * Este método comprueba si existe un componte familiar mayor de edad para que sea el responsable del NNAJ
   */
  public static function getComboResponsable($padrexxx, $cabecera, $ajaxxxxx,$edadxxxx)
  {
    $redirect=true;
    $comboxxx = [];
    if ($cabecera &&$edadxxxx<18) {
      $comboxxx = ['' => 'Seleccione'];
    }
    $compofam=FiComposicionFami::where(function($consulta) use($padrexxx,$edadxxxx){
      $consulta->where('fi_nucleo_familiar_id', $padrexxx->fi_nucleo_familiar_id);
      if($edadxxxx>=18){
        $consulta->where('i_prm_parentesco_id', 805);
      }
      return $consulta;

    })->get();
    foreach ($compofam as $registro) {
      $edad = Carbon::parse($registro->d_nacimiento)->age;
      if ($edad >= 18) {
        if ($ajaxxxxx) {
          $comboxxx[] = [
            'valuexxx' => $registro->id,
            'optionxx' => $registro->s_primer_nombre . ' ' . $registro->s_segundo_nombre . ' ' .
              $registro->s_primer_apellido . ' ' . $registro->s_segundo_apellido
          ];
        } else {
          $comboxxx[$registro->id] = $registro->s_primer_nombre . ' ' . $registro->s_segundo_nombre . ' ' .
            $registro->s_primer_apellido . ' ' . $registro->s_segundo_apellido;
        }
        $redirect=false;
      }
    }
    return [$redirect,$comboxxx];
  }
  public function sis_pai(){
    return $this->belongsTo(SisPai::class);
  }
  public function sis_departamento(){
    return $this->belongsTo(SisDepartamento::class);
  }
  public function sis_municipio(){
    return $this->belongsTo(SisMunicipio::class);
  }
}
