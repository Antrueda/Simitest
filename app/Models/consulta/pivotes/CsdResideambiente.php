<?php

namespace App\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdResideambiente extends Model
{
    protected $table = 'csd_reside_ambiente';

    protected $fillable = ['parametro_id','prm_tipofuen_id', 'csd_residencia_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];


    public function csd_residencia()
    {
      return $this->belongsTo(CsdResidencia::class);
    }
    public function condicionAmbiente()
    {
      return $this->belongsTo(Parametro::class, 'parametro_id');
    } 

    public function creador()
    {
      return $this->belongsTo(User::class, 'user_crea_id');
    }
  
    public function editor()
    {
      return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function getCondicionAbiente($residenc)
  { 
    $vestuari = ['condsele' => [], 'formular' => false];

    if ($residenc == 0) {
      $vestuari['formular'] = true;
    } else {
      $vestuari['condsele'] = CsdResideambiente::where('csd_residencia_id', $residenc)->get();
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
        $objetoxx = CsdResideambiente::create($dataxxxx);
      }
      return $objetoxx;
    }, 5);
    return $usuariox;
  }

}
