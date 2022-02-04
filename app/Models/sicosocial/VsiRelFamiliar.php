<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiRelFamiliar extends Model
{
    protected $fillable = [
        'vsi_id',
        'prm_representativa_id',
        'representativa',
        'prm_mala_id',
        'prm_relacion_id',
        'prm_gusto_id',
        'porque',
        'prm_familia_id',
        'prm_denuncia_id',
        'prm_denunante_id',
        'descripcion',
        'prm_pareja_id',
        'prm_dificultad_id',
        'dia',
        'mes',
        'ano',
        'prm_responde_id',
        'descripcion1',
        'user_crea_id' ,
        'user_edita_id',
        'sis_esta_id',
    ];

    

    public function vsi()
    {
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function representativa()
    {
        return $this->belongsTo(Parametro::class, 'prm_representativa_id');
    }

    public function mala()
    {
        return $this->belongsTo(Parametro::class, 'prm_mala_id');
    }

    public function relacion()
    {
        return $this->belongsTo(Parametro::class, 'prm_relacion_id');
    }

    public function gusto()
    {
        return $this->belongsTo(Parametro::class, 'prm_gusto_id');
    }

    public function familia()
    {
        return $this->belongsTo(Parametro::class, 'prm_familia_id');
    }

    public function denuncia()
    {
        return $this->belongsTo(Parametro::class, 'prm_denuncia_id');
    }
    public function prm_denunante()
    {
        return $this->belongsTo(Parametro::class, 'prm_denunante_id');
    }

    public function pareja()
    {
        return $this->belongsTo(Parametro::class, 'prm_pareja_id');
    }

    public function dificultad()
    {
        return $this->belongsTo(Parametro::class, 'prm_dificultad_id');
    }

    public function responde()
    {
        return $this->belongsTo(Parametro::class, 'prm_responde_id');
    }

    public function motivos()
    {
        return $this->belongsToMany(Parametro::class, 'vsi_relfam_motivo', 'vsi_relfamiliar_id', 'parametro_id');
    }

    public function famDificultades()
    {
        return $this->belongsToMany(Parametro::class, 'vsi_relfam_dificultad', 'vsi_relfamiliar_id', 'parametro_id');
    }

    public function acciones()
    {
        return $this->belongsToMany(Parametro::class, 'vsi_relfam_acciones', 'vsi_relfamiliar_id', 'parametro_id');
    }

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            if ($dataxxxx['requestx']->prm_familia_id == 228) {
                $dataxxxx['requestx']->prm_denuncia_id = null;
                $dataxxxx['requestx']->descripcion = null;
            }

            if ($dataxxxx['requestx']->prm_pareja_id == 228 || $dataxxxx['requestx']->prm_pareja_id == 235) {
                $dataxxxx['requestx']->prm_dificultad_id = null;
            }

            if (!$dataxxxx['requestx']->prm_dificultad_id || $dataxxxx['requestx']->prm_dificultad_id == 228 || $dataxxxx['requestx']->prm_pareja_id == 235) {
                $dataxxxx['requestx']->dia = null;
                $dataxxxx['requestx']->mes = null;
                $dataxxxx['requestx']->ano = null;
                $dataxxxx['requestx']->prm_responde_id = null;
                $dataxxxx['requestx']->descripcion1 = null;
            }
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = VsiRelFamiliar::create($dataxxxx['requestx']->all());

            }
            $dataxxxx['modeloxx']->motivos()->detach();
            if($dataxxxx['requestx']->motivos){
                foreach ($dataxxxx['requestx']->motivos as $d) {
                   $dataxxxx['modeloxx']->motivos()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]);
                }
            }
            $dataxxxx['modeloxx']->famDificultades()->detach();
            if($dataxxxx['requestx']->famDificultades){
                foreach ($dataxxxx['requestx']->famDificultades as $d) {
                   $dataxxxx['modeloxx']->famDificultades()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]);
                }
            }
            $dataxxxx['modeloxx']->acciones()->detach();
            if($dataxxxx['requestx']->acciones){
                foreach ($dataxxxx['requestx']->acciones as $d) {
                   $dataxxxx['modeloxx']->acciones()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]);
                }
            }


            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
