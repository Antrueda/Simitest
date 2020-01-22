<?php

namespace App\Models\sicosocial;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class FiNucleoFamiliar extends Model
{
    protected $fillable = ['i_en_uso', 'sis_esta_id', 'user_crea_id', 'user_edita_id'];
    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    public static function nucleo($usuariox)
    {
        $inucleox = 0;
        $nucleoxx = FiDatosBasico::where('sis_nnaj_id', $usuariox)->first();
        if ($nucleoxx == null) {
            $inucleox =FiNucleoFamiliar::create(
                ['i_en_uso' => '1',
                'user_crea_id'=>Auth::user()->id,
                'user_edita_id'=>Auth::user()->id,'
                activo'=>1])->id;
         } else {
            $inucleox = $nucleoxx->fi_nucleo_familiar_id;
        }
        return $inucleox;
    }
}
