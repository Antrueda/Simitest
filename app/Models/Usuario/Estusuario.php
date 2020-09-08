<?php

namespace App\Models\Usuario;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Estusuario extends Model
{
    protected $fillable = [
        'estado',
        'user_crea_id',
        'prm_formular_id',
        'user_edita_id',
        'sis_esta_id'
    ];
    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {

            $dataxxxx['requestx']->user_edita_id = Auth::user()->id;
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->user_crea_id = Auth::user()->id;
                $dataxxxx['modeloxx'] = Estusuario::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function combo($dataxxxx)
    {
        $comboxxx = [];
        if($dataxxxx['cabecera']){
            if($dataxxxx['esajaxxx']){
                $comboxxx[] = ['valuexxx'=>'','optionxx'=>'Seleccione'];
            }else{
                $comboxxx = [''=>'Seleccione'];
            }

        }
        $entidadx=Estusuario::where('sis_esta_id',$dataxxxx['estadoid'])
        ->where('prm_formular_id',$dataxxxx['formular'])
        ->get();
        foreach ($entidadx as $entisalu) {
            if($dataxxxx['esajaxxx']){
                $comboxxx[] = ['valuexxx'=>$entisalu->id, 'optionxx'=>$entisalu->estado];
            }else{
                $comboxxx[$entisalu->id] = $entisalu->estado;
            }
        }
        return $comboxxx;
    }
}
