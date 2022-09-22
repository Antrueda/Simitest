<?php

namespace App\Models\Acciones\Individuales\Salud\Odontologia;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VOdontograma extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'diag_id','odonto_id','super_id','diente'

    ];

    public function odontologia(){
        return $this->belongsTo(VOdontologia::class, 'odonto_id');
    }

    public static function transaccion($dataxxxx,  $objetoxx)
    {
      $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
        $dataxxxx['user_edita_id'] = Auth::user()->id;
        if ($objetoxx != '') {
          $objetoxx->update($dataxxxx);
        } else {
          $dataxxxx['user_crea_id'] = Auth::user()->id;
          $objetoxx = VOdontograma::create($dataxxxx);
        }
        return $objetoxx;
      }, 5);
      return $usuariox;
    }
}

