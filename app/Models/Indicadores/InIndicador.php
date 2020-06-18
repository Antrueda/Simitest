<?php

namespace App\Models\Indicadores;

use App\Models\sistema\SisCampoTabla;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InIndicador extends Model
{
  protected $fillable = [
    's_indicador',
    'area_id',
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

  public static function transaccion($dataxxxx,  $objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
      $dataxxxx['user_edita_id'] = Auth::user()->id;
      if ($objetoxx != '') {
        $objetoxx->update($dataxxxx);
      } else {
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $objetoxx = InIndicador::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }
  public function sis_campo_tabla()
  {
    return $this->belongsTo(SisCampoTabla::class);
  }
  public function in_doc_indis()
  {
    return $this->hasMany(InDocIndi::class);
  }
  public static function combo($padrexxx, $cabecera, $ajaxxxxx)
  {
    $comboxxx = [];
    if ($cabecera) {
      $comboxxx = ['' => 'Seleccione'];
    }
    $indicado = InIndicador::where('area_id', $padrexxx)->get();
    foreach ($indicado  as $registro) {
      if ($ajaxxxxx) {
        $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->s_indicador];
      } else {
        $comboxxx[$registro->id] = $registro->s_indicador;
      }
    }
    return $comboxxx;
  }
  public function area()
  {
    return $this->belongsTo(Area::class);
  }

  public function in_fuentes()
  {
    return $this->hasMany(InFuente::class);
  }

  public static function combobuscar($dataxxxx)
  {
    $comboxxx = [];

    $notinxxx = [];
    $document = InIndicador::where('id', $dataxxxx['padrexxx'])->first()->in_fuentes;
    foreach ($document as $pregunta) {
      $notinxxx[] = $pregunta->in_linea_base->id;
    }
    foreach (InLineaBase::where('s_linea_base', 'like', '%' . $dataxxxx['buscarxx'] . '%')->whereNotIn('id', $notinxxx)->get() as $registro) {
      $comboxxx[] = ['id' => $registro->id, 'label' => $registro->s_linea_base, 'value' => $registro->s_linea_base];
    }
    return $comboxxx;
  }

  public static function getIndicadores($nnajidxx, $areaidxx)
  {
    $indicado = [];
    $contador = 0;
    $nuevoxxx = 0;
    foreach (InIndicador::where('area_id', $areaidxx)->get() as $key => $indicador) {
      $pasaxxxx = false;
      $contindi = 0;
      foreach ($indicador->in_fuentes as $fue => $fuentexx) {
        $nivelxxx = '';
        switch ($fuentexx->in_linea_base->categoria->nombre) {
          case 1:
          case 2:
          case 3:
            $nivelxxx = 'BAJO';
            break;
          case 4:
          case 5:
          case 6:
            $nivelxxx = 'MEDIO';
            break;
          case 7:
          case 8:
          case 9:
            $nivelxxx = 'ALTO';
            break;
        }
        $contbase = 0;

        foreach ($fuentexx->in_base_fuentes as $doc => $documenx) {
          if (count($documenx->in_doc_preguntas) > 0) {
            foreach ($documenx->in_doc_preguntas as $pre => $pregunta) {

              $indicado[$contador] = [
                'cantindi' => 0,
                'nivelxxx' => $nivelxxx,
                'categori' => $fuentexx->in_linea_base->categoria->nombre,
                'indicado' => $indicador->s_indicador,
                'cantbase' => 0,
                'linebase' => $fuentexx->in_linea_base->s_linea_base,
                'cantdocu' => 0,
                'document' => $documenx->sis_docufuen->nombre,
                'pregunta' => $pregunta->in_pregunta->s_pregunta
              ];

              $contador++;

              $contindi++;
              $contbase++;
              $pasaxxxx = true;
            }
            if ($pasaxxxx) {
              $indicado[$contador - count($documenx->in_doc_preguntas)]['cantdocu'] = count($documenx->in_doc_preguntas);
              $indicado[$contador - $contbase]['cantbase'] = $contbase;
              if ($key == 0) {
                $indicado[$key]['cantindi'] = $contindi;
              } else {
                $indicado[$nuevoxxx]['cantindi'] = $contindi;
              }
            }
          }
        }
      }
      $nuevoxxx += $contindi;
    }

    return $indicado;
  }

  public static function getConsulta($dataxxxx)
  {
    return InIndicador::select(
      [
        'in_indicadors.id',
        'in_indicadors.s_indicador',
        'sis_actividads.id as idactivi',
        'sis_actividads.nombre as sactivid',
        'in_accion_gestions.i_porcentaje as iporcent',
        'in_accion_gestions.i_tiempo as itiempox',
        'in_lineabase_nnajs.id as idlinbas',
        'in_linea_bases.s_linea_base as slinbase',
        'stiempox.nombre as stiempox',
        'scatagor.nombre as scatagor',
        'sis_docufuens.id as idocfuen',
        'sis_docufuens.nombre as sdocumen',
        'in_preguntas.id as idpregun',
        'in_preguntas.s_pregunta as spregunt',
        'sis_fsoportes.id as idsoport',
        'sis_fsoportes.nombre as soportex',
      ]
    )
      ->join('in_fuentes', 'in_indicadors.id', '=', 'in_fuentes.in_indicador_id')
      ->join('in_linea_bases', 'in_fuentes.in_linea_base_id', '=', 'in_linea_bases.id')
      ->join('in_base_fuentes', 'in_fuentes.id', '=', 'in_base_fuentes.in_fuente_id')
      ->join('sis_docufuens', 'in_base_fuentes.sis_docufuen_id', '=', 'sis_docufuens.id')
      ->join('in_ligrus', 'in_base_fuentes.id', '=', 'in_ligrus.in_base_fuente_id')
      ->join('in_doc_preguntas', 'in_ligrus.id', '=', 'in_doc_preguntas.in_ligru_id')
      ->join('in_preguntas', 'in_doc_preguntas.in_pregunta_id', '=', 'in_preguntas.id')
      ->join('in_lineabase_nnajs', 'in_fuentes.id', '=', 'in_lineabase_nnajs.in_fuente_id')
      ->join('parametros as scatagor', 'in_lineabase_nnajs.i_prm_categoria_id', '=', 'scatagor.id')
      ->join('in_valoracions', 'in_lineabase_nnajs.id', '=', 'in_valoracions.in_lineabase_nnaj_id')
      ->join('in_accion_gestions', 'in_lineabase_nnajs.id', '=', 'in_accion_gestions.in_lineabase_nnaj_id')
      ->join('parametros as stiempox', 'in_accion_gestions.i_prm_ttiempo_id', '=', 'stiempox.id')

      ->join('in_actsoportes', 'in_accion_gestions.id', '=', 'in_actsoportes.in_accion_gestion_id')
      ->join('sis_fsoportes', 'in_actsoportes.sis_fsoporte_id', '=', 'sis_fsoportes.id')
      ->join('sis_actividads', 'sis_fsoportes.sis_actividad_id', '=', 'sis_actividads.id')
      ->where('in_lineabase_nnajs.sis_nnaj_id', $dataxxxx['nnajidxx'])
      ->get();
  }
}
