<?php

namespace App\Models\Acciones\Individuales;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisDepen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AiSalidaMayores extends Model{
    
    protected $fillable = [
        'sis_nnaj_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'fecha', 'prm_upi_id', 'descripcion', 'user_doc1_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function upi(){
        return $this->belongsTo(SisDepen::class, 'prm_upi_id');
    }

    public function razones(){
        return $this->belongsToMany(Parametro::class,'ai_salida_mayores_razones', 'ai_salmay_id', 'parametro_id');
    }

    public function firma1(){
        return $this->belongsTo(User::class, 'user_doc1_id');
    }

    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AiSalidaMayores::create($dataxxxx['requestx']->all());
            }
            
            $dataxxxx['modeloxx']->razones()->detach();
            if($dataxxxx['requestx']->razones){
              foreach ( $dataxxxx['requestx']->razones as $d) {
                    $dataxxxx['modeloxx']->razones()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
                }
            }

             return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}