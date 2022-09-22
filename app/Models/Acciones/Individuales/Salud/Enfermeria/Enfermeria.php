<?php

namespace App\Models\Acciones\Individuales\Salud\Enfermeria;

use App\Models\Acciones\Individuales\Salud\Vacunas\Vacuna;
use App\Models\AdmiActiAsd\AsdActividad;
use App\Models\Parametro;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisDepartam;
use App\Models\User;
use App\Models\sistema\SisDepen;
use App\Models\sistema\SisLocalidad;
use App\Models\sistema\SisLocalupz;
use App\Models\sistema\SisMunicipio;
use App\Models\sistema\SisServicio;
use App\Models\sistema\SisUpz;
use App\Models\sistema\SisUpzbarri;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enfermeria extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'sis_nnaj_id',
        'sis_depen_id',
        'fecha',
        'sintoma',
        'prm_motivoat_id',
        'prm_tipoaten_id',
        'prm_especial_id',
        'prm_lugactiv_id',
        'asd_actividad_id',
        'vacuna_id',
        'user_fun_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',   
    ];



    // public function asdActividad()
    // {
    //     return $this->belongsTo(AsdActividad::class, 'asd_actividad_id');
    // }


    public function asdActividad()
    {
        return $this->belongsTo(Vacuna::class, 'vacuna_id');
    }


    public function prm_motivos()
    {
        return $this->belongsTo(Parametro::class, 'prm_motivoat_id');
    }

    public function prm_tipoaten()
    {
        return $this->belongsTo(Parametro::class, 'prm_tipoaten_id');
    }

    public function prm_especial()
    {
        return $this->belongsTo(Parametro::class, 'prm_especial_id');
    }


    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }
    


    public function prm_actividad(){
        return $this->belongsTo(Parametro::class, 'prm_lugactiv_id');
    }




    public function funcionario()
    {
        return $this->belongsTo(User::class, 'user_fun_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }




}
