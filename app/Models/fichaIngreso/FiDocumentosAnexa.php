<?php

namespace App\Models\fichaIngreso;

use App\Helpers\Archivos\Archivos;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Tema;
class FiDocumentosAnexa extends Model {

  protected $fillable = [
      'fi_razone_id',
      'i_prm_documento_id',
      
      'user_crea_id',
      'user_edita_id',
      's_ruta',
      'sis_esta_id'
  ];
  protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

  public function creador() {
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function fi_razone() {
    return $this->belongsTo(FiRazone::class);
  }

  public function editor() {
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public static function documentos($padrexxx) {
    $vestuari = ['docanexa' => FiDocumentosAnexa::where('fi_razone_id', $padrexxx)->first(), 'formular' => false];
    if ($vestuari['docanexa'] == null) {
      $vestuari['formular'] = true;
    }
    return $vestuari;
  }

  public static function setDocumento($objetoxx, $dataxxxx) {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
              $datosxxx = [
                  'fi_razone_id' => $objetoxx->id,
                  'user_crea_id' => Auth::user()->id,
                  'user_edita_id' => Auth::user()->id,
                  'sis_esta_id' => 1,
              ];
              // dd($dataxxxx);
              FiDocumentosAnexa::where('fi_razone_id', $objetoxx->id)->delete();
              foreach ($dataxxxx['i_prm_documento_anexa_id'] as $diagener) {
                $datosxxx['i_prm_documento_anexa_id'] = $diagener;
                FiDocumentosAnexa::create($datosxxx);
              }
              return $objetoxx;
            }, 5);
  }

  public static function transaccion($dataxxxx) {
    $usuariox = DB::transaction(function () use ($dataxxxx) {
        $rutaxxxx = Archivos::getRuta(['requestx'=>$dataxxxx['requestx'],
            'nombarch'=>'s_doc_adjunto_ar',
            'rutaxxxx'=>'fi/razones','nomguard'=>'razones']);
            //ddd($rutaxxxx);
            if($rutaxxxx!=false){
               
               $dataxxxx['requestx']->request->add(['s_ruta'=> $rutaxxxx]);

            }
            $dataxxxx['requestx']->user_edita_id = Auth::user()->id;
              if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
              } else {
                $dataxxxx['requestx']->user_crea_id = Auth::user()->id;
                $dataxxxx['modeloxx'] = FiDocumentosAnexa::create($dataxxxx['requestx']->all());
              }
              return $dataxxxx['modeloxx'];
            }, 5);
    return $usuariox;
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  $temaxxxx tema que padre de los parámetros
   * @param  $cabecera indica si el combo se debe devolver con el seleccione
   * @param  $ajaxxxxx indica si el combo es para devolver en array para objeto json
   * @return $comboxxx
   */
  public static function comboTema($dataxxxx) {
    $comboxxx = [];
    if ($dataxxxx['cabecera']) {
      if ($dataxxxx['ajaxxxxx']) {
        $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
      } else {
        $comboxxx = ['' => 'Seleccione'];
      }
    }
    $temaxxxy = Tema::select(['parametros.id as valuexxx', 'parametros.nombre as optionxx'])
                    ->join('parametro_tema', 'temas.id', '=', 'parametro_tema.tema_id')
                    ->join('parametros', 'parametro_tema.parametro_id', '=', 'parametros.id')
                    ->where(function ($queryxxx) use($dataxxxx) {
                      $queryxxx->where('temas.id', $dataxxxx['temaxxxx']);
                      $document = FiDocumentosAnexa::where('fi_razone_id', $dataxxxx['razonesx'])->get();
                      $notinxxx = [];
                      foreach ($document as $documenx) {
                        if ($documenx->i_prm_documento_id != $dataxxxx['selected']) {
                          $notinxxx[] = $documenx->i_prm_documento_id;
                        }
                      }
                      $queryxxx->whereNotIn('parametros.id', $notinxxx);
                    }
                    )->get();
    foreach ($temaxxxy as $registro) {
      if ($dataxxxx['ajaxxxxx']) {
        $comboxxx[] = ['valuexxx' => $registro->valuexxx, 'optionxx' => $registro->optionxx];
      } else {
        $comboxxx[$registro->valuexxx] = $registro->optionxx;
      }
    }
    return $comboxxx;
  }

}
