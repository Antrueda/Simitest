<?php

namespace App\Models\Acciones\Individuales\Educacion\perfilOcupacional;

use Illuminate\Database\Eloquent\Model;

class FpoItemRespuesta extends Model
{
    protected $fillable = [
        'id', 'valor','fpo_item_id','fpo_comp_respu_id',
   ];


   public function item()
   {
     return $this->belongsTo(FpoDesempenioItem::class, 'fpo_item_id');
   }
}
