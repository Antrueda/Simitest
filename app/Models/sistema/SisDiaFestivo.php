<?php

namespace App\Models\Sistema;

use app\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SisDiaFestivo extends Model
{
    protected $fillable = [
        'diafestivo',
        'sis_esta_id',
        'user_crea_id',
        'user_edita_id'
    ];

    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
    public static function transaccion($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {

            $dataxxxx['requestx']->user_edita_id = Auth::user()->id;
            if ($dataxxxx['modeloxx'] != '') {
                $dataxxxx['modeloxx']->update($dataxxxx['requestx']->all());
            } else {
                $dataxxxx['requestx']->user_crea_id = Auth::user()->id;
                $dataxxxx['modeloxx'] = SisDiaFestivo::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
