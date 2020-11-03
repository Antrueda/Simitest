<?php

namespace App\Models\Acciones\Individuales\Logs;

use Illuminate\Database\Eloquent\Model;

class HAiSalidaMenores extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'prm_upi_id',
        'fecha',
        'hora_salida',
        'primer_apellido',
        'segundo_apellido',
        'primer_nombre',
        'segundo_nombre',
        'prm_doc_id',
        'documento',
        'prm_parentezco_id',
        'prm_autorizado_id',
        'ape1_autorizado',
        'ape2_autorizado',
        'nom1_autorizado',
        'nom2_autorizado',
        'prm_doc2_id',
        'doc_autorizado',
        'prm_parentezco2_id',
        'prm_carta_id',
        'prm_copiaDoc_id',
        'prm_copiaDoc2_id',
        'descripcion',
        'objetos',
        'prm_upi2_id',
        'tiempo',
        'novedad',
        'dir_salida',
        'tel_contacto',
        'causa',
        'nombres_recoge',
        'doc_recoge',
        'responsable',
        'user_doc1_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}