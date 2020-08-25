<?php

namespace app\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use app\Models\Parametro;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiSalud extends Model{
	protected $fillable = ['vsi_id', 'prm_atencion_id', 'prm_condicion_id', 'prm_medicamento_id', 'prm_prescripcion_id', 'prm_sexual_id', 'prm_activa_id', 'prm_embarazo_id', 'prm_hijo_id', 'prm_interrupcion_id', 'medicamento', 'descripcion', 'edad', 'embarazo', 'hijo', 'interrupcion', 'user_crea_id', 'user_edita_id', 'sis_esta_id'];

	protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function atencion(){
        return $this->belongsTo(Parametro::class, 'prm_atencion_id');
    }

    public function condicion(){
        return $this->belongsTo(Parametro::class, 'prm_condicion_id');
    }

    public function medicamento(){
        return $this->belongsTo(Parametro::class, 'prm_medicamento_id');
    }

    public function prescripcion(){
        return $this->belongsTo(Parametro::class, 'prm_prescripcion_id');
    }

    public function sexual(){
        return $this->belongsTo(Parametro::class, 'prm_sexual_id');
    }

    public function activa(){
        return $this->belongsTo(Parametro::class, 'prm_activa_id');
    }

    public function embarazo(){
        return $this->belongsTo(Parametro::class, 'prm_embarazo_id');
    }

    public function hijo(){
        return $this->belongsTo(Parametro::class, 'prm_hijo_id');
    }

    public function interrupcion(){
        return $this->belongsTo(Parametro::class, 'prm_interrupcion_id');
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
            if ( $dataxxxx['requestx']->prm_atencion_id == 228) {
                 $dataxxxx['requestx']->request->add(["prm_condicion_id" => null]);
            }
            if ( $dataxxxx['requestx']->prm_medicamento_id == 228) {
                 $dataxxxx['requestx']->request->add(["medicamento" => null]);
                 $dataxxxx['requestx']->request->add(["prm_prescripcion_id" => null]);
                 $dataxxxx['requestx']->request->add(["descripcion" => null]);
            }
            if ( $dataxxxx['requestx']->prm_sexual_id == 228) {
                 $dataxxxx['requestx']->request->add(["edad" => null]);
                 $dataxxxx['requestx']->request->add(["prm_activa_id" => null]);
                 $dataxxxx['requestx']->request->add(["prm_embarazo_id" => null]);
                 $dataxxxx['requestx']->request->add(["embarazo" => null]);
                 $dataxxxx['requestx']->request->add(["prm_hijo_id" => null]);
                 $dataxxxx['requestx']->request->add(["hijo" => null]);
                 $dataxxxx['requestx']->request->add(["prm_interrupcion_id" => null]);
                 $dataxxxx['requestx']->request->add(["interrupcion" => null]);
            }
            if ( $dataxxxx['requestx']->prm_embarazo_id == 228) {
                 $dataxxxx['requestx']->request->add(["embarazo" => null]);
            }
            if ( $dataxxxx['requestx']->prm_hijo_id == 228) {
                 $dataxxxx['requestx']->request->add(["hijo" => null]);
            }
            if ( $dataxxxx['requestx']->prm_interrupcion_id == 228) {
                 $dataxxxx['requestx']->request->add(["interrupcion" => null]);
            }
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = VsiSalud::create($dataxxxx['requestx']->all());
            }

            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
