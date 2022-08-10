<?php

namespace Models\Acciones\Individuales\SocialLegal;

use Illuminate\Database\Eloquent\Model;

class AsociarCaso extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'tipo_id', 'tema_id', 'segui_id', 
    ];

    public function tipocaso(){
        return $this->belongsTo(TipoCaso::class, 'tipo_id');
    }
    public function temacaso(){
        return $this->belongsTo(TemaCaso::class, 'tema_id');
    }
    public function seguicaso(){
        return $this->belongsTo(SeguimientoCaso::class, 'segui_id');
    }
}
