<?php

namespace App\Models\Acciones\Individuales\Salud\Odontologia;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VHigiene extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'diag_id','odonto_id','super_id','diente','tiposup_id'

    ];

    public function odontologia(){
        return $this->belongsTo(VOdontologia::class, 'odonto_id');
    }

    public static function transaccion($dataxxxx,  $objetoxx)
    {
      
      $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
        
        $dataxxxx['user_edita_id'] = Auth::user()->id;
        $dataxxxx['user_crea_id'] = Auth::user()->id;
        $test=VHigiene::create(['diente' =>$dataxxxx['diente'], 
          'diag_id' => $dataxxxx['diag_id'], 
          'odonto_id' => $dataxxxx['odonto_id'], 
          'super_id' => $dataxxxx['super_id'], 
          'tiposup_id' => $dataxxxx['tiposup_id'], 
          'sis_esta_id' =>1,
           'user_crea_id' =>Auth::user()->id]);



        
        
        return $objetoxx;
      }, 5);
      return $usuariox;
    }
}
