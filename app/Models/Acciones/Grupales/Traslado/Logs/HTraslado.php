<?php

namespace App\Models\Acciones\Grupales\Traslado\Logs;

use App\Models\Parametro;
use App\Models\sistema\SisDepen;
use App\Models\Sistema\SisServicio;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class HTraslado extends Model
{

    protected $table = 'h_traslados';
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id','fecha', 'prm_upi_id', 
        'observaciones', 'tipotras_id','trasladototal','respone_id','responr_id',
        'prm_trasupi_id', 'prm_serv_id','remision_id','user_doc','cuid_doc','auxe_doc',
        'doce_doc','psico_doc','auxil_doc','id',       
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'

    ];




}
