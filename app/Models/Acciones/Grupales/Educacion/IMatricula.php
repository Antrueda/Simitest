<?php

namespace App\Models\Acciones\Grupales\Educacion;

use App\Models\Sistema\SisDepen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IMatricula extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','fecha', 'prm_upi_id', 
        'observaciones', 'user_doc1','user_doc2','responsable_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];


    public function upi(){
        return $this->belongsTo(SisDepen::class, 'prm_upi_id');
    }

    public function firma1(){
        return $this->belongsTo(User::class, 'user_doc1');
    }

    public function firma2(){
        return $this->belongsTo(User::class, 'user_doc2');
    }

    public function responsable(){
        return $this->belongsTo(User::class, 'responsable_id');
    }

    public function grado(){
        return $this->belongsTo(Parametro::class, 'prm_grado');
    }


    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = IMatricula::create($dataxxxx['requestx']->all());
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
