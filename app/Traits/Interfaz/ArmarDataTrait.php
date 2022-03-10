<?php

namespace App\Traits\Interfaz;

use App\Exceptions\Interfaz\SimiantiguoException;

use App\Models\Simianti\Ge\FichaAcercamientoIngreso;
use App\Models\Simianti\Ge\GeDireccione;
use App\Models\Simianti\Ge\GeNnajDocumento;
use Illuminate\Support\Facades\Auth;

/**
 * realiza la búsqueda de un nnaj en el antiguo simi para migrarlo al nuevo desarrollo
 */
trait ArmarDataTrait
{
    /**
     * datos que se consultan del nnaj para migrar datos basicos del nnaj al nuevo desarrollo
     *
     * @return void
     */
    public function getGeNnajCamposCNSFT()
    {
        $camposxx = [
            'ge_nnaj.id_nnaj', 'ge_nnaj.tipo_poblacion', 'ge_upi_nnaj.id_upi', 'ge_upi_nnaj.modalidad', 'ge_upi_nnaj.servicio',
            'ge_upi_nnaj.fecha_insercion as insercion_upi', 'ge_nnaj.primer_nombre', 'ge_nnaj.segundo_nombre',
            'ge_nnaj.primer_apellido', 'ge_nnaj.segundo_apellido', 'ge_nnaj.nombre_identitario', 'ge_nnaj.apodo',
            'ge_nnaj.fecha_nacimiento', 'ge_nnaj.id_nacimiento', 'ge_nnaj.id_pais_nacimiento', 'ge_nnaj.genero', 'ge_nnaj.genero_identifica',
            'ge_nnaj.sexo_orienta', 'ge_nnaj.rh', 'ge_nnaj_documento.tipo_documento', 'ge_nnaj.cuenta_doc',
            'ge_nnaj_documento.numero_documento', 'ge_nnaj_documento.id_lugar_expedicion',
            'ge_nnaj_documento.fecha_insercion as insercion_documento', 'ge_nnaj.situacion_mil',
            'ge_nnaj.clase_libreta_militar', 'ge_nnaj.estado_civil', 'ge_nnaj.etnia', 'ge_nnaj.condicion_vestido',

        ];
        return $camposxx;
    }
    /**
     * consultar el nnaj que se migra al nuevo desarrollo
     *
     * @param array $dataxxxx
     * @return $respuest
     */
    public function getGeNnajCNSFT_bk($dataxxxx)
    {
        $camposxx = $this->getGeNnajCamposCNSFT();
        $camposxx[]='ficha_acercamiento_ingreso.fecha_apertura';
        $respuest = GeNnajDocumento::select($camposxx)
        ->join('ge_nnaj',function($queryxxx){
            $queryxxx->on('ge_nnaj_documento.id_nnaj', '=', 'ge_nnaj.id_nnaj');
            $queryxxx->join('ge_upi_nnaj', 'ge_nnaj.id_nnaj', '=', 'ge_upi_nnaj.id_nnaj');
            if(Auth::user()->s_documento=="111111111111"){
                $queryxxx->leftJoin('ge_direcciones', 'ge_nnaj.id_nnaj', '=', 'ge_direcciones.id_nnaj');
                $queryxxx->leftJoin('ficha_acercamiento_ingreso', 'ge_nnaj.id_nnaj', '=', 'ge_direcciones.id_nnaj');
                // FichaAcercamientoIngreso
            }
    
        })
            // ->join('ge_nnaj', 'ge_nnaj_documento.id_nnaj', '=', 'ge_nnaj.id_nnaj')
            // ->join('ge_upi_nnaj', 'ge_nnaj.id_nnaj', '=', 'ge_upi_nnaj.id_nnaj')
            // ->join('ge_direcciones', 'ge_nnaj.id_nnaj', '=', 'ge_direcciones.id_nnaj')
            ->where('ge_nnaj_documento.numero_documento', $dataxxxx['docuagre'])
            ->where('ge_upi_nnaj.estado', 'A')
            ->orderBy('ge_nnaj_documento.fecha_insercion', 'DESC')
            ->orderBy('ge_upi_nnaj.fecha_insercion', 'ASC')
            ->first();
        return $respuest;
    }
    /**
     * armar la data del nnaj
     *
     * @param array $request
     * @return $dataxxxx
     */
    public function getArmarData_bk($requestx)
    {
        $dataxxxx = $this->getGeNnajCNSFT_bk($requestx);
        if ($dataxxxx != null) {
            $dataxxxx->id_barrio = '';
            // $direccio = GeDireccione::where('id_nnaj', $dataxxxx->id_nnaj)->orderBy('fecha_insercion','desc')->first();
            // if ($direccio != null) {
            //     $dataxxxx->id_barrio = $direccio->id_barrio;
            // }
            // $fichacer = FichaAcercamientoIngreso::where('id_nnaj', $dataxxxx->id_nnaj)->first();
            // if ($fichacer == null) {
            //     $dataxxxx['tituloxx'] = 'NNJA SIN FICHA!';
            //     $dataxxxx['mensajex'] = 'El NNAJ: ' . $dataxxxx->primer_nombre . ' ' .
            //         $dataxxxx->segundo_nombre . ' ' .
            //         $dataxxxx->primer_apellido . ' ' .
            //         $dataxxxx->segundo_apellido . ' con documento de identidad:  ' . $requestx['docuagre'] . ' no se puede migrar porque no tiene ficha de ingreso en el antiguo simi';
            //     throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
            // } else {
                // $dataxxxx->fecha_apertura = $fichacer->fecha_apertura;
            // }
        } else {
            // $dataxxxx  = null;
        }
        return $dataxxxx;
    }   
}
