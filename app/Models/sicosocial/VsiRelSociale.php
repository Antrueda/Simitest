<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use app\Models\Parametro;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiRelSociale extends Model{

    protected $fillable = [
        'vsi_id', 'descripcion', 'prm_dificultad_id', 'completa', 'user_crea_id', 'user_edita_id',
        'sis_esta_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function dificultad(){
        return $this->belongsTo(Parametro::class, 'prm_dificultad_id');
    }

    public function facilitas(){
        return $this->belongsToMany(Parametro::class,'vsi_relsol_facilita', 'vsi_relsocial_id', 'parametro_id');
    }

    public function dificultades(){
        return $this->belongsToMany(Parametro::class,'vsi_relsol_dificulta', 'vsi_relsocial_id', 'parametro_id');
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
            if (in_array(689, $dataxxxx['requestx']->dificultades)) {
                $dataxxxx['requestx']->request->add(['prm_dificultad_id' => null]);
                $dataxxxx['requestx']->request->add(['completa' => null]);
            }
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = VsiRelSociale::create($dataxxxx['requestx']->all());
            }

            $dataxxxx['modeloxx']->facilitas()->detach();
            foreach ($dataxxxx['requestx']->facilitas as $d) {
                $dataxxxx['modeloxx']->facilitas()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
            $dataxxxx['modeloxx']->dificultades()->detach();
            foreach ($dataxxxx['requestx']->dificultades as $d) {
                $dataxxxx['modeloxx']->dificultades()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }


}
