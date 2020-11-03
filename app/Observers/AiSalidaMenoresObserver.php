<?php

namespace App\Observers;

use App\Models\Acciones\Individuales\AiSalidaMenores;
use App\Models\Acciones\Individuales\Logs\HAiSalidaMenores;

class AiSalidaMenoresObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['prm_upi_id'] = $modeloxx->prm_upi_id;
        $log['fecha'] = $modeloxx->fecha;
        $log['hora_salida'] = $modeloxx->hora_salida;
        $log['primer_apellido'] = $modeloxx->primer_apellido;
        $log['segundo_apellido'] = $modeloxx->segundo_apellido;
        $log['primer_nombre'] = $modeloxx->primer_nombre;
        $log['segundo_nombre'] = $modeloxx->segundo_nombre;
        $log['prm_doc_id'] = $modeloxx->prm_doc_id;
        $log['documento'] = $modeloxx->documento;
        $log['prm_parentezco_id'] = $modeloxx->prm_parentezco_id;
        $log['prm_autorizado_id'] = $modeloxx->prm_autorizado_id;
        $log['ape1_autorizado'] = $modeloxx->ape1_autorizado;
        $log['ape2_autorizado'] = $modeloxx->ape2_autorizado;
        $log['nom1_autorizado'] = $modeloxx->nom1_autorizado;
        $log['nom2_autorizado'] = $modeloxx->nom2_autorizado;
        $log['prm_doc2_id'] = $modeloxx->prm_doc2_id;
        $log['doc_autorizado'] = $modeloxx->doc_autorizado;
        $log['prm_parentezco2_id'] = $modeloxx->prm_parentezco2_id;
        $log['prm_carta_id'] = $modeloxx->prm_carta_id;
        $log['prm_copiaDoc_id'] = $modeloxx->prm_copiaDoc_id;
        $log['prm_copiaDoc2_id'] = $modeloxx->prm_copiaDoc2_id;
        $log['descripcion'] = $modeloxx->descripcion;
        $log['objetos'] = $modeloxx->objetos;
        $log['prm_upi2_id'] = $modeloxx->prm_upi2_id;
        $log['tiempo'] = $modeloxx->tiempo;
        $log['novedad'] = $modeloxx->novedad;
        $log['dir_salida'] = $modeloxx->dir_salida;
        $log['tel_contacto'] = $modeloxx->tel_contacto;
        $log['causa'] = $modeloxx->causa;
        $log['nombres_recoge'] = $modeloxx->nombres_recoge;
        $log['doc_recoge'] = $modeloxx->doc_recoge;
        $log['responsable'] = $modeloxx->responsable;
        $log['user_doc1_id'] = $modeloxx->user_doc1_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(AiSalidaMenores $modeloxx)
    {
        HAiSalidaMenores::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiSalidaMenores "updated" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiSalidaMenores  $modeloxx
     * @return void
     */
    public function updated(AiSalidaMenores $modeloxx)
    {
        HAiSalidaMenores::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiSalidaMenores "deleted" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiSalidaMenores  $modeloxx
     * @return void
     */
    public function deleted(AiSalidaMenores $modeloxx)
    {
        HAiSalidaMenores::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiSalidaMenores "restored" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiSalidaMenores  $modeloxx
     * @return void
     */
    public function restored(AiSalidaMenores $modeloxx)
    {
        HAiSalidaMenores::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiSalidaMenores "force deleted" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiSalidaMenores  $modeloxx
     * @return void
     */
    public function forceDeleted(AiSalidaMenores $modeloxx)
    {
        HAiSalidaMenores::create($this->getLog($modeloxx));
    }
}