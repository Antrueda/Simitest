<?php

namespace App\Models\consulta;


use App\Models\consulta\pivotes\CsdRescamass;
use App\Models\consulta\pivotes\CsdRescomparte;
use App\Models\consulta\pivotes\CsdReshogar;
use App\Models\consulta\pivotes\CsdResideambiente;
use App\Models\consulta\pivotes\CsdResobsers;
use App\Models\consulta\pivotes\CsdResservi;
use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use App\Models\sistema\SisUpz;
use App\Models\sistema\SisBarrio;
use App\Models\sistema\SisLocalidad;
use App\Models\sistema\SisUpzbarri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdResidencia extends Model{

    protected $fillable = ['csd_id',
    'prm_tipo_id',
    'prm_es_id',
    'prm_dir_tipo_id',
    'prm_dir_zona_id',
    'prm_dir_via_id',
    'dir_nombre',
    'prm_dir_alfavp_id',
    'prm_dir_bis_id',
    'prm_dir_alfabis_id',
    'prm_dir_cuadrantevp_id',
    'dir_generadora',
    'prm_dir_alfavg_id',
    'dir_placa',
    'prm_dir_cuadrantevg_id',
    'prm_estrato_id',
    'dir_complemento',
    // 'sis_localidad_id',
    // 'sis_upz_id',
    'sis_upzbarri_id',
    'telefono_uno',
    'telefono_dos',
    'telefono_tres',
    'email',
    'prm_piso_id',
    'prm_muro_id',
    'prm_higiene_id',
    'prm_tipofuen_id',
    'prm_ventilacion_id',
    'prm_iluminacion_id',
    'prm_orden_id',
    'user_crea_id',
    'user_edita_id',
    'numerocamas',
    'prm_hacinam_id',
    'sis_esta_id'];

    protected $attributes = ['user_crea_id'=>1,'user_edita_id'=>1];

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function tipo(){
        return $this->belongsTo(Parametro::class, 'prm_tipo_id');
    }

    public function es(){
        return $this->belongsTo(Parametro::class, 'prm_es_id');
    }

    public function dirTipo(){
        return $this->belongsTo(Parametro::class, 'prm_dir_tipo_id');
    }

    public function dirZona(){
        return $this->belongsTo(Parametro::class, 'prm_dir_zona_id');
    }

    public function dirVia(){
        return $this->belongsTo(Parametro::class, 'prm_dir_via_id');
    }

    public function dirAlfavp(){
        return $this->belongsTo(Parametro::class, 'prm_dir_alfavp_id');
    }

    public function dirBis(){
        return $this->belongsTo(Parametro::class, 'prm_dir_bis_id');
    }

    public function dirAlfabis(){
        return $this->belongsTo(Parametro::class, 'prm_dir_alfabis_id');
    }

    public function dirCuadrantevp(){
        return $this->belongsTo(Parametro::class, 'prm_dir_cuadrantevp_id');
    }

    public function dirAlfavg(){
        return $this->belongsTo(Parametro::class, 'prm_dir_alfavg_id');
    }

    public function dirCuadrantevg(){
        return $this->belongsTo(Parametro::class, 'prm_dir_cuadrantevg_id');
    }

    public function estrato(){
        return $this->belongsTo(Parametro::class, 'prm_estrato_id');
    }



    public function sis_upzbarri(){
        return $this->belongsTo(SisUpzbarri::class, 'sis_upzbarri_id');
    }

    public function piso(){
        return $this->belongsTo(Parametro::class, 'prm_piso_id');
    }

    public function muro(){
        return $this->belongsTo(Parametro::class, 'prm_muro_id');
    }

    public function higiene(){
        return $this->belongsTo(Parametro::class, 'prm_higiene_id');
    }

    public function hacinamiento(){
        return $this->belongsTo(Parametro::class, 'prm_hacinam_id');
    }

    public function ventilacion(){
        return $this->belongsTo(Parametro::class, 'prm_ventilacion_id');
    }

    public function iluminacion(){
        return $this->belongsTo(Parametro::class, 'prm_iluminacion_id');
    }

    public function orden(){
        return $this->belongsTo(Parametro::class, 'prm_orden_id');
    }

    public function ambientes(){
        return $this->belongsToMany(Parametro::class,'csd_reside_ambiente', 'csd_residencia_id', 'parametro_id');
    }

    public function comparte(){
        return $this->belongsToMany(Parametro::class,'csd_rescamass', 'csd_residencia_id', 'prm_comparte_id');
    }

    public function nnaj_sit_mil()
    {
        return $this->hasOne(NnajSitMil::class);
    }

    public function resobservacion()
    {
        return $this->hasOne(CsdResobsers::class);
    }

    public function reshogar()
    {
        return $this->hasMany(CsdReshogar::class,'csd_residencia_id');
    }

    public function rescomparte()
    {
        return $this->hasMany(CsdRescomparte::class,'csd_residencia_id');
    }

    public function rescamas()
    {
        return $this->hasOne(CsdRescamass::class);
    }
    public function csdresservi()
    {
        return $this->hasMany(CsdResservi::class,'csd_residencia_id');
           
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    private static function grabarOpciones($objetoxx, $dataxxxx)
    {
        CsdResideambiente::where('csd_residencia_id', $objetoxx->id)->delete();
        $datosxxx = [
            'user_crea_id' => Auth::user()->id,
            'user_edita_id' => Auth::user()->id,
            'sis_esta_id' => 1,
            'csd_residencia_id' => $objetoxx->id
        ];
        foreach ($dataxxxx['parametro_id'] as $registro) {
            $datosxxx['parametro_id'] = $registro;
            CsdResideambiente::create($datosxxx);
        }
    }
    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
                $dataxxxx['csd_residencia_id'] = $objetoxx->id;
                $dataxxxx['objetoxx']=$objetoxx;
                if ($objetoxx->resobservacion != '') {
                $objetoxx->resobservacion->update($dataxxxx);
                 }else{
                    CsdResobsers::create($dataxxxx);
                 }
             }else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = CsdResidencia::create($dataxxxx);
                $dataxxxx['csd_residencia_id'] = $objetoxx->id;
                $dataxxxx['objetoxx']=$objetoxx;
                CsdResobsers::create($dataxxxx);
            }
            $objetoxx->ambientes()->detach();
            if($dataxxxx['ambientes']){
                foreach ($dataxxxx['ambientes'] as $d) {
                    $objetoxx->ambientes()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1,'prm_tipofuen_id'=>2315]);
                }
            }
            $objetoxx->comparte()->detach();
            if($dataxxxx['comparte']){
                foreach ($dataxxxx['comparte'] as $d) {
                    $objetoxx->comparte()->attach($d, ['user_crea_id' => 1, 'user_edita_id' => 1]);
                }
            }


            return $objetoxx;
        }, 5);
        return $usuariox;
    }

    
}
