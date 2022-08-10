<?php

namespace App\Traits\Archivos;


trait ArchivoTrait
{
    public function getNombreArchivo($dataxxxx)
    {
        $archivox = $dataxxxx['nomguard'] . '_' .
            str_replace(['-', ' ', ':'], "_", date('Y-m-d H:m:s', time())) .
            '.' . $dataxxxx['requestx']
            ->file($dataxxxx['nombarch'])
            ->extension();
        return $archivox;
    }

    public function getArmarRuta($dataxxxx)
    {
        $nnajxxxx = $dataxxxx['nnajxxxx'];
        $rutarchi = 'Archivos/doc_'
            . $nnajxxxx->fi_datos_basico->nnaj_docu->s_documento . '/nnaj_'
            . $nnajxxxx->id . '/'
            . $dataxxxx['rutaxxxx'] . '/tipodoc_'
            . $dataxxxx['tipodocu'];
        return $rutarchi;
    }
    private  function guardarArchivoCarpeta($dataxxxx)
    {
        $rutaxxxx = false;
        // *  se verifica que ese nombre de archivo exista en el request y se crea en la ruta indicada
        if ($dataxxxx['requestx']->hasFile($dataxxxx['nombarch'])) {

            $rutaxxxx = $dataxxxx['requestx']
                ->file($dataxxxx['nombarch'])
                ->storeAs($this->getArmarRuta($dataxxxx), $this->getNombreArchivo($dataxxxx), 'public');
        }
        return $rutaxxxx;
    }

    public  function getRuta($dataxxxx)
    {
        return $this->guardarArchivoCarpeta($dataxxxx);
    }
}
//
