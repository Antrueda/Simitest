<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use app\Models\Parametro;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiRedSocial extends Model{
	protected $fillable = [
        'vsi_id', 'prm_presenta_id', 'prm_protector_id', 'prm_dificultad_id', 'prm_quien_id', 'prm_ruptura_genero_id', 'prm_ruptura_sexual_id', 'prm_acceso_id', 'prm_servicio_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

	public function presenta(){
        return $this->belongsTo(Parametro::class, 'prm_presenta_id');
    }

    public function protector(){
        return $this->belongsTo(Parametro::class, 'prm_protector_id');
    }

    public function dificultad(){
        return $this->belongsTo(Parametro::class, 'prm_dificultad_id');
    }

    public function quien(){
        return $this->belongsTo(Parametro::class, 'prm_quien_id');
    }

    public function rupturaGenero(){
        return $this->belongsTo(Parametro::class, 'prm_ruptura_genero_id');
    }

    public function rupturaSexual(){
        return $this->belongsTo(Parametro::class, 'prm_ruptura_sexual_id');
    }

    public function acceso(){
        return $this->belongsTo(Parametro::class, 'prm_acceso_id');
    }

    public function servicio(){
        return $this->belongsTo(Parametro::class, 'prm_servicio_id');
    }

    public function motivos(){
        return $this->belongsToMany(Parametro::class,'vsi_redsoc_motivo', 'vsi_redsocial_id', 'parametro_id');
    }

    public function accesos(){
        return $this->belongsToMany(Parametro::class,'vsi_redsoc_acceso', 'vsi_redsocial_id', 'parametro_id');
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
            if ($dataxxxx['requestx']->prm_presenta_id == 228) {
                $dataxxxx['requestx']->request->add(['prm_protector_id' => null]);
            }
            if ($dataxxxx['requestx']->prm_dificultad_id == 228) {
                $dataxxxx['requestx']->request->add(['motivos'=>[]]);
                $dataxxxx['requestx']->request->add(['prm_quien_id'=>null]);
            }
            if ($dataxxxx['requestx']->prm_acceso_id == 228) {
                $dataxxxx['requestx']->request->add(['accesos'=>[]]);
            }
            $dataxxxx['requestx']->user_edita_id = Auth::user()->id;
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->motivos()->detach();
                $dataxxxx['modeloxx']->accesos()->detach();
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->user_crea_id = Auth::user()->id;
                $dataxxxx['modeloxx'] = VsiRedSocial::create($dataxxxx['requestx']->all());
            }

            foreach ($dataxxxx['requestx']->motivos as $d) {
                $dataxxxx['modeloxx']->motivos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
            foreach ($dataxxxx['requestx']->accesos as $d) {
                $dataxxxx['modeloxx']->accesos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }

            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
