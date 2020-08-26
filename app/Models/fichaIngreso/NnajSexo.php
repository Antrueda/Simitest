<?php

namespace App\Models\fichaIngreso;

use App\Models\Parametro;
use App\Models\Sistema\SisDocfuen;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NnajSexo extends Model
{
    protected $fillable = [
        'fi_datos_basico_id',
        's_nombre_identitario',
        'prm_sexo_id',
        'prm_identidad_genero_id',
        'prm_orientacion_sexual_id',
        'sis_docfuen_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
    ];

    public function fi_datos_basico()
    {
        return $this->belongsTo(FiDatosBasico::class);
    }
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class, 'user_edita_id');
    }
    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = NnajSexo::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }

    public function prmSexo()
    {
        return $this->belongsTo(Parametro::class, 'prm_sexo_id');
    }

    public function prmIdeGenero()
    {
        return $this->belongsTo(Parametro::class, 'prm_identidad_genero_id');
    }
    public function prmOriSexual()
    {
        return $this->belongsTo(Parametro::class, 'prm_orientacion_sexual_id');
    }
    public function sis_docfuen()
    {
        return $this->belongsTo(SisDocfuen::class);
    }
}
