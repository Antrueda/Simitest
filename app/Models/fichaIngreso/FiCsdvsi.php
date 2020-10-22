<?php

namespace App\Models\fichaIngreso;

use App\Models\consulta\Csd;
use App\Models\sicosocial\Vsi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiCsdvsi extends Model
{
    protected $fillable = [
        'vsi_id',
        'csd_id',
        'fi_datos_basico_id',
        'created_csd',
        'updated_csd',
        'created_vsi',
        'updated_vsi',
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
      public function fi_datos_basico()
      {
          return $this->belongsTo(FiDatosBasico::class);
      }
      public function csd()
      {
          return $this->belongsTo(Csd::class);
      }

      public function vsi()
      {
          return $this->belongsTo(Vsi::class);
      }
}
