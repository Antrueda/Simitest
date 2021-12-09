<?php

namespace App\Models\Direccionamiento\Logs;


use Illuminate\Database\Eloquent\Model;

class HDireccionamiento extends Model
{
    protected $table = 'h_direccionamientos'; 
    protected $fillable = [
        'fecha', 'upi_id','s_primer_nombre', 's_segundo_nombre','s_primer_apellido','tipo_id',
        's_segundo_apellido', 's_nombre_identitario','apodo', 's_documento','prm_tipodocu_id',
        'sis_municipio_id', 'prm_sexo_id','prm_identidad_genero_id', 'prm_orientacion_sexual_id','prm_etnia_id',
        'prm_poblacion_etnia_id', 'prm_discapacidad_id','prm_cuentadisc_id', 'prm_condicion_id','prm_certifica_id',
        'prm_cabeza_id', 'departamento_cond_id','municipio_cond_id', 'prm_docuaco_id','primer_nombreaco',
        'segundo_nombreaco', 'primer_apellidoaco','segundo_apellidoaco', 'documentoaco','userd_doc',
        'userr_doc', 'sis_nnaj_id','area_id','sis_pai_id','sis_departam_id','d_nacimiento','incompleto',
        'departamento_cert_id','municipio_cert_id','sis_esta_id','user_crea_id','user_edita_id',
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
   ];  //

  

    }
