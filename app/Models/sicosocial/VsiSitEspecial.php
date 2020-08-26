<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use app\Models\Parametro;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiSitEspecial extends Model{
    protected $fillable = ['vsi_id', 'prm_victima_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id'];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function victima(){
        return $this->belongsTo(Parametro::class, 'prm_victima_id');
    }

    public function victimas(){
        return $this->belongsToMany(Parametro::class,'vsi_sitesp_victima', 'vsi_sitespecial_id', 'parametro_id');
    }

    public function riesgos(){
        return $this->belongsToMany(Parametro::class,'vsi_sitesp_riesgo', 'vsi_sitespecial_id', 'parametro_id');
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
            $dataxxxx['requestx']->user_edita_id = Auth::user()->id;
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->user_crea_id = Auth::user()->id;
                $dataxxxx['modeloxx'] = VsiSitEspecial::create($dataxxxx['requestx']->all());
            }

            $dataxxxx['modeloxx']->victimas()->detach();
            if($dataxxxx['requestx']->victimas) {
                foreach ($dataxxxx['requestx']->victimas as $d) {
                    $dataxxxx['modeloxx']->victimas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
                }
            }
            $dataxxxx['modeloxx']->riesgos()->detach();
            if ($dataxxxx['requestx']->riesgos) {
                foreach ($dataxxxx['requestx']->riesgos as $d) {
                    $dataxxxx['modeloxx']->riesgos()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
                }
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
