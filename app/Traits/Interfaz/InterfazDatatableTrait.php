<?php

namespace App\Traits\Interfaz;


/**
 * realiza la comunicación entre las dos bases de datos=>'{$value->s_iso}'que se busca?
 * * que a traves de una api desarrollada en java la interfaz pueda realizar consultas e insertar registros
 * * al crar un nnaj se digite la cédula y se realice una búsqueda en la db del simi antiguo y este existe alla lo traiga y lo inserte en la nueva base de datos
 * * sino existe lo debe crear en las dos db
 */
trait InterfazDatatableTrait
{
    /**
     * identificar si la búsqujeda se hace por una de las columnas
     *
     * @param object $requestx
     * @return $unomucho
     */
    public function getBuscarIDT($requestx)
    {
        $unomucho = false;
        foreach ($requestx->columns as $key => $value) {
            if ($value['search']['value'] != '' && $key > 0) {
                $unomucho = true;
            }
        }
        return $unomucho;
    }

    /**
     * armar los where adicionales con los campos llenos o con el search principal
     *
     * @param object $requestx
     * @param boolean $unomucho
     * @param object $queryxxx
     * @param array $wherexxx
     * @return $queryxxx
     */
    public function getWhereIDT($requestx, $unomucho, $queryxxx,$wherexxx)
    {
        foreach ($requestx->columns as $key => $value) {
            if ($key > 0 && in_array($value['name'],$wherexxx)) {
                if ($unomucho) {
                    if ($value['search']['value'] != '') {
                        $queryxxx->where($value['name'], 'LIKE', "%{$value['search']['value']}%");
                    }
                } else {
                    $queryxxx->where($value['name'], 'LIKE', "%{$requestx->search['value']}%");
                }
            }
        }
        return $queryxxx;
    }
    /**
     * armar las columnas cuando se esta buscando en otra base de datos
     *
     * @param object $requestx
     * @param array $requestx
     * @return $columnsx
     */
    public function getMergeIDT($requestx,$dataxxxx)
    {
        $columnsx = [];
        foreach ($requestx->columns as $key => $value) {
            if($dataxxxx[$key]['escampox']){
                $columnsx[] = [
                    'data' => $dataxxxx[$key]['data'],
                    'name' => $dataxxxx[$key]['name'],
                    'searchable' => $value['searchable'],
                    'orderable' => $value['orderable'],
                    'search' =>
                    [
                        'value' => $value['search']['value'],
                        'regex' => $value['search']['regex']
                    ]
                ];
            }
        }
        return $columnsx;
    }
}
