<?php

namespace App\Models\Actaencu;

use app\Models\sistema\SisNnaj;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use phpDocumentor\Reflection\Types\This;

class AeAsistencia extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'ae_encuentro_id',
        'user_funcontr_id',
        'respoupi_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];
    protected $table = 'ae_asistencias';

    public function aeEncuentro()
    {
        return $this->belongsTo(AeEncuentro::class);
    }

    public function aeDirregis()
    {
        return $this->hasOne(AeDirregi::class);
    }

    public function sis_nnaj_id()
    {
        return $this->belongsToMany(SisNnaj::class);
    }

    public function userCrea()
    {
        return $this->belongsTo(User::class);
    }

    public function userEdita()
    {
        return $this->belongsTo(User::class);
    }
}
