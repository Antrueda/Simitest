<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiGenIngreso extends Model{

    protected $fillable = [
        'vsi_id', 'prm_actividad_id', 'trabaja', 'prm_informal_id', 'prm_otra_id', 'prm_no_id', 'cuanto', 'prm_periodo_id','prm_jornada_genera_ingreso_id', 'jornada_entre', 'prm_jor_entre_id', 'jornada_a', 'prm_jor_a_id', 'prm_frecuencia_id', 'aporte', 'prm_laboral_id', 'prm_aporta_id', 'porque', 'cuanto_aporta', 'expectativa', 'descripcion', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function actividad(){
        return $this->belongsTo(Parametro::class, 'prm_actividad_id');
    }

    public function informal(){
        return $this->belongsTo(Parametro::class, 'prm_informal_id');
    }

    public function otra(){
        return $this->belongsTo(Parametro::class, 'prm_otra_id');
    }

    public function no(){
        return $this->belongsTo(Parametro::class, 'prm_no_id');
    }

    public function periodo(){
        return $this->belongsTo(Parametro::class, 'prm_periodo_id');
    }
    public function prm_jornada_genera_ingreso(){
        return $this->belongsTo(Parametro::class, 'prm_jornada_genera_ingreso_id');
    }
    public function jorEntre(){
        return $this->belongsTo(Parametro::class, 'prm_jor_entre_id');
    }

    public function jorA(){
        return $this->belongsTo(Parametro::class, 'prm_jor_a_id');
    }

    public function frecuencia(){
        return $this->belongsTo(Parametro::class, 'prm_frecuencia_id');
    }

    public function laboral(){
        return $this->belongsTo(Parametro::class, 'prm_laboral_id');
    }

    public function aporta(){
        return $this->belongsTo(Parametro::class, 'prm_aporta_id');
    }

    public function dias(){
        return $this->belongsToMany(Parametro::class,'vsi_gening_dias', 'vsi_geningreso_id', 'parametro_id');
    }

    public function quienes(){
        return $this->belongsToMany(Parametro::class,'vsi_gening_quien', 'vsi_geningreso_id', 'parametro_id');
    }

    public function labores(){
        return $this->belongsToMany(Parametro::class,'vsi_gening_labor', 'vsi_geningreso_id', 'parametro_id');
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
            if ($dataxxxx['requestx']->prm_actividad_id == 626) {
                $dataxxxx['requestx']->request->add(['prm_informal_id' => null]);
                $dataxxxx['requestx']->request->add(['prm_otra_id'=>null]);
                $dataxxxx['requestx']->request->add(['prm_no_id'=>null]);
            }
            if ($dataxxxx['requestx']->prm_actividad_id == 627) {
                $dataxxxx['requestx']->request->add(["trabaja" => null]);
                $dataxxxx['requestx']->request->add(["prm_otra_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_no_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_laboral_id" => null]);
            }
            if ($dataxxxx['requestx']->prm_actividad_id == 628) {
                $dataxxxx['requestx']->request->add(["trabaja" => null]);
                $dataxxxx['requestx']->request->add(["prm_informal_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_no_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_laboral_id" => null]);
            }
            if ($dataxxxx['requestx']->prm_actividad_id == 853) {
                $dataxxxx['requestx']->request->add(["trabaja" => null]);
                $dataxxxx['requestx']->request->add(["prm_informal_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_otra_id" => null]);
                $dataxxxx['requestx']->request->add(["jornada_entre" => null]);
                $dataxxxx['requestx']->request->add(["prm_jor_entre_id" => null]);
                $dataxxxx['requestx']->request->add(["jornada_a" => null]);
                $dataxxxx['requestx']->request->add(["prm_jor_a_id" => null]);
                $dataxxxx['requestx']->request->add(["dias" => null]);
                $dataxxxx['requestx']->request->add(["prm_frecuencia_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_laboral_id" => null]);
                $dataxxxx['requestx']->request->add(["aporte" => null]);
                $dataxxxx['requestx']->request->add(["prm_aporta_id" => null]);
            }
            if ($dataxxxx['requestx']->prm_actividad_id != 853 && $dataxxxx['requestx']->prm_no_id != 711) {
                $dataxxxx['requestx']->request->add(["cuanto" => null]);
                $dataxxxx['requestx']->request->add(["prm_periodo_id" => null]);
            }
            if ($dataxxxx['requestx']->prm_actividad_id == 853 && $dataxxxx['requestx']->prm_aporta_id != 227) {
                $dataxxxx['requestx']->request->add(["porque" => null]);
                $dataxxxx['requestx']->request->add(["cuanto_aporta" => null]);
            }
            $dataxxxx['requestx']->user_edita_id = Auth::user()->id;
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->user_crea_id = Auth::user()->id;
                $dataxxxx['modeloxx'] = VsiGenIngreso::create($dataxxxx['requestx']->all());
            }

            $dataxxxx['modeloxx']->dias()->detach();
            if($dataxxxx['requestx']->dias){
                foreach ($dataxxxx['requestx']->dias as $d) {
                    $dataxxxx['modeloxx']->dias()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
                }
            }
            $dataxxxx['modeloxx']->quienes()->detach();
            if($dataxxxx['requestx']->quienes){
                foreach ($dataxxxx['requestx']->quienes as $d) {
                    $dataxxxx['modeloxx']->quienes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
                }
            }
            $dataxxxx['modeloxx']->labores()->detach();
            if($dataxxxx['requestx']->labores){
                foreach ($dataxxxx['requestx']->labores as $d) {
                    $dataxxxx['modeloxx']->labores()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
                }
            }

            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
