<?php

namespace App\Models;

use App\Helpers\Indicadores\IndicadorHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiCsdVsiGeneracioningresoss extends Model
{
    protected $fillable = [
        'prm_actgeing_id',
        's_trabajo_formal',
        'prm_trabinfo_id',
        'prm_otractiv_id',
        'prm_razgeing_id',
        'diabuemp',
        'mesbuemp',
        'anobuemp',
        'prm_jorgeing_id',
        's_hora_inicial',
        's_hora_final',
        'prm_frecingr_id',
        'totinmen',
        'prm_tiprelab_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
      ];

      protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'diabuemp' => 0,
      'mesbuemp' => 0, 'anobuemp' => 0, 's_trabajo_formal' => ' ',];
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
          if(isset($dataxxxx['prm_diagener_id'])){
            FiCsdVsiGeneracioningresoss::grabarDiaGenera($objetoxx,$dataxxxx);
          }

          $dataxxxx['sis_tabla_id']=15;
          //IndicadorHelper::asignaLineaBase($dataxxxx);

          $dataxxxx['sis_tabla_id']=10;
          //IndicadorHelper::asignaLineaBase($dataxxxx);

          return $objetoxx;
        }, 5);
        return $usuariox;
      }
    }
