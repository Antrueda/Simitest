<?php

namespace App\Models\Acciones\Individuales;

use App\Models\Acciones\Individuales\Pivotes\AiRetornoSalidaCondicion;
use Illuminate\Database\Eloquent\Model;

use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisDepen;
use App\Models\Parametro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AiRetornoSalida extends Model{
    protected $table = 'ai_retosalis';
    
    
    protected $fillable = [
        'sis_nnaj_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
        'prm_upi_id', 'fecha', 'hora_retorno', 'prm_hor_ret_id',
        'descripcion', 'observaciones', 'nombres_retorna', 'prm_doc_id',
        'doc_retorna', 'prm_parentezco_id', 'responsable', 'user_doc1_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function upis(){
        return $this->belongsTo(SisDepen::class, 'prm_upi_id');
    }

    public function horaRetorno(){
        return $this->belongsTo(Parametro::class, 'prm_hor_ret_id');
    }

    public function documento(){
        return $this->belongsTo(Parametro::class, 'prm_doc_id');
    }

    public function parentezco(){
        return $this->belongsTo(Parametro::class, 'prm_parentezco_id');
    }

    public function condicion()
    {
        return $this->hasOne(AiRetornoSalidaCondicion::class);
    }


    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            $dataxxxx['requestx']->request->add(['hora_retorno' =>  $dataxxxx['requestx']->fecha.' '.$dataxxxx['requestx']->hora_retorno]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                $dataxxxx['requestx']->request->add(['ai_retorno_salida_id' => $dataxxxx['modeloxx']->id]);
                $dataxxxx['objetoxx']=$dataxxxx['modeloxx'];
                if ($dataxxxx['modeloxx']->condicion != '') {
                    $dataxxxx['modeloxx']->condicion->update($dataxxxx['requestx']->all());
                }else{
                    AiRetornoSalidaCondicion::create($dataxxxx['requestx']->all());
                }

            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AiRetornoSalida::create($dataxxxx['requestx']->all());
                $dataxxxx['requestx']->request->add(['ai_retorno_salida_id' => $dataxxxx['modeloxx']->id]);
                $dataxxxx['objetoxx']=$dataxxxx['modeloxx'];
                AiRetornoSalidaCondicion::create($dataxxxx['requestx']->all());
            }

        return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
