<?php

namespace App\Models\Acciones\Individuales\Educacion;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PruebPresabe extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id',
        'prm_asignatura', 'user_doc','presaber'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];


    public function grado(){
        return $this->belongsTo(Parametro::class, 'prm_asignatura');
    }
    
    public static function transaccion($dataxxxx)
    {
      $usuariox = DB::transaction(function () use ($dataxxxx) {
        $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
        if ($dataxxxx['modeloxx'] != '') {
          $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
        } else {
          $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
          $dataxxxx[''] = Auth::user()->id;
          $dataxxxx['modeloxx'] = PruebPresabe::create($dataxxxx['requestx']->all());
        }
        return $dataxxxx['modeloxx'];
      }, 5);
      return $usuariox;
    }
}
