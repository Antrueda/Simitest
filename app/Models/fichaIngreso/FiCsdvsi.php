<?php

namespace App\Models\fichaIngreso;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiCsdvsi extends Model
{
    protected $fillable = [
        'vsi_id',
        'csd_id',
        'fi_datos_basico_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
      ];
      public static function getTransaccion($dataxxxx)
      {
        $usuariox = DB::transaction(function () use ($dataxxxx) {
          if (isset($dataxxxx['objetoxx']->fi_csdvsi->fi_datos_basico_id )) {
            $dataxxxx['objetoxx']->fi_csdvsi->update($dataxxxx);
          } else {
            $dataxxxx['objetoxx'] = FiCsdvsi::create($dataxxxx);
          }
          return $dataxxxx['objetoxx'];
        }, 5);
        return $usuariox;
      }
}
