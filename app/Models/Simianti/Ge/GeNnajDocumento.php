<?php

namespace App\Models\Simianti\Ge;

use App\Models\fichaIngreso\NnajDocu;
use Illuminate\Database\Eloquent\Model;

class GeNnajDocumento extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'ge_nnaj_documento';
    protected $primaryKey = 'id_nnaj';
    public $timestamps = false;
    protected $fillable = [
        'id_nnaj',
        'tipo_documento',
        'numero_documento',
        'notaria',
        'registraduria',
        'id_lugar_expedicion',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'estado',
    ];
    public function ge_nnaj()
    {
        $this->belongsTo(GeNnaj::class,'id_nnaj');
    }
}
