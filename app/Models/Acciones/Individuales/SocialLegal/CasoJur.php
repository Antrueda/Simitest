<?php

namespace App\Models\Acciones\Individuales\SocialLegal;

use App\Models\Sistema\SisNnaj;
use App\Models\sistema\SisUpzbarri;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class CasoJur extends Model
{
    protected $fillable = [
        'user_crea_id', 'user_edita_id', 'sis_esta_id', 
        'upi_id', 'upiorigen_id', 'num_sim','fecha',
        'centro_id', 'censec_id', 'prm_solicita_id',
        'doc_autorizado', 'telefonoauto','ape1_autorizado',
        'ape2_autorizado','celular','celular2',
        'nom1_autorizado', 'nom2_autorizado','prm_doc_id', 
        'prm_parentezco_id','direccionauto', 'sis_municipio_id', 
        'sis_upzbario_id', 'prm_rama_id', 'num_proceso',
        'telfapo', 'telfapo2', 'correoapo','tipoc_id','temac_id',
        'apoderado', 'prm_sujeto', 'consultaca',
        'prm_juzgado', 'asesoriaca', 'sis_nnaj_id',
        'user_id','estacaso',

    ];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function tipocaso(){
        return $this->belongsTo(TipoCaso::class, 'tipoc_id');
    }

    public function temacaso(){
        return $this->belongsTo(TemaCaso::class, 'temac_id');
    }

    public function sis_upzbarri(){
        return $this->belongsTo(SisUpzbarri::class, 'sis_upzbario_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function modifico(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }


}
