<?php

namespace App\Models\Acciones\Individuales\Pivotes;

use App\Models\Acciones\Individuales\AiSalidaMayores;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SalidaJovene extends Model
{
    protected $fillable = [
        'fi_dato_basico_id',
        'ai_salmay_id',
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
