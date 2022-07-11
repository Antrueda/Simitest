<?php

namespace App\Models\Acciones\Individuales\Educacion\perfilOcupacional;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class FpoDesempenioItem extends Model
{
    protected $fillable = [
        'id', 'item_nombre','categoria_id','desempenio_id','estusuario_id','user_crea_id', 'user_edita_id','sis_esta_id'
   ];


   public function creador()
   {
     return $this->belongsTo(User::class, 'user_crea_id');
   }
 
   public function editor()
   {
     return $this->belongsTo(User::class, 'user_edita_id');
   }

   public function categoria()
   {
     return $this->belongsTo(FpoDesempenioCategoria::class, 'categoria_id');
   }
}
