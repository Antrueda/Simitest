<?php

namespace App\Observers;

use App\Models\Acciones\Individuales\AiReporteEvasion;
use App\Models\Acciones\Individuales\Logs\HAiReporteEvasion;

class AiReporteEvasionObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['departamento_id'] = $modeloxx->departamento_id;
        $log['municipio_id'] = $modeloxx->municipio_id;
        $log['fecha_diligenciamiento'] = $modeloxx->fecha_diligenciamiento;
        $log['prm_upi_id'] = $modeloxx->prm_upi_id;
        $log['lugar_evasion'] = $modeloxx->lugar_evasion;
        $log['fecha_evasion'] = $modeloxx->fecha_evasion;
        $log['hora_evasion'] = $modeloxx->hora_evasion;
        $log['nnaj_talla'] = $modeloxx->nnaj_talla;
        $log['nnaj_peso'] = $modeloxx->nnaj_peso;
        $log['prm_contextura_id'] = $modeloxx->prm_contextura_id;
        $log['prm_rostro_id'] = $modeloxx->prm_rostro_id;
        $log['prm_piel_id'] = $modeloxx->prm_piel_id;
        $log['prm_colcabello_id'] = $modeloxx->prm_colcabello_id;
        $log['prm_tinturado_id'] = $modeloxx->prm_tinturado_id;
        $log['tintura'] = $modeloxx->tintura;
        $log['prm_tipcabello_id'] = $modeloxx->prm_tipcabello_id;
        $log['prm_corcabello_id'] = $modeloxx->prm_corcabello_id;
        $log['prm_ojos_id'] = $modeloxx->prm_ojos_id;
        $log['prm_nariz_id'] = $modeloxx->prm_nariz_id;
        $log['prm_tienelunar_id'] = $modeloxx->prm_tienelunar_id;
        $log['cuantos'] = $modeloxx->cuantos;
        $log['prm_tamlunar_id'] = $modeloxx->prm_tamlunar_id;
        $log['senias'] = $modeloxx->senias;
        $log['circunstancias'] = $modeloxx->circunstancias;
        $log['observaciones_fam'] = $modeloxx->observaciones_fam;
        $log['prm_reporta_id'] = $modeloxx->prm_reporta_id;
        $log['prm_llamada_id'] = $modeloxx->prm_llamada_id;
        $log['radicado'] = $modeloxx->radicado;
        $log['recibe_denuncia'] = $modeloxx->recibe_denuncia;
        $log['user_doc1_id'] = $modeloxx->user_doc1_id;
        $log['user_doc2_id'] = $modeloxx->user_doc2_id;
        $log['responsable'] = $modeloxx->responsable;
        $log['institucion'] = $modeloxx->institucion;
        $log['nombre_recibe'] = $modeloxx->nombre_recibe;
        $log['cargo_recibe'] = $modeloxx->cargo_recibe;
        $log['placa_recibe'] = $modeloxx->placa_recibe;
        $log['fecha_denuncia'] = $modeloxx->fecha_denuncia;
        $log['hora_denuncia'] = $modeloxx->hora_denuncia;
        $log['prm_hor_denuncia_id'] = $modeloxx->prm_hor_denuncia_id;

        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(AiReporteEvasion $modeloxx)
    {
        HAiReporteEvasion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "updated" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiReporteEvasion  $modeloxx
     * @return void
     */
    public function updated(AiReporteEvasion $modeloxx)
    {
        HAiReporteEvasion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "deleted" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiReporteEvasion  $modeloxx
     * @return void
     */
    public function deleted(AiReporteEvasion $modeloxx)
    {
        HAiReporteEvasion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "restored" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiReporteEvasion  $modeloxx
     * @return void
     */
    public function restored(AiReporteEvasion $modeloxx)
    {
        HAiReporteEvasion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiReporteEvasion "force deleted" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiReporteEvasion  $modeloxx
     * @return void
     */
    public function forceDeleted(AiReporteEvasion $modeloxx)
    {
        HAiReporteEvasion::create($this->getLog($modeloxx));
    }
}