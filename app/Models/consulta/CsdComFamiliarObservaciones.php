<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdComFamiliarObservaciones extends Model{
    protected $fillable = [
        'csd_id', 'observaciones', 'user_crea_id', 'user_edita_id', 'sis_esta_id','prm_tipofuen_id'
    ];

    protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function getTransaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if (isset($dataxxxx['objetoxx']->observaciones->id)) {
                $dataxxxx['objetoxx']->observaciones->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;

                $dataxxxx['modeloxx'] = CsdComFamiliarObservaciones::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx;
        }, 5);
        return $objetoxx;
    }

}
