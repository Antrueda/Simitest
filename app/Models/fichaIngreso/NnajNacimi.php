<?php

namespace App\Models\fichaIngreso;

use App\Models\Sistema\SisDocfuen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NnajNacimi extends Model
{
    protected $fillable = [
        'fi_datos_basico_id',
        'd_nacimiento',
        'sis_municipio_id',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id',
        'sis_docfuen_id',
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
                $dataxxxx['modeloxx'] = NnajNacimi::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }

    public function sis_municipio()
    {
        return $this->belongsTo(SisMunicipio::class);
    }
    public function sis_docfuen()
    {
        return $this->belongsTo(SisDocfuen::class);
    }

}
