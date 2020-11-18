<?php

namespace App\Models\Acciones\Individuales;

use App\Helpers\Archivos\Archivos;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parametro;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisMunicipio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AiReporteEvasion extends Model{
    
    protected $fillable = [
        'sis_nnaj_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
        'departamento_id', 'municipio_id', 'fecha_diligenciamiento', 'prm_upi_id',
        'lugar_evasion', 'fecha_evasion', 'hora_evasion',
        'nnaj_talla', 'nnaj_peso', 'prm_contextura_id', 'prm_rostro_id',
        'prm_piel_id', 'prm_colCabello_id', 'prm_tinturado_id', 'tintura',
        'prm_tipCabello_id', 'prm_corCabello_id', 'prm_ojos_id', 'prm_nariz_id',
        'prm_tienelunar_id', 'cuantos', 'prm_tamlunar_id', 'senias',
        'circunstancias', 'prm_familiar1_id', 'nombre_familiar1', 'direccion_familiar1',
        'tel_familiar1', 'prm_familiar2_id', 'nombre_familiar2', 'direccion_familiar2',
        'tel_familiar2', 'observaciones_fam', 'prm_reporta_id', 'prm_llamada_id',
        'radicado', 'recibe_denuncia', 'user_doc1_id', 'user_doc2_id',
        'responsable', 'institución', 'nombre_recibe', 'cargo_recibe',
        'placa_recibe', 'fecha_denuncia', 'hora_denuncia', 'prm_hor_denuncia_id','s_doc_adjunto'
    ];
    
    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function departamento(){
        return $this->belongsTo(SisDepartamento::class, 'departamento_id');
    }

    public function municipio(){
        return $this->belongsTo(SisMunicipio::class, 'municipio_id');
    }
    
    public function upis(){
        return $this->belongsTo(SisDepen::class, 'prm_upi_id');
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

    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $rutaxxxx = Archivos::getRuta(['requestx'=>$dataxxxx['requestx'],
            'nombarch'=>'s_doc_adjunto_ar',
            'rutaxxxx'=>'aievasion/adjunto','nomguard'=>'documento']);
            if($rutaxxxx!=false){
               $dataxxxx['requestx']->request->add(['s_doc_adjunto'=> $rutaxxxx]);
            }
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                $dataxxxx['requestx']->request->add(['ai_salida_menores_id' => $dataxxxx['modeloxx']->id]);
                $dataxxxx['objetoxx']=$dataxxxx['modeloxx'];
          
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AiReporteEvasion::create($dataxxxx['requestx']->all());
                $dataxxxx['requestx']->request->add(['ai_salida_menores_id' => $dataxxxx['modeloxx']->id]);
                $dataxxxx['objetoxx']=$dataxxxx['modeloxx'];
              
            }
            
         

           return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
