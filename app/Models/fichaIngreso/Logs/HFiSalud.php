<?php

namespace app\Models\fichaIngreso\Logs;

use Illuminate\Database\Eloquent\Model;

class HFiSalud extends Model
{
    protected $fillable = [
        'i_prm_regimen_salud_id',
        'sis_entidad_salud_id',
        'i_prm_tiene_sisben_id',
        'd_puntaje_sisben',
        'i_prm_tiene_discapacidad_id',
        'i_prm_tipo_discapacidad_id',
        'i_prm_tiene_cert_discapacidad_id',
        'i_prm_disc_perm_independencia_id',
        'i_prm_esta_gestando_id',
        'i_numero_semanas',
        'i_prm_esta_lactando_id',
        'i_numero_meses',
        'i_prm_tiene_problema_salud_id',
        'i_prm_problema_salud_id',
        'i_prm_consume_medicamentos_id',
        's_cual_medicamento',
        'i_prm_tiene_hijos_id',
        'i_numero_hijos',
        'i_prm_conoce_metodos_id',
        'i_prm_usa_metodos_id',
        'i_prm_cual_metodo_id',
        'i_prm_uso_voluntario_id',
        'i_comidas_diarias',
        'i_prm_razon_no_cinco_comidas_id',
        'sis_nnaj_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}
