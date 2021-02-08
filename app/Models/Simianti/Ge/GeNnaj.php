<?php

namespace App\Models\Simianti\Ge;

use Illuminate\Database\Eloquent\Model;

class GeNnaj extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'ge_nnaj';
    protected $primaryKey = 'id_nnaj';

    protected $fillable = [
        'id_nnaj',
        'primer_apellido',
        'segundo_apellido',
        'primer_nombre',
        'segundo_nombre',
        'apodo',
        'fecha_nacimiento',
        'id_nacimiento',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'rh',
        'genero',
        'tipo_documento',
        'numero_documento',
        'notaria',
        'registraduria',
        'id_lugar_expedicion',
        'clase_libreta_militar',
        'estado',
        'numero_libreta_militar',
        'ultimo_grado_aprobado',
        'fecha_nacimiento_estimada',
        'etnia',
        'email',
        'nombre_identitario',
        'estado_civil',
        'genero_identifica',
        'sexo_orienta',
        'condicion_vestido',
        'autocuidado',
        'sin_id_porque',
        'cuenta_doc',
        'situacion_mil',
        'tipo_poblacion',
        'id_pais_nacimiento',
        'sis_usuario',
    ];
    public function ge_nnaj_documento()
    {
        return $this->hasOne(GeNnajDocumento::class, 'id_nnaj');
    }
}
