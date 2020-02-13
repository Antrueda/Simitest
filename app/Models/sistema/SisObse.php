<?php

namespace App\Models\sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SisObse extends Model
{
    protected $fillable = [
        'id',
        's_observ',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',];

    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

    public static function combo($dataxxxx)
    {
        if($dataxxxx['cabecera']){
            if($dataxxxx['esajaxxx']){  
                $comboxxx[] = ['valuexxx'=>'','optionxx'=>'Seleccione'];
            }else{
                $comboxxx = [''=>'Seleccione'];
            }
            
        }   
        $entidadx=SisObse::get();
        foreach ($entidadx as $entisalu) {
            if($dataxxxx['esajaxxx']){
                $comboxxx[] = ['valuexxx'=>$entisalu->id, 'optionxx'=>$entisalu->s_estado];
            }else{
                $comboxxx[$entisalu->id] = $entisalu->s_estado;
            }
        }
        return $comboxxx;
    }
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
