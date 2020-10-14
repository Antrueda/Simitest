<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdGeningAporta extends Model{
	protected $fillable = ['csd_id', 'prm_aporta_id', 'mensual', 'aporte', 'jornada_entre', 'prm_entre_id', 'jornada_a', 'prm_a_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id','prm_tipofuen_id'];

    protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }
    
    public function aporta(){
        return $this->belongsTo(Parametro::class, 'prm_aporta_id');
    }

    public function entre(){
        return $this->belongsTo(Parametro::class, 'prm_entre_id');
    }

    public function a(){
        return $this->belongsTo(Parametro::class, 'prm_a_id');
    }

    public function dias(){
        return $this->belongsToMany(Parametro::class,'csd_gening_dias', 'csd_geningreso_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function transaccion($dataxxxx,$objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            $dataxxxx['prm_tipofuen_id'] = 2315;
            $dataxxxx['sis_esta_id'] = 1;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = CsdGeningAporta::create($dataxxxx);
            }
            $objetoxx->dias()->detach();
            if($dataxxxx['dias']){
                foreach ($dataxxxx['dias'] as $d) {
                    $objetoxx->dias()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
                }
            }

         return $objetoxx;
        }, 5);
        return $usuariox;
    }

}