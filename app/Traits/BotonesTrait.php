<?php

namespace App\Traits;



/**
 * Este trait se encarga de armar los botones que se utilizan en las vistas
 */
trait BotonesTrait
{
    private $mostrarx = true;
    /**
     * Estructurar los botones
     *
     * @param string $btnxxxxx
     * @return array
     */
    private function getBtnBT($btnxxxxx)
    {
        $botontbr = [
            'a' => [// link
                'tipoxxxx' => 'a',
                'atribute' => [
                    'class' => 'btn btn-sm btn-primary',
                    'href' => ''
                ],
                'tituloxx' => ''
            ],
            'b' => [// button
                'tipoxxxx' => 'button',
                'atribute' => [
                    'class' => 'btn btn-sm btn-primary',
                    'type' => "submit"
                ],
                'tituloxx' => 'GUARDAR'
            ]
        ];
        return $botontbr[$btnxxxxx];
    }

    /**
     * Armar boton
     *
     * @param array $dataxxxx=[
     * 'permisox'=>'' // nombre del permiso es opcional
     * 'accionxx'=>'' // leerxxxx, crearxxx, editarxx,borrarxx,activarx, es obligartorio
     * 'routexxx'=>'' // opcional para el index y obligatorio para las otras acciones (crearxxx, editarxx,borrarxx,activarx)
     * 'parametr'=>[] // parametros para el route, depende de la necesidad del route
     * 'btnxxxxx'=>'' // tipo de boton que se va armar, es obligatorio
     * 'tituloxx'=>'' // texto del botón, es obligatiorio
     * ]
     * @return array
     */
    public function getBotonesBT($dataxxxx)
    {
        $btnxxxxx = [];
        // * permiso y route por defecto
        $permisox = $routexxx = $this->opciones['permisox'];
        // * parámetro por defecto
        $accionxx ='leerxxxx';
        $parametr = [];
        // * Permiso diferente al asignado por defecto ($this->opciones['permisox'])
        if (isset($dataxxxx['permisox'])) {
            $permisox = $dataxxxx['permisox'];
        }
        // * Route diferente al asignado por defecto ($this->opciones['permisox'])
        if (isset($dataxxxx['routexxx'])) {
            $routexxx = $dataxxxx['routexxx'];
        }
        // * El route tiene parametro(s)
        if (isset($dataxxxx['parametr'])) {
            $parametr = $dataxxxx['parametr'];
        }

        // * El route tiene parametro(s)
        if (isset($dataxxxx['accionxx'])) {

            $accionxx = $dataxxxx['accionxx'];
        }


        // * El boton solo se muestar si el usuario tiene permiso para ejecutar esa acción
        if (auth()->user()->can($permisox . '-' . $accionxx)) {
            // * Mostrar el botón o no el caso de la o las datatable para redireccionar al formulario de nuevo registro
            if ($this->mostrarx) {
                // * Boton por defecto
                $btnxxxxx = $this->getBtnBT($dataxxxx['btnxxxxx']);
                switch ($dataxxxx['btnxxxxx']) {
                    // * En caso de que sea un link se arma la ruta
                    case 'a':
                        $btnxxxxx['atribute']['href'] = route($routexxx, $parametr);
                        break;
                }
                // * Texto del botón
                if (isset($dataxxxx['tituloxx'])) {
                    $btnxxxxx['tituloxx'] = $dataxxxx['tituloxx'];
                }
            }
        }
        return $btnxxxxx;
    }

    public function getRespuesta($dataxxxx)
    {

        $respuest=$this->getBotonesBT($dataxxxx);
        if(count($respuest)>0){
            $this->opciones['botoform'][]=$respuest;
        }
        return $respuest;
    }
}
