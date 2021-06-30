<?php

namespace App\Models\sicosocial\Pivotes;

use App\Models\Parametro;
use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiViolencia;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VsiTipoVio extends Model
{
    protected $table = 'vsi_tipo_vios';

    protected $fillable = [
        'tipo_id',
        'forma_id',
        'vsi_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',
    ];
    public function vsi(){
        return $this->belongsTo(Vsi::class, 'vsi_id');
    }

    public function tipo()
    {
        return $this->belongsTo(Parametro::class, 'tipo_id');
    }
    public function creador(){
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor(){
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    //Violencia familiar
    public function forma()
    {
        return $this->belongsTo(Parametro::class, 'forma_id');
    }
    public static function transaccion($dataxxxx,  $objetoxx)
    {
        $usuariox = DB::transaction(function () use ($dataxxxx, $objetoxx) {
        $dataxxxx['user_edita_id'] = Auth::user()->id;
        if ($objetoxx != '') {
            $objetoxx->update($dataxxxx);
        } else {
            $dataxxxx['user_crea_id'] = Auth::user()->id;
            $objetoxx = VsiTipoVio::create($dataxxxx);
        }
        return $objetoxx;
        }, 5);
        return $usuariox;
    }
}
