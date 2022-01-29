<?php

namespace App\Models\Indicadores\Administ;

use App\Models\sistema\SisTcampo;
use App\Models\Temacombo;
use Illuminate\Database\Eloquent\Model;

class InPregtcam extends Model
{
    protected $fillable = [
        'temacombo_id',
        'sis_tcampo_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
      ];

      public function temacombo()
      {
        return $this->belongsTo(Temacombo::class);
      }

      public function sisTcampo()
      {
        return $this->belongsTo(SisTcampo::class);
      }
}
