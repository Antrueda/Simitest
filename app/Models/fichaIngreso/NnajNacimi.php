<?php

namespace App\Models\fichaIngreso;

use App\Models\sistema\SisDocfuen;
use App\Models\sistema\SisMunicipio;
use App\Traits\DateConversor;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NnajNacimi extends Model
{
    use DateConversor; 
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
    public function getEdadAttribute()
    {
        return Carbon::parse($this->d_nacimiento)->age;
    }
    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public function sis_esta()
    {
        return $this->belongsTo(SisEsta::class, 'user_edita_id');
    }
    /**
     * almacenar datos de nacimiento
     *
     * @param array $dataxxxx
     * @return $objetoxx
     */
    public static function getTransaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['user_edita_id'] = Auth::user()->id;
            if (isset($dataxxxx['objetoxx']->nnaj_nacimi->id)) {
                $dataxxxx['objetoxx']->nnaj_nacimi->update($dataxxxx);
            } else {
                $dataxxxx['user_crea_id'] = Auth::user()->id;
                $dataxxxx['modeloxx'] = NnajNacimi::create($dataxxxx);
            }
            return $dataxxxx;
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
