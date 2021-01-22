<?php

namespace App\Models\Acciones\Individuales\Pivotes;

use App\Models\Acciones\Individuales\AiSalidaMayores;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\Parametro;
use App\Models\Sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SalidaJovene extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'ai_salmay_id',
        'hora_salida',
        'autoriza_id',
        'retorna_id',
        'fecharetorno',
        'horaretorno',
        'observacion',
        'responsable_id',
        'telefono',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
      ];


    public function creador()
    {
      return $this->belongsTo(User::class, 'user_crea_id');
    }
  
    public function editor()
    {
      return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function ai_salmay()
    {
      return $this->belongsTo(AiSalidaMayores::class);
    }

    public function sis_nnaj()
    {
      return $this->belongsTo(SisNnaj::class);
    }

    public function ficompis()
    {
      return $this->belongsTo(FiCompfami::class,'responsable_id');
    }

    public function razones(){
      return $this->belongsToMany(Parametro::class,'jovenes_motivos', 'salida_jovenes_id', 'parametro_id');
  }
  
    public static function transaccion($dataxxxx,  $objetoxx)
    {
      $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
        $dataxxxx['user_edita_id'] = Auth::user()->id;
        if ($objetoxx != '') {
          $objetoxx->update($dataxxxx);
        } else {
          $dataxxxx['user_crea_id'] = Auth::user()->id;
          $objetoxx = SalidaJovene::create($dataxxxx);
        }
        return $objetoxx;
      }, 5);
      return $usuariox;
    }
}

