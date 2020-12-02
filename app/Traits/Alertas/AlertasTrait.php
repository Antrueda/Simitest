<?php

namespace App\Traits\Alertas;

use App\Models\Mensajes;
use App\Models\Post;
use App\Traits\DatatableTrait;

/**
 * Este trait permite armar las consultas para vsi que arman las datatable
 */
trait AlertasTrait
{
    use DatatableTrait;

    public function getRegistros($request)
    {
        $dataxxxx =  Post::select([
            'posts.id',
            'posts.titulo',
            'posts.descripcion',
            'sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('sis_estas', 'posts.sis_esta_id', '=', 'sis_estas.id')
            ->where('posts.sis_esta_id', 1);
        return $this->getDtGeneral($dataxxxx, $request);
    }

    public function getMensajes($request)
    {
        $dataxxxx =  Mensajes::select([
            'mensajes.id',
            'mensajes.titulo',
            'mensajes.descripcion',
            'sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('sis_estas', 'mensajes.sis_esta_id', '=', 'sis_estas.id')
            ->where('mensajes.sis_esta_id', 1);
        return $this->getDtGeneral($dataxxxx, $request);
    }

   
}
