<?php

namespace App\Models\Actaencu;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sistema\SisNnaj;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NnajAsis extends Model
{
    use SoftDeletes;

    protected $table = 'nnaj_asiss';

    protected $fillable = [
        'fi_datos_basico_id',
        'prm_pefil_id',
        'prm_lugar_focali_id',
        'prm_autorizo_id',
        'observaciones',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];

    public function fiDatosBasico()
    {
        return $this->belongsTo(FiDatosBasico::class);
    }

    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
