<?php

namespace App\Models\consulta\pivotes;

use App\Models\consulta\CsdResidencia;
use Illuminate\Database\Eloquent\Model;

class CsdRescomparte extends Model
{
    protected $table = 'csd_rescomparte';

    protected $fillable = [ 'prm_espacio_id',
    'prm_comparte_id',
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

    public function prm_comparte()
    {
      return $this->belongsTo(Parametro::class,'prm_comparte_id');
    }


    public function creador()
    {
      return $this->belongsTo(User::class, 'user_crea_id');
    }
  
    public function editor()
    {
      return $this->belongsTo(User::class, 'user_edita_id');
    }


    
}
