<?php

namespace App\Models\Simianti\Ge;

use App\Models\fichaIngreso\NnajDocu;
use Illuminate\Database\Eloquent\Model;

class GeAcumuladoMeta extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'ge_acumulado_meta';
    protected $primaryKey = 'id_nnaj';
    public $timestamps = false;
    protected $fillable = [
        'id_nnaj',
        'tipo_documento',
        'numero_documento',
        'primer_apellido',
        'segundo_apellido',
        'primer_nombre',
        'segundo_nombre',
        'nombre_concatenado',
        'fecha_nacimiento',
        'edad',
        'grupo_etario',
        'sexo',
        'identidad_genero',
        'orientacion_sexual',
        'estado_civil',
        'etnia',
        'afiliacion',
        'nombre_eps',
        'carta_especial',
        'grupo_poblacional',
        'nivel_sisben',
        'tiene_discapacidad',
        'estado_embarazo',
        'tipo_poblacional',
        'barrio',
        'nombre_upz',
        'nombre_localidad',
        'dependencia',
        'ano',
        'total',
        'año_meta',
        'meta',
        'meta_final',
        'prioridad',
        'upi',
        'modalidad',
        'mes_reporte',
        
    ];
    public function ge_nnaj()
    {
        $this->belongsTo(GeNnaj::class,'id_nnaj');
    }
}
