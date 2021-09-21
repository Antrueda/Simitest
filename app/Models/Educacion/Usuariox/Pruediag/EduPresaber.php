<?php

namespace App\Models\Educacion\Usuariox\Pruediag;

use App\Models\Educacion\Administ\Pruediag\EdaAsignatu;
use App\Models\Educacion\Administ\Pruediag\EdaPresaber;
use App\Models\User;
use App\Traits\CamposComunesModelTrait;
use Illuminate\Database\Eloquent\Model;

class EduPresaber extends Model
{
    use CamposComunesModelTrait; // Administra los metdos para: user_crea_id, user_edita_id y sis_esta_id
    protected $fillable = [
        'edu_pruediag_id',
        'eda_asignatu_id',
        'eda_presaber_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];
    public function eduPruediag()
    {
        return $this->belongsTo(EduPruediag::class);
    }
    public function edaAsignatu()
    {
        return $this->belongsTo(EdaAsignatu::class);
    }
    public function edaPresaber()
    {
        return $this->belongsTo(EdaPresaber::class);
    }
}
