<?php

namespace App\Models\consulta;

use App\Helpers\Archivos\Archivos;
use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdDinFamiliar extends Model{
    protected $fillable = ['csd_id', 'descripcion', 'relevantes', 'prm_familiar_id', 'prm_hogar_id',
    'descripciona', 'prm_bogota_id', 'prm_traslado_id', 'jefea', 'prm_jefea_id', 'jefeb', 'prm_jefeb_id',
    'descripcionb', 'prm_cuidador_id', 'descripcionc', 'afronta', 'prm_norma_id', 'prm_conoce_id',
    'observacion', 'prm_actuan_id', 'porque', 'prm_solucion_id', 'prm_problema_id', 'prm_destaca_id',
    's_doc_adjunto',
    'prm_positivo_id', 'user_crea_id', 'user_edita_id', 'sis_esta_id','prm_tipofuen_id'];



    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function familiar(){
        return $this->belongsTo(Parametro::class, 'prm_familiar_id');
    }

    public function hogar(){
        return $this->belongsTo(Parametro::class, 'prm_hogar_id');
    }

    public function bogota(){
        return $this->belongsTo(Parametro::class, 'prm_bogota_id');
    }

    public function traslado(){
        return $this->belongsTo(Parametro::class, 'prm_traslado_id');
    }

    public function jefea(){
        return $this->belongsTo(Parametro::class, 'prm_jefea_id');
    }

    public function jefeb(){
        return $this->belongsTo(Parametro::class, 'prm_jefeb_id');
    }

    public function cuidador(){
        return $this->belongsTo(Parametro::class, 'prm_cuidador_id');
    }

    public function norma(){
        return $this->belongsTo(Parametro::class, 'prm_norma_id');
    }

    public function conoce(){
        return $this->belongsTo(Parametro::class, 'prm_conoce_id');
    }

    public function establece(){
        return $this->belongsTo(Parametro::class, 'prm_establece_id');
    }

    public function actuan(){
        return $this->belongsTo(Parametro::class, 'prm_actuan_id');
    }

    public function solucion(){
        return $this->belongsTo(Parametro::class, 'prm_solucion_id');
    }

    public function problema(){
        return $this->belongsTo(Parametro::class, 'prm_problema_id');
    }

    public function negativo(){
        return $this->belongsTo(Parametro::class, 'prm_negativo_id');
    }

    public function destaca(){
        return $this->belongsTo(Parametro::class, 'prm_destaca_id');
    }

    public function positivo(){
        return $this->belongsTo(Parametro::class, 'prm_positivo_id');
    }

    public function antecedentes(){
        return $this->belongsToMany(Parametro::class,'csd_dinfam_antecedente', 'csd_dinfamiliar_id', 'parametro_id');
    }

    public function problemas(){
        return $this->belongsToMany(Parametro::class,'csd_dinfam_problema', 'csd_dinfamiliar_id', 'parametro_id');
    }

    public function normas(){
        return $this->belongsToMany(Parametro::class,'csd_dinfam_norma', 'csd_dinfamiliar_id', 'parametro_id');
    }

    public function establecen(){
        return $this->belongsToMany(Parametro::class,'csd_dinfam_establecen', 'csd_dinfamiliar_id', 'parametro_id');
    }

    public function incumple(){
        return $this->belongsToMany(Parametro::class,'csd_dinfam_incumple', 'csd_dinfamiliar_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }


    public static function transaccion($dataxxxx)
  {
    $objetoxx = DB::transaction(function () use ($dataxxxx) {
        $rutaxxxx = Archivos::getRuta(['requestx'=>$dataxxxx['requestx'],
        'nombarch'=>'s_doc_adjunto_ar',
        'rutaxxxx'=>'csd/dinfamiliar','nomguard'=>'genograma']);
        if($rutaxxxx!=false){
           $dataxxxx['requestx']->request->add(['s_doc_adjunto'=> $rutaxxxx]);
        }
        $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
        } else {
            $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
            $dataxxxx['modeloxx'] = CsdDinFamiliar::create($dataxxxx['requestx']->all());
        }
        if($dataxxxx['requestx']->antecedentes){
            $dataxxxx['modeloxx']->antecedentes()->detach();
            foreach ($dataxxxx['requestx']->antecedentes as $d) {
                $dataxxxx['modeloxx']->antecedentes()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'prm_tipofuen_id'=>2315]);
            }
        }
        if($dataxxxx['requestx']->problemas){
            $dataxxxx['modeloxx']->problemas()->detach();
            foreach ($dataxxxx['requestx']->problemas as $d) {
                $dataxxxx['modeloxx']->problemas()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'prm_tipofuen_id'=>2315]);
            }
        }
        if($dataxxxx['requestx']->normas){
            $dataxxxx['modeloxx']->normas()->detach();
            foreach ($dataxxxx['requestx']->normas as $d) {
                $dataxxxx['modeloxx']->normas()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'prm_tipofuen_id'=>2315]);
            }
        }
        if($dataxxxx['requestx']->establecen){
            $dataxxxx['modeloxx']->establecen()->detach();
            foreach ($dataxxxx['requestx']->establecen as $d) {
                $dataxxxx['modeloxx']->establecen()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'prm_tipofuen_id'=>2315]);
            }
        }

      if($dataxxxx['requestx']->incumple){
            $dataxxxx['modeloxx']->incumple()->detach();
            foreach ($dataxxxx['requestx']->incumple as $d) {
                $dataxxxx['modeloxx']->incumple()->attach($d, ['user_crea_id' => Auth::user()->id, 'user_edita_id' => Auth::user()->id,'prm_tipofuen_id'=>2315]);
            }
        }

        return $dataxxxx['modeloxx'];
    }, 5);
    return $objetoxx;
  }
}
