<?php

namespace App\Models\Acciones\Individuales\Pivotes;

use App\Models\Acciones\Individuales\AiRetornoSalida;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AiRetornoSalidaCondicion extends Model
{
    protected $table = 'ai_retorno_salidas_condicion';

    protected $fillable = ['prm_condicion_id','ai_retorno_salida_id', 'user_crea_id', 'user_edita_id',
    'prm_orientado_id','prm_enfermerd_id','prm_brotes_id','prm_laceracio_id'];

    public function retornosalida()
    {
      return $this->belongsTo(AiRetornoSalida::class);
    }

    public function creador()
    {
      return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
      return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function getTransaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if (isset($dataxxxx['objetoxx']->resobservacion->id)) {
                $dataxxxx['objetoxx']->resobservacion->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $dataxxxx['modeloxx'] = AiRetornoSalida::create($dataxxxx);
            }
            return $dataxxxx;
        }, 5);
        return $objetoxx;
    }


}
