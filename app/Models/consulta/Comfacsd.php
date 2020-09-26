<?php

namespace App\Models\consulta;

use App\Models\fichaIngreso\FiCompfami;
use App\Models\Sistema\SisEsta;
use Illuminate\Database\Eloquent\Model;

class Comfacsd extends Model
{
    protected $fillable = [
        'fi_compfami_id', 'csd_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
     
    ];

    public function csd(){
        return $this->belongsTo(Csd::class);
      }
    
      public function fi_compfami(){
        return $this->belongsTo(FiCompfami::class);
    }
    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
      }
    
      public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
      }
      public function sis_esta(){
        return $this->belongsTo(SisEsta::class);
      }
    
}
