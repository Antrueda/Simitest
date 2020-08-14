<?php

namespace App\Models\intervencion;

use App\Models\Parametro;
use App\Models\Sistema\SisUsuarioActividad;
use App\Models\Sistema\SisNnaj;
use App\Models\User;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IsDatosBasico extends Model
{
    protected $fillable = [
        'sis_depen_id',
        'd_fecha_diligencia',
        'i_prm_tipo_atencion_id',
        'i_prm_area_ajuste_id',
        'i_prm_subarea_ajuste_id',
        's_tema',
        's_objetivo_sesion',
        's_desarrollo_sesion',
        's_conclusiones_sesion',
        's_tareas',
        'i_prm_subarea_emocional_id',
        'i_prm_avance_emocional_id',
        'i_prm_subarea_familiar_id',
        'i_prm_avance_familiar_id',
        'i_prm_subarea_sexual_id',
        'i_prm_avance_sexual_id',
        'i_prm_subarea_compor_id',
        'i_prm_avance_compor_id',
        'i_prm_subarea_social_id',
        'i_prm_avance_social_id',
        'i_prm_subarea_academ_id',
        'i_prm_avance_academ_id',
        'i_prm_area_emocional_id',
        'i_prm_area_sexual_id',
        'i_prm_area_comportam_id',
        'i_prm_area_academica_id',
        'i_prm_area_social_id',
        'i_prm_area_familiar_id',
        's_observaciones',
        'd_fecha_proxima',
        'i_primer_responsable',
        'i_segundo_responsable',
        'sis_nnaj_id',
        'user_crea_id', 
        'user_edita_id',
        'sis_esta_id'
    ];

    // public static function usregisro($usuariox)
    // {
    //     $usuariox = IsDatosBasico::ucreaedita($usuariox);
    //     return  $usuariox->s_primer_nombre . ' ' .
    //         $usuariox->s_segundo_nombre . ' ' .
    //         $usuariox->s_primer_apellido . ' ' .
    //         $usuariox->s_segundo_apellido;
    // }

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function is_proxima_area_ajustes()
    {
    return $this->hasMany(IsProximaAreaAjuste::class);
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    // public function sis_usuario_actividad()
    // {
    //     return $this->belongsTo(SisUsuarioActividad::class);
    // }

    public function SisNnaj()
    {
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public static function usarioNnaj($idxxxxxx)
    {
        return IsDatosBasico::where('id', $idxxxxxx)->first();
    }

    public static function getAreajuste($objetoxx)
    {
      $vestuari = ['areajusx' => [], 'formular' => false];
  
      if ($objetoxx == '') {
        $vestuari['formular'] = true;
      } else {
        $vestuari['areajusx'] = $objetoxx->is_proxima_area_ajustes;
      }
      return $vestuari;
    }

    private static function grabarProximaArea($proxiarea,$dataxxxx){
        $datosxxx=[
          'is_datos_basico_id'=>$proxiarea->id, 
          'user_crea_id'=>Auth::user()->id, 
          'user_edita_id'=>Auth::user()->id,
          'sis_esta_id'=>1,
        ];
        IsProximaAreaAjuste::where('is_datos_basico_id', $proxiarea->id)->delete();
        foreach($dataxxxx['i_prm_area_proxima_id'] as $proximare){
          $datosxxx['i_prm_area_proxima_id']=$proximare;
          IsProximaAreaAjuste::create($datosxxx);
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
                $objetoxx = IsDatosBasico::create($dataxxxx);
            }

            if(isset($dataxxxx['i_prm_area_proxima_id'])){
                IsDatosBasico::grabarProximaArea($objetoxx,$dataxxxx);
              }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
