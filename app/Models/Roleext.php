<?php

namespace App\Models;

use App\Models\Sistema\SisEsta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class Roleext extends Role
{
    protected $fillable = ['name', 'sis_esta_id', 'user_crea_id','guard_name', 'estusuario_id','user_edita_id'];
    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
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
                $dataxxxx['requestx']->request->add(['guard_name' => 'web']);
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $dataxxxx['modeloxx'] = Roleext::create($dataxxxx['requestx']->all());
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return $objetoxx;
    }
}
