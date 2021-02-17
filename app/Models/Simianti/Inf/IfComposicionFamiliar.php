<?php

namespace App\Models\Simianti\Inf;

use Illuminate\Database\Eloquent\Model;

class IfComposicionFamiliar extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'if_composicion_familiar';
    protected $primaryKey = 'id_composicion_familiar';
    protected $fillable =
    [
        'id_composicion_familiar',
        'primer_nombre',
        'parentesco',
        'edad',
        'convive_con_nnaj',
        'ocupacion',
        'representante_legal',
        'estado_civil',
        'escolaridad',
        'custodia',
        'cabeza_hogar',
        'id_nnaj',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'direccion',
        'telefono',
        'numero_documento',
        'id_visita_domiciliaria',
        'fuente',
        'id_valoracion_inicial',
        'grupo_poblacional',
        'estado',
        'id_ficha_ingreso',
        'flag',
        'id_tipo_doc',
        'tipo_enfermedad',
        'id_medicamento_perm',
        'cuales_medicamentos',
        'id_tratamiento',
        'id_proceso_penal',
        'proceso',
        'id_vigente',
        'numero_veces_proceso',
        'motivo_proceso',
        'hace_cuanto_proc',
        'direccion_ch',
        'beneficios',
        'tiempo',
        'vinc_idipron',
        'tipo_tiempo',
    ];


}
