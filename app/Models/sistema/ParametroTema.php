<?php

namespace App\Models\sistema;

use App\Models\Parametro;
use App\Models\Temacombo;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ParametroTema extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'parametro_temacombo';

    protected $fillable = [ 'parametro_id','temacombo_id','simianti_id', 'sis_esta_id' ,'user_crea_id','user_edita_id'];
    protected $attributes = ['sis_esta_id' => 1,'user_crea_id'=>1,'user_edita_id'=>1];

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public function temacombo()
    {
        return $this->belongsTo(Temacombo::class);
    }

    public function parametro()
    {
        return $this->belongsTo(Parametro::class);
    }
}
