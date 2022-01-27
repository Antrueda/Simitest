<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\sistema\SisEsta;
use App\Models\sistema\SisTcampo;

class Temacombo extends Model
{
<<<<<<< HEAD
    protected $fillable = ['nombre', 'tema_id',  'sis_esta_id', 'user_crea_id', 'user_edita_id'];
    
    public function setNombreAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['nombre'] =  strtoupper($value);
        }
    }

=======
    protected $fillable = ['nombre', 'tema_id', 'sis_tcampo_id', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];
    
>>>>>>> d34c8409865ee0410db3272d4d4d195f80102dc2
    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }

    public function parametros()
    {
        return $this->belongsToMany(Parametro::class)->withPivot(['simianti_id', 'sis_esta_id', 'user_crea_id', 'user_edita_id']);
    }

<<<<<<< HEAD
    public function sisEsta()
    {
        return $this->belongsTo(SisEsta::class);
    }
=======
    public function sisTcampo()
    {
        return $this->belongsTo(SisTcampo::class);
    }

    public function sisEsta()
    {
        return $this->belongsTo(SisEsta::class);
    }
>>>>>>> d34c8409865ee0410db3272d4d4d195f80102dc2
}
