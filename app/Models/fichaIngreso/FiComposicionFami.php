<?php

namespace App\Models\fichaIngreso;

use App\Models\User;
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
    'i_prm_ocupacion_id',
    'i_prm_vinculado_idipron_id',
    'i_prm_convive_nnaj_id',
    'fi_nucleo_familiar_id',
    'sis_nnaj_id',
    'user_crea_id',
    'user_edita_id',
    'prm_documento_id',
    'activo'
  ];

  protected $attributes = ['activo' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
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
    $vestuari = ['composic' => FiComposicionFami::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false];

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
        $nnajxxxx = FiDatosBasico::where('sis_nnaj_id', $dataxxxx['sis_nnaj_id'])->first();
        $dataxxxx['fi_nucleo_familiar_id'] = $nnajxxxx->fi_nucleo_familiar_id;
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = FiComposicionFami::create($dataxxxx);
      }

      return $objetoxx;
    }, 5);
    return $objetoxx;
  }

  public static function combo($padrexxx,$cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      $comboxxx = ['' => 'Seleccione'];
    }
    foreach (FiComposicionFami::where('fi_nucleo_familiar_id',$padrexxx->fi_nucleo_familiar_id)->get() as $registro) {
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
}
