<?php

namespace App\Models\consulta;

use Illuminate\Database\Eloquent\Model;

use App\Models\Parametro;
use App\Models\User;
use App\Models\sistema\SisMunicipio;
use App\Models\sistema\SisDepartam;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CsdViolencia extends Model{

    protected $fillable = ['csd_id', 'prm_condicion_id', 'departamento_cond_id',
    'municipio_cond_id', 'prm_certificado_id', 'departamento_cert_id', 'municipio_cert_id',
    'user_crea_id', 'user_edita_id', 'sis_esta_id','prm_tipofuen_id'];

    

    public function csd(){
        return $this->belongsTo(Csd::class, 'csd_id');
    }

    public function condicion(){
        return $this->belongsTo(Parametro::class, 'prm_condicion_id');
    }

    public function departamentoCond(){
        return $this->belongsTo(SisDepartam::class, 'departamento_cond_id');
    }

    public function municipioCond(){
        return $this->belongsTo(SisMunicipio::class, 'municipio_cond_id');
    }

    public function certificado(){
        return $this->belongsTo(Parametro::class, 'prm_certificado_id');
    }

    public function departamentoCert(){
        return $this->belongsTo(SisDepartam::class, 'departamento_cert_id');
    }

    public function municipioCert(){
        return $this->belongsTo(SisMunicipio::class, 'municipio_cert_id');
    }

    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function transaccion($dataxxxx,$objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            $dataxxxx['prm_tipofuen_id'] = 2315;
            $dataxxxx['sis_esta_id'] = 1;
            if ($objetoxx != '') {
                $objetoxx->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $objetoxx = CsdViolencia::create($dataxxxx);
            }

         return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
