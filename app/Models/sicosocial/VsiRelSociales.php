<?php

namespace App\Models\sicosocial;

use App\Helpers\Indicadores\IndicadorHelper;
use App\Models\fichaIngreso\FiDatosBasico;
use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiRelSociales extends Model{

    protected $fillable = [
        'vsi_id', 'descripcion', 'prm_dificultad_id', 'completa', 'user_crea_id', 'user_edita_id', 
        'sis_esta_id','i_prm_linea_base_id'
    ];

    protected $attributes = ['user_crea_id' => 1, 'user_edita_id' => 1];

    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function dificultad(){
        return $this->belongsTo(Parametro::class, 'prm_dificultad_id');
    }

    public function facilitas(){
        return $this->belongsToMany(Parametro::class,'vsi_relsol_facilita', 'vsi_relsocial_id', 'parametro_id');
    }

    public function dificultades(){
        return $this->belongsToMany(Parametro::class,'vsi_relsol_dificulta', 'vsi_relsocial_id', 'parametro_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function grabar($dataxxxx, $objetoxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if ($objetoxx != '') {
                /** Se va a modificar el registro */
                /** Cuántos días han transcurrido desde la creación de datos básicos FI */
                $diasxxxx = IndicadorHelper::setDiasTranscurridos($dataxxxx['sis_nnaj_id']);
                /** Saber si se creo el registro después de la línea base */
                $datobasi = FiDatosBasico::where('sis_nnaj_id', $dataxxxx['sis_nnaj_id'])->where('i_prm_linea_base_id', 228)->first();
                /** Para crearse el nuevo registro deben haber transcurido más de 45 días no haber registro */
                if ($diasxxxx > 45 && !isset($datobasi->id)) {
                    /** La línea base se pasa a inactivo para asegurar que no vuelva a ser modificada, 
                     * solo será consultada */
                    $objetoxx->update(['sis_esta_id' => 0]);
                    /** El nuevo registro no es línea base */
                    $dataxxxx['i_prm_linea_base_id'] = 228;
                    /** Insertar nuevo registro */
                    $dataxxxx['user_crea_id'] = Auth::user()->id;
                    $objetoxx = VsiRelSociales::create($dataxxxx);
                } else {
                    /** Actualizar registro */
                    $objetoxx->update($dataxxxx);
                }
            } else {
                /** Es un registro nuevo */
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $dataxxxx['i_prm_linea_base_id'] = 227;
                $objetoxx = VsiRelSociales::create($dataxxxx);
                
            }
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }


}