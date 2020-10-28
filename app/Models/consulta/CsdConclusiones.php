<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdConclusiones extends Model{

  protected $fillable = [
    'csd_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
    'conclusiones', 'persona_nombre', 'persona_doc', 'persona_parent_id',
    'prm_tipofuen_id',
    'user_doc1_id', 'user_doc2_id'
  ];

  protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

  public function csd(){
    return $this->belongsTo(Csd::class, 'csd_id');
  }

  public function parentezco(){
    return $this->belongsTo(Parametro::class, 'persona_parent_id');
  }

  public function firma_1(){
    return $this->belongsTo(Parametro::class, 'user_doc1_id');
  }

  public function firma_2(){
    return $this->belongsTo(Parametro::class, 'user_doc2_id');
  }

  public function creador(){
    return $this->belongsTo(User::class, 'user_crea_id');
  }

  public function editor(){
    return $this->belongsTo(User::class, 'user_edita_id');
  }

  public static function transaccion($dataxxxx,$objetoxx)
  {
    $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
        $dataxxxx['user_edita_id'] = Auth::user()->id;
        $dataxxxx['prm_tipofuen_id'] = 2315;
        $dataxxxx['sis_esta_id'] = 1;
        if ($objetoxx != '') {
            $objetoxx->update($dataxxxx);
        } else {
            $dataxxxx['user_crea_id'] = Auth::user()->id;
            $objetoxx = CsdConclusiones::create($dataxxxx);
        }

     return $objetoxx;
    }, 5);
    return $usuariox;
}
}
