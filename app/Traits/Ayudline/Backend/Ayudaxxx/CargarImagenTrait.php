<?php

namespace App\Traits\Ayudline\Backend\Ayudaxxx;

use App\Http\Requests\Ayudline\Backend\AyudaBackendCrearRequest;
use App\Models\Ayuda\Ayuda;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait CargarImagenTrait
{

    public function CargarImagenes($opcionAlmacenado, $directorioId, $cuerpoHtml = null)
    {
        $ruta_almacenado = "/Archivos/ayuda/" . $directorioId;
        //Opcion de eliminar imagenes del directorio segun el objeto recibido
        if ($opcionAlmacenado == 3) {
            $this->BorrarArchivosDirectorios(public_path() . $ruta_almacenado);
        } else {
            /** Carga de las imagenes contenidas en el cuerpo */
            $domdocumento = new \DomDocument();
            $domdocumento->loadHtml($cuerpoHtml, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $imagenes = $domdocumento->getElementsByTagName('img');
            /** Consulta cantidad de imagenes a procesar */
            if (sizeof($imagenes) > 0) {
                /** Consulta si la opcion en una actualizacion del objeto */
                if ($opcionAlmacenado == 2) {
                    $this->BorrarArchivosDirectorios(public_path() . $ruta_almacenado);
                }
                /** Consulta si el directorio existe */
                if (!is_dir($ruta_almacenado)) {
                    mkdir(public_path() . $ruta_almacenado, 0777, true);
                }
            }

            foreach ($imagenes as $indice => $imagenes_body) {
                $data = $imagenes_body->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $nombre_imagen = $ruta_almacenado . "/" . time() . $indice . '.png';
                $path = public_path() . $nombre_imagen;
                file_put_contents($path, $data);
                $imagenes_body->removeAttribute('src');
                $imagenes_body->setAttribute('src', $nombre_imagen);
            }
        }
    }

    /**
     * Elimina un directorio existente, incluyendo el contenido de imagen.
     */
    public function BorrarArchivosDirectorios($directorio)
    {
        $archivos = glob($directorio . '/*');
        foreach ($archivos as $archivo) {
            if (is_file($archivo))
                unlink($archivo);
        }
        rmdir($directorio);
    }
}
