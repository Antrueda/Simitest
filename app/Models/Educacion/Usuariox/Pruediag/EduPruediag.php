<?php

namespace App\Models\Educacion\Usuariox\Pruediag;

use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sistema\SisDepen;
use App\Models\User;
use App\Traits\CamposComunesModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EduPruediag extends Model
{
    use CamposComunesModelTrait; // Administra los metdos para: user_crea_id, user_edita_id y sis_esta_id
    protected $fillable = [
        'fi_datos_basico_id',
        'eda_grado_id',
        'sis_depen_id',
        'fechdili',
        'persdili_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];
    public function persdili()
    {
        return $this->belongsTo(User::class, 'persdili_id');
    }

    public function fiDatosBasico()
    {
        return $this->belongsTo(FiDatosBasico::class);
    }
    public function sisDepen()
    {
        return $this->belongsTo(SisDepen::class);
    }
    public function edaGrado()
    {
        return $this->belongsTo(EdaGrado::class);
    }
    public function eduPresabers()
    {
        return $this->HasMany(EduPresaber::class);
    }
}
