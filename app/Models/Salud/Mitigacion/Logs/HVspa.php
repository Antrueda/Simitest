<?php

namespace app\Models\Salud\Mitigacion\Logs;

use Illuminate\Database\Eloquent\Model;

class HVspa extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'prm_upi_id',
        'fecha',
        'prm_valoracion_id',
        'prm_icbf_id',
        'previos',
        'prm_gestante_id',
        'semanas_gestacion',
        'prm_escolar_id',
        'prm_ingresos_id',
        'prm_modalidad_id',
        'prm_acude_id',
        'prm_sitio_id',
        'prm_probado_id',
        'prm_cantidad_id',
        'prm_inyectadas_id',
        'edad',
        'prm_dificultad_id',
        'descripcion',
        'prm_obtiene_id',
        'donde',
        'precio',
        'cantidad',
        'prm_medida_id',
        'prm_frecuencia_id',
        'prm_costumbre_id',
        'porque',
        'sustancia',
        'prm_comparte_id',
        'porque_comparte',
        'prm_prueba_id',
        'porque_prueba',
        'observaciones',
        'obs_generales',
        'obs_generales_dos',
        'user_doc1_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
                
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}