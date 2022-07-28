<?php

namespace App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Logs;

use Illuminate\Database\Eloquent\Model;

class HVsmedicina extends Model
{
    protected $table = 'h_vsmedicinas';
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'upi_id', 'upiorigen_id', 'afili_id','fecha',
        'consul_id', 'entidad_id', 'poblaci_id',
        'remigen_id', 'remisal_id', 'remiint_id',
        'remiesp_id', 'certifi_id', 'remico_id',
        'motivoval', 'recomenda', 'sis_nnaj_id',
        'user_id','modal_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}