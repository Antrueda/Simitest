<?php

namespace App\Models\Acciones\Individuales;

use App\Models\Acciones\Individuales\pivotes\AiSalidaMenoresCon;
use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisDepen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AiSalidaMenores extends Model{
    protected $fillable = [
        'sis_nnaj_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id',
        'prm_upi_id', 'fecha', 'hora_salida', 
        'primer_apellido', 'segundo_apellido', 'primer_nombre', 'segundo_nombre',
        'prm_doc_id', 'documento', 'prm_parentezco_id', 'prm_autorizado_id',
        'ape1_autorizado', 'ape2_autorizado', 'nom1_autorizado', 'nom2_autorizado',
        'prm_doc2_id', 'doc_autorizado', 'prm_parentezco2_id', 'prm_carta_id',
        'prm_copiaDoc_id', 'prm_copiaDoc2_id', 'descripcion', 'objetos', 
        'prm_upi2_id', 'tiempo', 'novedad', 'dir_salida', 'tel_contacto',
        'causa', 'nombres_recoge', 'doc_recoge', 'responsable', 'user_doc1_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function nnaj(){
        return $this->belongsTo(SisNnaj::class, 'sis_nnaj_id');
    }

    public function upis(){
        return $this->belongsTo(SisDepen::class, 'prm_upi_id');
    }
    
    public function documento(){
        return $this->belongsTo(Parametro::class, 'prm_doc_id');
    }

    public function parentezco(){
        return $this->belongsTo(Parametro::class, 'prm_parentezco_id');
    }

    public function autorizado(){
        return $this->belongsTo(Parametro::class, 'prm_autorizado_id');
    }

    public function documentoDos(){
        return $this->belongsTo(Parametro::class, 'prm_doc2_id');
    }

    public function parentezcoDos(){
        return $this->belongsTo(Parametro::class, 'prm_parentezco2_id');
    }

    public function carta(){
        return $this->belongsTo(Parametro::class, 'prm_carta_id');
    }

    public function copiaDocumento(){
        return $this->belongsTo(Parametro::class, 'prm_copiaDoc_id');
    }

    public function copiaDocumentoDos(){
        return $this->belongsTo(Parametro::class, 'prm_copiaDoc2_id');
    }

    public function objetivo(){
        return $this->belongsToMany(Parametro::class,'ai_salida_menores_obj', 'ai_salida_menores_id', 'parametro_id');
    }
    public function condiciones()
    {
        return $this->hasOne(AiSalidaMenoresCon::class);
    }


    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
                $dataxxxx['requestx']->request->add(['ai_salida_menores_id' => $dataxxxx['modeloxx']->id]);
                $dataxxxx['objetoxx']=$dataxxxx['modeloxx'];
                if ($dataxxxx['modeloxx']->condiciones != '') {
                    $dataxxxx['modeloxx']->condiciones->update($dataxxxx['requestx']->all());
                }else{
                    AiSalidaMenoresCon::create($dataxxxx['requestx']->all());
                }
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = AiSalidaMenores::create($dataxxxx['requestx']->all());
                $dataxxxx['requestx']->request->add(['ai_salida_menores_id' => $dataxxxx['modeloxx']->id]);
                $dataxxxx['objetoxx']=$dataxxxx['modeloxx'];
                AiSalidaMenoresCon::create($dataxxxx['requestx']->all());
            }
            
            $dataxxxx['modeloxx']->objetivo()->detach();
            if($dataxxxx['requestx']->objetivo){
              foreach ( $dataxxxx['requestx']->objetivo as $d) {
                    $dataxxxx['modeloxx']->objetivo()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
                }
            }

           return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
