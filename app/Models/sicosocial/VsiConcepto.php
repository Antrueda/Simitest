<?php

namespace app\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use app\Models\Parametro;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiConcepto extends Model{
    protected $fillable = ['vsi_id', 'concepto', 'prm_ingreso_id', 'porque', 'cual', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];

	protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

	public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function ingreso(){
        return $this->belongsTo(Parametro::class, 'prm_ingreso_id');
    }

    public function redes(){
        return $this->belongsToMany(Parametro::class,'vsi_concep_red', 'vsi_concepto_id', 'parametro_id');
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
                $dataxxxx['modeloxx'] = VsiConcepto::create($dataxxxx['requestx']->all());
            }

            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
