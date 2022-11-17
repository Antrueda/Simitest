<?php

namespace App\Models\sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SisEntidadSalud extends Model
{
    protected $fillable = [
        'id',
        'sis_enprsa_id',
        'i_prm_tentidad_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',];

    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public function sis_enprsa()
    {
        return $this->belongsTo(SisEnprsa::class);
    }
    public static function combo($padrexxx,$cabecera,$esajaxxx)
    {
        if($cabecera){
            if($esajaxxx){
                $comboxxx[] = ['valuexxx'=>'','optionxx'=>'Seleccione'];
            }else{
                $comboxxx = [''=>'Seleccione'];
            }

        }
// ddd($padrexxx);
        $entidadx=SisEntidadSalud::where(function($query) use($padrexxx){
            if($padrexxx!=''){
                $query->where('i_prm_tentidad_id',$padrexxx);
            }

        })->get();
        foreach ($entidadx as $entisalu) {
            if($esajaxxx){
                $comboxxx[] = ['valuexxx'=>$entisalu->id, 'tentidad'=>$entisalu->i_prm_tentidad_id,'optionxx'=>$entisalu->sis_enprsa->s_enprsa];
            }else{
                $comboxxx[$entisalu->id] = $entisalu->sis_enprsa->s_enprsa;
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

    public static function transaccion($dataxxxx, $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = SisEntidadSalud::create($dataxxxx);
            }
            return $objetoxx;
        }, 5);
        return $usuariox;
    }

    public function getComboAttribute()
    {
        return [$this->id => $this->sis_enprsa->s_enprsa];
    }
    public function getComboAjaxUnoAttribute()
    {
        return [['valuexxx' => $this->id, 'optionxx' => $this->sis_enprsa->s_enprsa, 'selected'=>'selected']];
    }
}
