<?php

namespace App\Models\Acciones\Individuales\Emprender\Egreso;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EgreApoyo extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'tipo_id', 'nombreper','servicios','contacto','direccion',
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

          $test=EgreApoyo::create(['egreso_id' =>$dataxxxx['egreso_id'], 
          'tipo_id' => $dataxxxx['tipo_id'], 
          'nombreper' => $dataxxxx['nombreper'], 
          'servicios' => $dataxxxx['servicios'], 
          'contacto' => $dataxxxx['contacto'], 
          'sis_esta_id' =>1,
           'user_crea_id' =>Auth::user()->id]);
      return $objetoxx;
      }, 5);
      return $usuariox;
    }
}
