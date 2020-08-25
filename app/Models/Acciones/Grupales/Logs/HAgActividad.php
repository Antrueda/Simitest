<?php

namespace app\Models\Acciones\Grupales\Logs;
use Illuminate\Database\Eloquent\Model;

class HAgActividad extends Model
{
    protected $fillable = [
        'd_registro',
        'area_id',
        'sis_deporigen_id',
        'sis_depdestino_id',
        'ag_tema_id',
        'i_prm_lugar_id',
        'ag_taller_id',
        'ag_sttema_id',
        'i_prm_dirig_id',
        's_prm_espac',
        'sis_entidad_id',
        's_introduc',
        's_justific',
        's_objetivo',
        's_metodolo',
        's_categori',
        's_contenid',
        's_estrateg',
        's_resultad',
        's_evaluaci',
        's_observac',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}