<?php

namespace App\Models\consulta\pivotes;

use App\Models\consulta\CsdResidencia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdRescomparte extends Model
{
    protected $table = 'csd_rescomparte';

    protected $fillable = [ 'prm_espacio_id',
    'prm_otrafamilia_id',
    'csd_residencia_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'];


    public function csd_residencia()
    {
      return $this->belongsTo(CsdResidencia::class);
    }

    public function prm_espacio()
    {
      return $this->belongsTo(Parametro::class,'prm_espacio_id');
    }

    public function prm_otrafamilia()
    {
      return $this->belongsTo(Parametro::class,'prm_otrafamilia_id');
    }


    public function creador()
    {
      return $this->belongsTo(User::class, 'user_crea_id');
    }
  
    public function editor()
    {
      return $this->belongsTo(User::class, 'user_edita_id');
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
          $dataxxxx['modeloxx'] = CsdRescomparte::create($dataxxxx['requestx']->all());
        }
  
        return $dataxxxx['modeloxx'];
      }, 5);
      return $usuariox;
    }

    
}
