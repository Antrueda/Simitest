<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use app\Models\Parametro;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiEducacion extends Model{
	protected $fillable = ['vsi_id', 'prm_estudia_id', 'dia', 'mes', 'ano', 'prm_motivo_id', 'prm_rendimiento_id', 'prm_dificultad_id', 'prm_leer_id', 'prm_escribir_id', 'descripcion', 'user_crea_id', 'user_edita_id', 'sis_esta_id'];

	protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

	public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function estudia(){
        return $this->belongsTo(Parametro::class, 'prm_estudia_id');
    }

    public function motivo(){
        return $this->belongsTo(Parametro::class, 'prm_motivo_id');
    }

    public function rendimiento(){
        return $this->belongsTo(Parametro::class, 'prm_rendimiento_id');
    }

    public function dificultad(){
        return $this->belongsTo(Parametro::class, 'prm_dificultad_id');
    }

    public function leer(){
        return $this->belongsTo(Parametro::class, 'prm_leer_id');
    }

    public function escribir(){
        return $this->belongsTo(Parametro::class, 'prm_escribir_id');
    }

    public function causas(){
        return $this->belongsToMany(Parametro::class,'vsi_edu_causa', 'vsi_educacion_id', 'parametro_id');
    }

    public function fortalezas(){
        return $this->belongsToMany(Parametro::class,'vsi_edu_fortaleza', 'vsi_educacion_id', 'parametro_id');
    }

    public function dificultades(){
        return $this->belongsToMany(Parametro::class,'vsi_edu_dificultad', 'vsi_educacion_id', 'parametro_id');
    }

    public function dificultadesa(){
        return $this->belongsToMany(Parametro::class,'vsi_edu_diftipo_a', 'vsi_educacion_id', 'parametro_id');
    }

    public function dificultadesb(){
        return $this->belongsToMany(Parametro::class,'vsi_edu_diftipo_b', 'vsi_educacion_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            if ($dataxxxx['requestx']->prm_estudia_id == 227) {
                $dataxxxx['requestx']->request->add(["dia" => null]);
                $dataxxxx['requestx']->request->add(["mes" => null]);
                $dataxxxx['requestx']->request->add(["ano" => null]);
                $dataxxxx['requestx']->request->add(["prm_motivo_id" => null]);
            }
            if ($dataxxxx['requestx']->prm_dificultad_id == 228) {
                $dataxxxx['requestx']->request->add(["prm_leer_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_escribir_id" => null]);
            }


            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = VsiEducacion::create($dataxxxx['requestx']->all());
            }
            $dataxxxx['modeloxx']->fortalezas()->detach();
        if($dataxxxx['requestx']->fortalezas){
            foreach ($dataxxxx['requestx']->fortalezas as $d) {
                $dataxxxx['modeloxx']->fortalezas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dataxxxx['modeloxx']->dificultades()->detach();
        if($dataxxxx['requestx']->dificultades){
            foreach ($dataxxxx['requestx']->dificultades as $d) {
                $dataxxxx['modeloxx']->dificultades()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dataxxxx['modeloxx']->dificultadesa()->detach();
        if($dataxxxx['requestx']->dificultadesa){
            foreach ($dataxxxx['requestx']->dificultadesa as $d) {
                $dataxxxx['modeloxx']->dificultadesa()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
        $dataxxxx['modeloxx']->dificultadesb()->detach();
        if($dataxxxx['requestx']->dificultadesb){
            foreach ($dataxxxx['requestx']->dificultadesb as $d) {
                $dataxxxx['modeloxx']->dificultadesb()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
        }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
