<?php

namespace App\Models\sistema;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class SisInstitucionEdu extends Model
{
    protected $fillable = [
        's_nombre',
        's_telefono',
        's_email',
        'sis_municipio_id',
        'sis_departam_id',
        'user_crea_id',
        'created_at',
        'user_edita_id',
        'sis_esta_id',
        'updated_at',
        'i_prm_sector_id',
        'i_usr_rector_id',
        'i_usr_secretario_id',
        'i_usr_coord_academico_id',
    ];

    protected $attributes = ['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1];

    public static function combo($cabecera, $esajaxxx)
    {
        if ($cabecera)
            $comboxxx = ['' => 'Seleccione'];
        foreach (SisInstitucionEdu::get() as $insteduc) {
            if ($esajaxxx) {
                $comboxxx[] = ['valuexxx' => $insteduc->id, 'optionxx' => $insteduc->s_nombre];
            } else {
                $comboxxx[$insteduc->id] = $insteduc->s_nombre;
            }
        }
        return $comboxxx;
    }
    public function creador()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }
}
