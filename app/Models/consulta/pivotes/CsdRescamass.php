<?php

namespace App\Models\consulta\pivotes;

use App\Models\Parametro;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdRescamass extends Model
{
    protected $table = 'csd_rescamass';

    protected $fillable = ['prm_comparte_id', 'csd_residencia_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];


    public function csd_residencia()
    {
      return $this->belongsTo(CsdResidencia::class);
    }

    public function prm_comparte()
    {
      return $this->belongsTo(Parametro::class);
    }
    

    public function creador()
    {
      return $this->belongsTo(User::class, 'user_crea_id');
    }
  
    public function editor()
    {
      return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function getCamas($residenc)
    { 
      $vestuari = ['camasxxx' => [], 'formular' => false];
  
      if ($residenc == 0) {
        $vestuari['formular'] = true;
      } else {
        $vestuari['camasxxx'] = CsdRescamass::where('csd_residencia_id', $residenc)->get();
      }
      return $vestuari;
    }
  
    public static function transaccion($dataxxxx,  $objetoxx)
    {
      $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
        $dataxxxx['user_edita_id'] = Auth::user()->id;
        if ($objetoxx != '') {
          $objetoxx->update($dataxxxx);
        } else {
          $dataxxxx['user_crea_id'] = Auth::user()->id;
          $objetoxx = CsdRescamass::create($dataxxxx);
        }
        return $objetoxx;
      }, 5);
      return $usuariox;
    }
}
