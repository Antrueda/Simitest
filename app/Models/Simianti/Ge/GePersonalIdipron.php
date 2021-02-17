<?php

namespace App\Models\Simianti\Ge;

use Illuminate\Database\Eloquent\Model;

class GePersonalIdipron extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'ge_personal_idipron';
    protected $primaryKey = 'id_documento';

    protected $fillable = [
        'id_documento',
        'tipo_documento',
        'primer_nombre',
        'primer_apellido',
        'telefonos',
        'tipo',
        'tarjeta_matricula_profesional',
        'clave',
        'fecha_login',
        'estado_clave',
        'grupo',
        'estado',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'correo_electronico',
        'segundo_nombre',
        'segundo_apellido',
        'dependencia',
        'cargo',
        'area',
        'id_zona_foc',
        'codigo_municipio_exp',
        'codigo_departamento_exp',
        'fecha_limite_vinculacion',
        'f_u_cambio_clave',
        'id_tipo_usuario',
        'acceso_clinico',
    ];
}
