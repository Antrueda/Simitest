<?php

namespace App\Models\Simianti\Inf;

use Illuminate\Database\Eloquent\Model;

class IfPlanillaNnaj extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'if_planilla_nnajs';
    //protected $primaryKey = 'id_planilla_asistencia';
    protected $fillable =
    [
        'id_planilla_nnaj',
        'id_nnaj',
        'id_planilla_asistencia',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'estimulositp_ant',
        'motivonrecarga',
        'estimulositp',
        
        
        
        
    ];


}
