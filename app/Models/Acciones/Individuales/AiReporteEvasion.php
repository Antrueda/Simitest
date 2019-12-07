<?php

namespace App\Models\Acciones\Individuales;

use Illuminate\Database\Eloquent\Model;
use App\Models\Parametro;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisDependencia;

class AiReporteEvasion extends Model{
    
    protected $fillable = [
        'sis_nnaj_id', 'user_crea_id', 'user_edita_id', 'activo',
        'fecha_diligenciamiento', 'prm_upi_id', 'direccion', 'telefono',
        'lugar_evasion', 'fecha_evasion', 'hora_evasion', 'prm_hor_eva_id',
        'nnaj_talla', 'nnaj_peso', 'prm_contextura_id', 'prm_rostro_id',
        'prm_piel_id', 'prm_colCabello_id', 'prm_tinturado_id', 'tintura',
        'prm_tipCabello_id', 'prm_corCabello_id', 'prm_ojos_id', 'prm_nariz_id',
        'prm_tienelunar_id', 'cuantos', 'prm_tamlunar_id', 'senias',
        'circunstancias', 'prm_familiar1_id', 'nombre_familiar1', 'direccion_familiar1',
        'tel_familiar1', 'prm_familiar2_id', 'nombre_familiar2', 'direccion_familiar2',
        'tel_familiar2', 'observaciones_fam', 'prm_reporta_id', 'prm_llamada_id',
        'radicado', 'recibe_denuncia', 'user_doc1_id', 'user_doc2_id',
        'responsable', 'institución', 'nombre_recibe', 'cargo_recibe',
        'placa_recibe', 'fecha_denuncia', 'hora_denuncia', 'prm_hor_denuncia_id'
    ];
    
    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }
    
    public function upis(){
        return $this->belongsTo(SisDependencia::class, 'prm_upi_id');
    }

    public function horaEvasion(){
        return $this->belongsTo(Parametro::class, 'prm_hor_eva_id');
    }

    public function contextura(){
        return $this->belongsTo(Parametro::class, 'prm_contextura_id');
    }

    public function rostro(){
        return $this->belongsTo(Parametro::class, 'prm_rostro_id');
    }

    public function piel(){
        return $this->belongsTo(Parametro::class, 'prm_piel_id');
    }

    public function colCablello(){
        return $this->belongsTo(Parametro::class, 'prm_colCabello_id');
    }

    public function tinturado(){
        return $this->belongsTo(Parametro::class, 'prm_tinturado_id');
    }

    public function tipoCabello(){
        return $this->belongsTo(Parametro::class, 'prm_tipCabello_id');
    }

    public function corteCabello(){
        return $this->belongsTo(Parametro::class, 'prm_corCabello_id');
    }

    public function ojos(){
        return $this->belongsTo(Parametro::class, 'prm_ojos_id');
    }

    public function nariz(){
        return $this->belongsTo(Parametro::class, 'prm_nariz_id');
    }

    public function tieneLunar(){
        return $this->belongsTo(Parametro::class, 'prm_tienelunar_id');
    }

    public function tamLunar(){
        return $this->belongsTo(Parametro::class, 'prm_tamlunar_id');
    }

    public function familiar1(){
        return $this->belongsTo(Parametro::class, 'prm_familiar1_id');
    }

    public function familiar2(){
        return $this->belongsTo(Parametro::class, 'prm_familiar2_id');
    }

    public function reporta(){
        return $this->belongsTo(Parametro::class, 'prm_reporta_id');
    }

    public function llamada(){
        return $this->belongsTo(Parametro::class, 'prm_llamada_id');
    }

    public function horaDenuncia(){
        return $this->belongsTo(Parametro::class, 'prm_hor_denuncia_id');
    }
}
