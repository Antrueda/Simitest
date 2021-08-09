<?php

namespace App\Models\Direccionamiento;

use App\Models\sistema\SisDepen;
use app\Models\sistema\SisMunicipio;
use app\Models\sistema\SisNnaj;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Direccionamiento extends Model
{
    protected $fillable = [
        'fecha', 'upi_id','s_primer_nombre', 's_segundo_nombre','s_primer_apellido','tipo_id',
        's_segundo_apellido', 's_nombre_identitario','apodo', 's_documento','prm_tipodocu_id',
        'sis_municipio_id', 'prm_sexo_id','prm_identidad_genero_id', 'prm_orientacion_sexual_id','prm_etnia_id',
        'prm_poblacion_etnia_id', 'prm_discapacidad_id','prm_cuentadisc_id', 'prm_condicion_id','prm_certifica_id',
        'prm_cabeza_id', 'departamento_cond_id','municipio_cond_id', 'prm_docuaco_id','primer_nombreaco',
        'segundo_nombreaco', 'primer_apellidoaco','segundo_apellidoaco', 'documentoaco','userd_doc',
        'userr_doc', 'sis_nnaj_id','area_id'
   ];  //

   public function sis_nnaj(){
    return $this->belongsTo(SisNnaj::class);
    }

    public function upi(){
        return $this->belongsTo(SisDepen::class,'upi_id');
    }
    public function municipio(){
        return $this->belongsTo(SisMunicipio::class,'sis_municipio_id');
    }

    public function municipiocond(){
        return $this->belongsTo(SisMunicipio::class,'municipio_cond_id');
    }

    public function userd(){
        return $this->belongsTo(User::class,'userd_doc');
    }

    public function userr(){
        return $this->belongsTo(User::class,'userr_doc');
    }


    }
