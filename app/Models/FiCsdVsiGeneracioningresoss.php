<?php

namespace App\Models;

use App\Helpers\Indicadores\IndicadorHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiCsdVsiGeneracioningresoss extends Model
{
    protected $fillable = [
        'i_prm_actividad_genera_ingreso_id',
        's_trabajo_formal',
        'i_prm_trabajo_informal_id',
        'i_prm_otra_actividad_id',
        'i_prm_razon_no_genera_ingreso_id',
        'i_dias_buscando_empleo',
        'i_meses_buscando_empleo',
        'i_anos_buscando_empleo',
        'i_prm_jornada_genera_ingreso_id',
        's_hora_inicial',
        's_hora_final',
        'i_prm_frec_ingreso_id',
        'i_total_ingreso_mensual',
        'i_prm_tipo_relacion_laboral_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
      ];
    
      protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'i_dias_buscando_empleo' => 0,
      'i_meses_buscando_empleo' => 0, 'i_anos_buscando_empleo' => 0, 's_trabajo_formal' => ' ',];
      public function creador()
      {
        return $this->belongsTo(User::class, 'user_crea_id');
      }
    
      public function editor()
      {
        return $this->belongsTo(User::class, 'user_edita_id');
      }
      public static function generacion($usuariox)
      {
        $vestuari = ['geneingr' => FiCsdVsiGeneracioningresoss::where('sis_nnaj_id', $usuariox)->first(), 'formular' => false,'diasgene'=>[]];
    
        if ($vestuari['geneingr'] == null) {
          $vestuari['formular'] = true;
        }else{
          $vestuari['diasgene']=$vestuari['geneingr']->fi_dias_genera_ingresos;
        }
        return $vestuari;
      }

    
      public static function transaccion($dataxxxx,  $objetoxx)
      {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
          $dataxxxx['user_edita_id'] = Auth::user()->id;
          if ($objetoxx != '') {
            $objetoxx->update($dataxxxx);
          } else {
            $dataxxxx['user_crea_id'] = Auth::user()->id;
            $objetoxx = FiCsdVsiGeneracioningresoss::create($dataxxxx);
          }
          if(isset($dataxxxx['i_prm_dia_genera_id'])){
            FiCsdVsiGeneracioningresoss::grabarDiaGenera($objetoxx,$dataxxxx);
          }
    
          $dataxxxx['sis_tabla_id']=15;
          IndicadorHelper::asignaLineaBase($dataxxxx);
    
          $dataxxxx['sis_tabla_id']=10;
          IndicadorHelper::asignaLineaBase($dataxxxx);
    
          return $objetoxx;
        }, 5);
        return $usuariox;
      }
    }
