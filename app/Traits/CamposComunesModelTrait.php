<?php

namespace App\Traits;

use App\Models\User;

/**
 * Este trait Administra los metdos para: user_crea_id, user_edita_id y sis_esta_id que se utilizan en todos los modelos
 */
trait CamposComunesModelTrait
{
    /**
     * Usuario que crea el registro
     *
     * @return object User
     */
    public function userCrea()
    {
        return $this->belongsTo(User::class, 'user_crea_id');
    }
/**
     * Usuario que modifica el registro
     *
     * @return object User
     */
    public function userEdita()
    {
        return $this->belongsTo(User::class, 'user_edita_id');
    }

    /**
     * Estado del registro
     *
     * @return object SisEsta
     */
    public function sisEsta()
    {
        return $this->belongsTo(SisEsta::class);
    }
}
