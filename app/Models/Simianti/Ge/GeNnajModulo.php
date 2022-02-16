<?php

namespace App\Models\Simianti\Ge;

use App\Models\fichaIngreso\NnajDocu;
use Illuminate\Database\Eloquent\Model;

class GeNnajModulo extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'ge_nnaj_modulo';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'tipo',
        'id_nnaj',
        'id_upi',
        'id_programa',
        'id_grupo',
        'id_modulo',
        'estado',
        'estrategia',
        'observacion',
        'usuario_insercion',
        'fecha_insercion',
        'usuario_modificacion',
        'fecha_modificacion',
        'fecha',
        'id_estrategia',
        

        
    ];
    public function ge_nnaj()
    {
        $this->belongsTo(GeNnaj::class,'id_nnaj');
    }
}
