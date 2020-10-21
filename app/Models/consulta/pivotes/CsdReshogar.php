<?php

namespace App\Models\consulta\pivotes;

use App\Models\consulta\CsdResidencia;
use Illuminate\Database\Eloquent\Model;

class CsdReshogar extends Model
{
    protected $table = 'csd_reshogars';

    protected $fillable = [ 'prm_espacio_id',
    'espaciocant',
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

    public function creador()
    {
      return $this->belongsTo(User::class, 'user_crea_id');
    }
  
    public function editor()
    {
      return $this->belongsTo(User::class, 'user_edita_id');
    }


    
}
