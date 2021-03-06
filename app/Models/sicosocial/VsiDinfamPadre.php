<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiDinfamPadre extends Model{
    protected $fillable = ['vsi_id', 'prm_convive_id', 'dia', 'mes', 'ano', 'hijo', 'prm_separa_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id'];

//    protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function convive(){
        return $this->belongsTo(Parametro::class, 'prm_convive_id');
    }

    public function separa(){
        return $this->belongsTo(Parametro::class, 'prm_separa_id');
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
                $dataxxxx['modeloxx'] = VsiDinfamPadre::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
