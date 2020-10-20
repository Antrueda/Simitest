<?php

namespace App\Models\consulta\pivotes;

use App\Models\consulta\CsdResidencia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdResobsers extends Model
{
    protected $table = 'csd_resobsers';

    protected $fillable = ['observaciones', 'csd_residencia_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];


    public function csd_residencia()
    {
      return $this->belongsTo(CsdResidencia::class);
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
                $dataxxxx['modeloxx'] = CsdResobsers::create($dataxxxx);
            }
            return $dataxxxx;
        }, 5);
        return $objetoxx;
    }

    
}
