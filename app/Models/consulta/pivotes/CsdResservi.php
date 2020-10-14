<?php

namespace App\Models\consulta\pivotes;

use Illuminate\Database\Eloquent\Model;

class CsdResservi extends Model
{
    protected $table = 'csd_resservis';

    protected $fillable = ['prm_comparte_id', 'csd_residencia_id', 'user_crea_id', 'user_edita_id','sis_esta_id'];


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
}
