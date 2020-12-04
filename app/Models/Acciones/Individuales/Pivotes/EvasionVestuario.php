<?php

namespace App\Models\Acciones\Individuales\Pivotes;

use App\Models\Acciones\Individuales\AiReporteEvasion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EvasionVestuario extends Model
{
    protected $table = 'evasion_vestuarios';

    protected $fillable = ['prm_vestuario_id','material','color' ,'reporte_evasion_id','user_crea_id', 'user_edita_id','sis_esta_id'];

    public function reporte_evasion()
    {
      return $this->belongsTo(AiReporteEvasion::class);
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
          $dataxxxx['modeloxx'] = EvasionVestuario::create($dataxxxx['requestx']->all());
        }
  
        return $dataxxxx['modeloxx'];
      }, 5);
      return $usuariox;
    }
}
