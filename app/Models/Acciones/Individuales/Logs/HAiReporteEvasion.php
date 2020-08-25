<?php

namespace app\Models\Acciones\Individuales\Logs;

use Illuminate\Database\Eloquent\Model;

class HAiReporteEvasion extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'departamento_id',
        'municipio_id',
        'fecha_diligenciamiento',
        'prm_upi_id',
        'lugar_evasion',
        'fecha_evasion',
        'hora_evasion',
        'prm_hor_eva_id',
        'nnaj_talla',
        'nnaj_peso',
        'prm_contextura_id',
        'prm_rostro_id',
        'prm_piel_id',
        'prm_colCabello_id',
        'prm_tinturado_id',
        'tintura',
        'prm_tipCabello_id',
        'prm_corCabello_id',
        'prm_ojos_id',
        'prm_nariz_id',
        'prm_tienelunar_id',
        'cuantos',
        'prm_tamlunar_id',
        'senias',
        'circunstancias',
        'prm_familiar1_id',
        'nombre_familiar1',
        'direccion_familiar1',
        'tel_familiar1',
        'prm_familiar2_id',
        'nombre_familiar2',
        'direccion_familiar2',
        'tel_familiar2',
        'observaciones_fam',
        'prm_reporta_id',
        'prm_llamada_id',
        'radicado',
        'recibe_denuncia',
        'user_doc1_id',
        'user_doc2_id',
        'responsable',
        'institución',
        'nombre_recibe',
        'cargo_recibe',
        'placa_recibe',
        'fecha_denuncia',
        'hora_denuncia',
        'prm_hor_denuncia_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
        
        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}