<?php

namespace App\Models\sicosocial;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiAbuSexual extends Model{
	protected $fillable = [
        'vsi_id', 'prm_evento_id', 'dia', 'mes', 'ano', 'prm_momento_id', 'prm_persona_id', 'prm_tipo_id', 'dia_ult', 'mes_ult', 'ano_ult', 'prm_momento_ult_id', 'prm_persona_ult_id', 'prm_tipo_ult_id', 'prm_convive_id', 'prm_presencia_id', 'prm_reconoce_id', 'prm_apoyo_id', 'prm_denuncia_id', 'prm_terapia_id', 'prm_estado_id', 'informacion', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function evento(){
        return $this->belongsTo(Parametro::class, 'prm_evento_id');
    }

    public function momento(){
        return $this->belongsTo(Parametro::class, 'prm_momento_id');
    }

    public function persona(){
        return $this->belongsTo(Parametro::class, 'prm_persona_id');
    }

    public function tipo(){
        return $this->belongsTo(Parametro::class, 'prm_tipo_id');
    }

    public function momentoUlt(){
        return $this->belongsTo(Parametro::class, 'prm_momento_ult_id');
    }

    public function personaUlt(){
        return $this->belongsTo(Parametro::class, 'prm_persona_ult_id');
    }

    public function tipoUlt(){
        return $this->belongsTo(Parametro::class, 'prm_tipo_ult_id');
    }

    public function convive(){
        return $this->belongsTo(Parametro::class, 'prm_convive_id');
    }

    public function presencia(){
        return $this->belongsTo(Parametro::class, 'prm_presencia_id');
    }

    public function reconoce(){
        return $this->belongsTo(Parametro::class, 'prm_reconoce_id');
    }

    public function apoyo(){
        return $this->belongsTo(Parametro::class, 'prm_apoyo_id');
    }

    public function denuncia(){
        return $this->belongsTo(Parametro::class, 'prm_denuncia_id');
    }

    public function terapia(){
        return $this->belongsTo(Parametro::class, 'prm_terapia_id');
    }

    public function estado(){
        return $this->belongsTo(Parametro::class, 'prm_estado_id');
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

            if($dataxxxx['requestx']->prm_evento_id == 228) {
                $dataxxxx['requestx']->request->add(["dia" => null]);
                $dataxxxx['requestx']->request->add(["mes" => null]);
                $dataxxxx['requestx']->request->add(["ano" => null]);
                $dataxxxx['requestx']->request->add(["prm_momento_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_persona_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_tipo_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_terapia_id" => null]);
            }
            if($dataxxxx['requestx']->prm_momento_id == 1013) {
                $dataxxxx['requestx']->request->add(["dia_ult" => null]);
                $dataxxxx['requestx']->request->add(["mes_ult" => null]);
                $dataxxxx['requestx']->request->add(["ano_ult" => null]);
                $dataxxxx['requestx']->request->add(["prm_momento_ult_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_persona_ult_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_tipo_ult_id" => null]);
            }

            if ($dataxxxx['requestx']->prm_tipo_id == 338) {
                $dataxxxx['requestx']->request->add(["prm_convive_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_presencia_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_reconoce_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_apoyo_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_denuncia_id" => null]);
                $dataxxxx['requestx']->request->add(["prm_terapia_id" => null]);
                $dataxxxx['requestx']->request->add(["informacion" => null]);
            }

            $dataxxxx['requestx']->user_edita_id = Auth::user()->id;
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->user_crea_id = Auth::user()->id;
                $dataxxxx['modeloxx'] = VsiAbuSexual::create($dataxxxx['requestx']->all());
            }

            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
