<?php

namespace App\Models\Simianti\Tr;

use Illuminate\Database\Eloquent\Model;

class TrSeguiConsumoSpa extends Model
{
    protected $table = 'tr_segui_consumo_spa';
    protected $primaryKey = 'id_segui_consumo_spa';
    protected $connection = 'simiantiguo';

    protected $fillable = [
        'id_vespa',
        'tipo_droga',
        'frecuencia_uso_ingreso',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'actualmente_consume',
        'via_administracion',
        'edad_inicio',
        'edad_final',
        'frecuencia_uso_actual',
        'hace_cuanto_no_consume',
        'droga_nueva_hace_cuanto',
        'id_nnaj',
        'seguimiento',
        'fecha_seguimiento',
        'mayor_impacto',
        'nueva_droga',
        'frec_problemas_tres',
        'prec_familia_amigo',
        'intento_dejar_consumo',
        'cantidad_spa',
        'presentacion_spa',
        'frec_deseo_tres',
        'frec_deja_de_hacer',
        'consumo_ultimo_mes',
        'consumo_ult_año',
        'impacto',
        'familiar',
        'laboral',
        'emocional',
        'social',
        'id_upi',
        ];
}
