<?php

namespace App\Models\fichaIngreso;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiObservacione extends Model
{
    protected $fillable = [
      
        'observaciones',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id'
    ];
   
  
    public function creador() {
      return $this->belongsTo(User::class, 'user_crea_id');
    }
  
 
    public function editor() {
      return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function sis_nnaj() {
      return $this->belongsTo(SisNnaj::class);
    }
}
