<?php

namespace App\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;

class CsdReshogar extends Model
{
    protected $table = 'csd_reshogars';

    protected $fillable = [ 'prm_bano_id',
    'banocant',
    'prm_comedor_id',
    'comedorcant',
    'prm_sala_id',
    'salacant',
    'salacomcant',
    'prm_cocina_id',
    'cocinacant',
    'prm_habita_id',
    'habitacant',
    'prm_patio_id',
    'patiocant', 
    'csd_residencia_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'];


    public function csd_residencia()
    {
      return $this->belongsTo(CsdResidencia::class);
    }

    public function prm_bano()
    {
      return $this->belongsTo(Parametro::class,'prm_bano_id');
    }

    public function prm_comedor()
    {
      return $this->belongsTo(Parametro::class);
    }

    public function prm_sala()
    {
      return $this->belongsTo(Parametro::class);
    }

    public function prm_cocina()
    {
      return $this->belongsTo(Parametro::class);
    }

    public function prm_habita()
    {
      return $this->belongsTo(Parametro::class);
    }
    public function prm_patio()
    {
      return $this->belongsTo(Parametro::class);
    }

    public function creador()
    {
      return $this->belongsTo(User::class, 'user_crea_id');
    }
  
    public function editor()
    {
      return $this->belongsTo(User::class, 'user_edita_id');
    }


    public static function actividades($padrexxx)
    {
        $vestuari = ['activitl' => FiActividadTiempoLibre::where('fi_actividadestl_id', $padrexxx)->first(), 'formular' => false];
        if ($vestuari['activitl'] == null) {
            $vestuari['formular'] = true;
        }
        return $vestuari;
    }
    public static function setActividadtl($objetoxx, $dataxxxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $datosxxx = [
                'fi_actividadestl_id' => $objetoxx->id,
                'user_crea_id' => Auth::user()->id,
                'user_edita_id' => Auth::user()->id,
                'sis_esta_id' => 1,
            ];
            // dd($dataxxxx);
            FiActividadTiempoLibre::where('fi_actividadestl_id', $objetoxx->id)->delete();
            foreach ($dataxxxx['i_prm_actividad_tl_id'] as $diagener) {
                $datosxxx['i_prm_actividad_tl_id'] = $diagener;
                FiActividadTiempoLibre::create($datosxxx);
            }
            return $objetoxx;
        }, 5);
    }
}
