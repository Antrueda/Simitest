<?php

namespace App\Models\fichaIngreso;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FiEventosMedico extends Model
{
    protected $fillable = [
        'fi_salud_id',
        'i_prm_evento_medico_id',
        'user_crea_id',
        'user_edita_id',
        'activo'
    ];
    public function fi_evento_medico(){
        return $this->belongsTo(FiEventosMedico::class);
      }
        protected $attributes = ['activo' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
        public function creador()
        {
          return $this->belongsTo(User::class, 'user_crea_id');
        }
      
        public function editor()
        {
          return $this->belongsTo(User::class, 'user_edita_id');
        }
}
