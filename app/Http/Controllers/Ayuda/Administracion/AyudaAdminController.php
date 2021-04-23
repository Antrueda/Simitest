<?php

namespace App\Http\Controllers\Ayuda\Administracion;

use App\Models\Ayuda\Ayuda;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AyudaAdminController extends Controller
{

    /**
     * Lista de limitaciones y permisos otorgados de operaciones.
     */
    public function __construct()
    {
        $this->middleware(['permission:ayuda-leer'], ['only' => 'index']);
        $this->middleware(['permission:ayuda-crear'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:ayuda-editar'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:ayuda-cambiar'], ['only' => 'change']);
    }

    /**
     * Mostrar todos los registros de BD paginados ordenado según su última actualización
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ayudaadm = Ayuda::orderby('updated_at', 'desc')->get();
        return view('ayuda.admin.index', [
            'resultado' => $ayudaadm
        ]);
    }

    /**
     * Retorna a la vista de formulario de creación de la ayuda
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ayuda.admin.create');
    }

    /**
     * Lógica de negocio para guardar y gestionar la información recibida
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** Validacion de los datos recibidos de acuerdo a los sig patrones  */
        $request->validate([
            'titulo'  => 'required|string|max:255|unique:ayudas,titulo,NULL,id',
            'cuerpo' => 'required|string|min:2',
        ]);
        /** Visibilidad de la ayuda  */
        $visibilidad = ($request->status == 'on') ? 1 : 0;
        /**
         * Aquí se insertan los datos
         */
        $ayudaadm = Ayuda::create([
            'titulo' => $request->titulo,
            'slug' => Str::slug($request->titulo),
            'cuerpo' => $request->cuerpo,
            'status' => $visibilidad
        ]);
        // Si existe una insercion se verifica imagenes en el cuerpo en el metodo CargarImagenes
        if ($ayudaadm->id > 0) {
            $this->CargarImagenes(1, $ayudaadm->id, $request->cuerpo);
        }
        /** mensaje de exito */
        session()->flash('message', 'Registro ' . $ayudaadm->titulo . ' Creado Exitosamente.');
        return redirect()->route('ayuda.index');
    }

    /**
     * Se selecciona un ID requerido, se busca y se recarga 
     * en la vista para poderlo editar
     *
     * @param  \App\Support  $ayuda
     * @return \Illuminate\Http\Response
     */
    public function edit($ayuda)
    {
        $ayudaadm = Ayuda::find($ayuda);
        return view('ayuda.admin.edit', [
            'ayudaadm' => $ayudaadm
        ]);
    }

    /**
     * Permite actualizar y valida antes de insertar
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Ayuda\Ayuda $ayuda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ayuda)
    {
        /** Validacion de los datos recibidos  */
        $request->validate([
            'titulo' => 'required|string|max:255|unique:ayudas,titulo,' . $request->id . ',id',
            'cuerpo' => 'string|min:2',
        ]);
        /** Visibilidad de la ayuda  */
        $visibilidad = ($request->status == 'on') ? 1 : 0;
        $ayudaadm = Ayuda::find($ayuda);
        $ayudaadm->fill([
            'titulo' => $request->titulo,
            'slug' => Str::slug($request->titulo),
            'cuerpo' => $request->cuerpo,
            'status' => $visibilidad
        ]);
        if ($ayudaadm->save()) {
            $this->CargarImagenes(2, $ayudaadm->id, $request->cuerpo);
        }
        /** mensaje de exito */
        session()->flash('message', 'Registro ' . $ayudaadm->titulo . ' Actualizado Exitosamente.');
        return redirect()->route('ayuda.index');
    }

    /**
     * Método de busqueda y cambia de status
     * @param  $value
     * @return \Illuminate\Http\Response
     */
    public function change($value)
    {
        $ayudaadm = Ayuda::findOrFail($value);
        $changexx = ($ayudaadm->status == 0) ? 1 : 0;
        $ayudaadm->status = $changexx;
        $ayudaadm->save();
        $estadoxx = ($ayudaadm->status == 0) ? 'inactivo' : 'activo';
        session()->flash('message', 'Actualización de Visibilidad de: ' . $ayudaadm->titulo . ' cambio a estado ' . $estadoxx);
        return redirect()->route('ayuda.index');
    }

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

