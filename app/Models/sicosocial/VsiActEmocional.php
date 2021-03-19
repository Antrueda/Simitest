<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiActEmocional extends Model{
	protected $fillable = ['vsi_id', 'prm_activa_id', 'descripcion', 'conductual', 'cognitiva', 'user_crea_id', 'user_edita_id', 'sis_esta_id'];

	

	public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function activa(){
        return $this->belongsTo(Parametro::class, 'prm_activa_id');
    }

    public function fisiologicas(){
        return $this->belongsToMany(Parametro::class,'vsi_actemo_fisiologica', 'vsi_actemocional_id', 'parametro_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            if ($dataxxxx['requestx']->prm_activa_id == 228) {
                $dataxxxx['requestx']->request->add(["descripcion" => null]);
                $dataxxxx['requestx']->request->add(["conductual" => null]);
                $dataxxxx['requestx']->request->add(["cognitiva" => null]);
            }


            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = VsiActEmocional::create($dataxxxx['requestx']->all());
            }
            $dataxxxx['modeloxx']->fisiologicas()->detach();
            if($dataxxxx['requestx']->fisiologicas){
                foreach ($dataxxxx['requestx']->fisiologicas as $d) {
                    $dataxxxx['modeloxx']->fisiologicas()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]);
                }
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
