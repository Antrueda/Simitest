<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiConsumo extends Model{
    protected $fillable = [
        'vsi_id', 'prm_consumo_id', 'cantidad', 'inicio', 'prm_contexto_ini_id', 'prm_consume_id', 'prm_contexto_man_id', 'prm_problema_id', 'porque', 'prm_motivo_id', 'prm_familia_id', 'descripcion', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
    ];

    

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function consumo(){
        return $this->belongsTo(Parametro::class, 'prm_consumo_id');
    }

    public function contextoIni(){
        return $this->belongsTo(Parametro::class, 'prm_contexto_ini_id');
    }

    public function consume(){
        return $this->belongsTo(Parametro::class, 'prm_consume_id');
    }

    public function contextoMan(){
        return $this->belongsTo(Parametro::class, 'prm_contexto_man_id');
    }

    public function problema(){
        return $this->belongsTo(Parametro::class, 'prm_problema_id');
    }

    public function motivo(){
        return $this->belongsTo(Parametro::class, 'prm_motivo_id');
    }

    public function familia(){
        return $this->belongsTo(Parametro::class, 'prm_familia_id');
    }

    public function quienes(){
        return $this->belongsToMany(Parametro::class,'vsi_consumo_quien', 'vsi_consumo_id', 'parametro_id');
    }

    public function expectativas(){
        return $this->belongsToMany(Parametro::class,'vsi_consumo_expectativa', 'vsi_consumo_id', 'parametro_id');
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
            if($dataxxxx['requestx']->prm_consumo_id == 228){
                $dataxxxx['requestx']->request->add(['cantidad' => null]);
                $dataxxxx['requestx']->request->add(['inicio' => null]);
                $dataxxxx['requestx']->request->add(['prm_contexto_ini_id' => null]);
                $dataxxxx['requestx']->request->add(['prm_consume_id' => null]);
            }
            if($dataxxxx['requestx']->prm_consume_id != 227){
                $dataxxxx['requestx']->request->add(['prm_contexto_man_id' => null]);
                $dataxxxx['requestx']->request->add(['prm_problema_id' => null]);
                $dataxxxx['requestx']->request->add(['porque' => null]);
                $dataxxxx['requestx']->request->add(['prm_motivo_id' => null]);
                $dataxxxx['requestx']->request->add(['expectativas' => null]);
            }
            if($dataxxxx['requestx']->prm_consumo_id == 228){
                $dataxxxx['requestx']->request->add(['quienes' => null]);
            }

            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = VsiConsumo::create($dataxxxx['requestx']->all());
            }
            $dataxxxx['modeloxx']->quienes()->detach();
            if($dataxxxx['requestx']->quienes){
                foreach ($dataxxxx['requestx']->quienes as $d) {
                    $dataxxxx['modeloxx']->quienes()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]);
                
                }
            }
            $dataxxxx['modeloxx']->expectativas()->detach();
            if($dataxxxx['requestx']->expectativas){
                foreach ($dataxxxx['requestx']->expectativas as $d) {
                    $dataxxxx['modeloxx']->expectativas()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id]);
                }
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
