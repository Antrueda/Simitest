<?php

namespace App\Models\Acciones\Individuales\Emprender\Egreso;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EgresoTelefono extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'fechareg', 'tipollama_id','obserllamad','motivollama_id',
        'egreso_id',
        
    ];


    public function egreso(){
        return $this->belongsTo(SEgreso::class, 'egreso_id');
    }


    public static function transaccion($dataxxxx,  $objetoxx)
    {
      
      $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
        
        $dataxxxx['user_edita_id'] = Auth::user()->id;
        $dataxxxx['user_crea_id'] = Auth::user()->id;

          $test=EgresoTelefono::create(['egreso_id' =>$dataxxxx['egreso_id'], 
          'fechareg' => $dataxxxx['fechareg'], 
          'tipollama_id' => $dataxxxx['tipollama_id'], 
          'obserllamad' => $dataxxxx['obserllamad'], 
          'motivollama_id' => $dataxxxx['motivollama_id'], 
          'sis_esta_id' =>1,
           'user_crea_id' =>Auth::user()->id]);
      return $objetoxx;
      }, 5);
      return $usuariox;
    }
}
