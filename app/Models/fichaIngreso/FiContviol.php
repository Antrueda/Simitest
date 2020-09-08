<?php

namespace App\Models\fichaIngreso;

use App\Models\Parametro;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiContviol extends Model
{


    protected $fillable = [
        'fi_violencia_id',
        'prm_violenci_id',
        'prm_contexto_id',
        'prm_respuest_id',
        'tema_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
      ];

      public function fi_violencia()
      {
          return $this->belongsTo(FiViolencia::class);
      }
      public function prm_violenci()
      {
          return $this->belongsTo(Parametro::class,'prm_violenci_id');
      }
      public function prm_contexto()
      {
          return $this->belongsTo(Parametro::class,'prm_contexto_id');
      }
      public function prm_respuest()
      {
          return $this->belongsTo(Parametro::class,'prm_respuest_id');
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
            $dataxxxx['modeloxx'] = FiContviol::create($dataxxxx['requestx']->all());
          }
    
          return $dataxxxx['modeloxx'];
        }, 5);
        return $usuariox;
      }
}
