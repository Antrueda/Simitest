<?php

namespace App\Models\Acciones\Individuales\Educacion;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PruebDiag extends Model
{
    protected $fillable = [
        'sis_nnaj_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
        'prm_upi_id', 'fecha','responsable_id','prm_grado'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function upis(){
        return $this->belongsTo(SisDepen::class, 'prm_upi_id');
    }

    public function grado(){
        return $this->belongsTo(Parametro::class, 'prm_grado');
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
          $dataxxxx['modeloxx'] = PruebDiag::create($dataxxxx['requestx']->all());
        }
  
        return $dataxxxx['modeloxx'];
      }, 5);
      return $usuariox;
    }
}
