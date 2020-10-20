<?php

namespace App\Models\consulta\pivotes;

use App\Models\consulta\CsdResidencia;
use Illuminate\Database\Eloquent\Model;

class CsdReshogar extends Model
{
    protected $table = 'csd_reshogars';

    protected $fillable = [ 'prm_bano_id',
    'banocant',
    'prm_comedor_id',
    'comedorcant',
    'prm_sala_id',
    'salacant',
    'salacomcant',
    'prm_cocina_id',
    'cocinacant',
    'prm_habita_id',
    'habitacant',
    'prm_patio_id',
    'patiocant', 
    'csd_residencia_id',
    'user_crea_id',
    'user_edita_id',
    'sis_esta_id'];


    public function csd_residencia()
    {
      return $this->belongsTo(CsdResidencia::class);
    }

    public function prm_bano()
    {
      return $this->belongsTo(Parametro::class,'prm_bano_id');
    }

    public function prm_comedor()
    {
      return $this->belongsTo(Parametro::class);
    }

    public function prm_sala()
    {
      return $this->belongsTo(Parametro::class);
    }

    public function prm_cocina()
    {
      return $this->belongsTo(Parametro::class);
    }

    public function prm_habita()
    {
      return $this->belongsTo(Parametro::class);
    }
    public function prm_patio()
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


    
}
