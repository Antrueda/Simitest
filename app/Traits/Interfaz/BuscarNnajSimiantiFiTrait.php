<?php

namespace App\Traits\Interfaz;

use App\Exceptions\Interfaz\SimiantiguoException;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\Parametro;
use App\Models\Simianti\Ge\FichaAcercamientoIngreso;
use App\Models\Simianti\Ge\GeDireccione;
use App\Models\Simianti\Ge\GeNnajDocumento;
use app\Models\sistema\SisPai;
use Illuminate\Support\Facades\Auth;

/**
 * realiza la búsqueda de un nnaj en el antiguo simi para migrarlo al nuevo desarrollo
 */
trait BuscarNnajSimiantiFiTrait
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
    public function getGeNnajCNSFT($dataxxxx)
    {
        $camposxx = $this->getGeNnajCamposCNSFT();
        $respuest = GeNnajDocumento::select($camposxx)
            ->join('ge_nnaj', 'ge_nnaj_documento.id_nnaj', '=', 'ge_nnaj.id_nnaj')
            ->join('ge_upi_nnaj', 'ge_nnaj.id_nnaj', '=', 'ge_upi_nnaj.id_nnaj')
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
    public function getArmarData($requestx)
    {
        $dataxxxx = $this->getGeNnajCNSFT($requestx);
        $document = NnajDocu::where('s_documento', $requestx['docuagre'])->first();
        if (Auth::user()->s_documento == 17496705) {
            // ddd($document->toArray());
        }
        if ($dataxxxx != null) {
            $dataxxxx->id_barrio = '';
            $direccio = GeDireccione::where('id_nnaj', $dataxxxx->id_nnaj)->first();
            if ($direccio != null) {
                $dataxxxx->id_barrio = $direccio->id_barrio;
            }
            $fichacer = FichaAcercamientoIngreso::where('id_nnaj', $dataxxxx->id_nnaj)->first();
            if ($fichacer == null) {
                $dataxxxx['tituloxx'] = 'NNJA SIN FICHA!';
                $dataxxxx['mensajex'] = 'El NNAJ: ' . $dataxxxx->primer_nombre . ' ' .
                    $dataxxxx->segundo_nombre . ' ' .
                    $dataxxxx->primer_apellido . ' ' .
                    $dataxxxx->segundo_apellido . ' con documento de identidad:  ' . $requestx['docuagre'] . ' no se puede migrar porque no tiene ficha de ingreso en el antiguo simi';
                throw new SimiantiguoException(['vistaxxx' => 'errors.interfaz.simianti.errorgeneral', 'dataxxxx' => $dataxxxx]);
            } else {
                $dataxxxx->fecha_apertura = $fichacer->fecha_apertura;
            }
        } else {
            // $dataxxxx  = null;
        }
        return $dataxxxx;
    }
    /**
     * armar data para la tabla fi_datos_basicos datos basicos
     *
     * @param object $dataxxxx (getArmarData)
     * @return $objetoxx
     */
    public function getFiDatosBasicoBNSFT($dataxxxx)
    {
        $objetoxx = new FiDatosBasico;
        $objetoxx->s_primer_nombre = $dataxxxx->primer_nombre;
        $objetoxx->s_segundo_nombre = $dataxxxx->segundo_nombre;
        if (is_null($dataxxxx->segundo_nombre)) {
            $objetoxx->s_segundo_nombre = ' ';
        }
        $objetoxx->s_primer_apellido = $dataxxxx->primer_apellido;
        $objetoxx->s_segundo_apellido = $dataxxxx->segundo_apellido;
        if (is_null($dataxxxx->segundo_apellido)) {
            $objetoxx->s_segundo_apellido = ' ';
        }

        $objetoxx->s_nombre_identitario = $dataxxxx->nombre_identitario;
        if (is_null($dataxxxx->nombre_identitario)) {
            $objetoxx->s_nombre_identitario = ' ';
        }
        $objetoxx->s_apodo = $dataxxxx->apodo;
        if (is_null($dataxxxx->apodo)) {
            $objetoxx->s_apodo = ' ';
        }
        $objetoxx->prm_vestimenta_id = $this->getParametrosSimiMultivalor(
            [
                'codigoxx' => $dataxxxx->condicion_vestido,
                'tablaxxx' => 'DICOTOMIAS',
                'temaxxxx' => 290,
                'testerxx' => false
            ]
        )->id;

        return $objetoxx;
    }
    /**
     * armar datos para fi_diligenc
     *
     * @param objete $objetoxx
     * @param objete $dataxxxx (getArmarData)
     * @return $objetoxx
     */
    public function getFiDiligencBNSFT($objetoxx, $dataxxxx)
    {
        $objetoxx->diligenc = explode(' ', $dataxxxx->fecha_apertura)[0];
        return $objetoxx;
    }
    /**
     * armar datos para la tabla sis_nnaj datos de la tabla principal de los nnajs
     *
     * @param object $objetoxx
     * @param object $dataxxxx (getArmarData)
     * @return $objetoxx
     */
    public function getSisNnajBNSFT($objetoxx, $dataxxxx)
    {
        $objetoxx->prm_tipoblaci_id = $this->getParametrosSimiMultivalor(
            [
                'codigoxx' => $dataxxxx->tipo_poblacion,
                'tablaxxx' => 'TIPOPOB',
                'temaxxxx' => 119,
                'testerxx' => false
            ]
        )->id;
        return $objetoxx;
    }
    /**
     * armar datos para nnaj_upis y nnaj_deses datos de la upi principal asignada y servicio asignado al nnaj
     *
     * @param objete $objetoxx
     * @param objete $dataxxxx (getArmarData)
     * @return $objetoxx
     */
    public function gerSisDepenYSisServicioBNSFT($objetoxx, $dataxxxx)
    {
        $objetoxx->sis_depen_id = $this->getUpiSimi(['idupixxx' => $dataxxxx->id_upi])->id;
        $servicio = $dataxxxx->modalidad;
        if ($servicio == null) {
            $servicio = $dataxxxx->servicio;
        }

        $objetoxx->sis_servicio_id = $this->getServiciosUpi(
            [
                'codigoxx' =>  $servicio,
                'sisdepen' => $objetoxx->sis_depen_id,
                'datobasi' => true,
                'nnajxxxx' => $dataxxxx
            ]
        )->id;

        return $objetoxx;
    }


    /**
     * armar datos para la tabla nnaj_nacimi datos de nacimiento del nnaj
     *
     * @param objete $objetoxx
     * @param objete $dataxxxx (getArmarData)
     * @return $objetoxx
     */
    public function getNnajNacimiBNSFT($objetoxx, $dataxxxx)
    {
        $departam = 1;
        $municipx = 1;
        $paisxxxx=SisPai::where('simianti_id',$dataxxxx->id_pais_nacimiento)->first()->id;
        if ($paisxxxx == 48) {
            $municipi = $this->getMunicipoSimi(['idmunici' => $dataxxxx->id_nacimiento]);
            $departam = $municipi->sis_departam_id;
            $municipx =  $municipi->id;
        }
        
        $objetoxx->nnaj_nacimi = new NnajNacimi;
        $objetoxx->d_nacimiento = $objetoxx->nnaj_nacimi->d_nacimiento = explode(' ', $dataxxxx->fecha_nacimiento)[0];

        $objetoxx->sis_municipio_id = $municipx;
        $objetoxx->sis_departam_id = $departam;
        $objetoxx->sis_pai_id = $paisxxxx;
        return $objetoxx;
    }
    /**
     * armar data para la tabala nnaj_sexos datos de sexo del nnaj
     *
     * @param objete $objetoxx
     * @param objete $dataxxxx (getArmarData)
     * @return $objetoxx
     */
    public function getNnajSexoBNSFT($objetoxx, $dataxxxx)
    {
        $objetoxx->prm_sexo_id = $this->getParametrosSimiMultivalor(
            [
                'codigoxx' => $dataxxxx->genero,
                'tablaxxx' => 'GENERO',
                'temaxxxx' => 11,
                'testerxx' => false
            ]
        )->id;
        $objetoxx->prm_identidad_genero_id = $this->getParametrosSimiMultivalor(
            [
                'codigoxx' => $dataxxxx->genero_identifica,
                'tablaxxx' => 'IDENTIDADG',
                'temaxxxx' => 12,
                'testerxx' => false
            ]
        )->id;
        $objetoxx->prm_orientacion_sexual_id = $this->getParametrosSimiMultivalor(
            [
                'codigoxx' => $dataxxxx->sexo_orienta,
                'tablaxxx' => 'ORIENTACIONS',
                'temaxxxx' => 13,
                'testerxx' => false
            ]
        )->id;
        return $objetoxx;
    }
    /**
     * armar data para la tabla nnaj_fi_csd datos comunes entre los datos basicos de fi y csd
     *
     * @param objete $objetoxx
     * @param objete $dataxxxx (getArmarData)
     * @return void
     */
    public function getNnajFiCsdBNSFT($objetoxx, $dataxxxx)
    {
        if ($dataxxxx->rh != null) {
            $factorrh = substr($dataxxxx->rh, -1);
            $grupsang = str_replace($factorrh, "", $dataxxxx->rh);
            $parametr = Parametro::where('nombre', $grupsang)->first();
            if ($parametr == null) {
                $parametr = $this->getValidarParametro($parametr, ['codigoxx' => $grupsang, 'temaxxxx' => 17], true, 0);
            }
            $objetoxx->prm_gsanguino_id = $parametr->id;
            $parametr = Parametro::where('nombre', $factorrh)->first();
            if ($parametr == null) {
                $parametr = $this->getValidarParametro($parametr, ['codigoxx' => $factorrh, 'temaxxxx' => 18], true, 0);
            }
            $objetoxx->prm_factor_rh_id = $parametr->id;
        }
        $objetoxx->prm_estado_civil_id = $this->getParametrosSimiMultivalor(
            [
                'codigoxx' => $dataxxxx->estado_civil,
                'tablaxxx' => 'ESTADOC',
                'temaxxxx' => 19,
                'testerxx' => false
            ]
        )->id;
        $objetoxx->prm_etnia_id = $this->getParametrosSimiMultivalor(
            [
                'codigoxx' => $dataxxxx->etnia,
                'tablaxxx' => 'ETNIA',
                'temaxxxx' => 20,
                'testerxx' => false
            ]
        )->id;
        return $objetoxx;
    }

    /**
     * armar data para la tabla nnaj_docus datos del documento de identidad del nnaj
     *
     * @param objete $objetoxx
     * @param objete $dataxxxx (getArmarData)
     * @return $objetoxx
     */
    public function getNnajDocuBNSFT($objetoxx, $dataxxxx)
    {
        $objetoxx->prm_tipodocu_id = $this->getParametrosSimiMultivalor(
            [
                'codigoxx' => $dataxxxx->tipo_documento,
                'tablaxxx' => 'TIPO_DOCUMENTO',
                'temaxxxx' => 3,
                'testerxx' => false
            ]
        )->id;
        $objetoxx->prm_doc_fisico_id = $this->getParametrosSimiMultivalor(
            [
                'codigoxx' => $dataxxxx->cuenta_doc,
                'tablaxxx' => 'DICOTOMIA',
                'temaxxxx' => 366,
                'testerxx' => false
            ]
        )->id;

        $departam = 1;
        $municipx = 1;
        if ($dataxxxx->id_pais_nacimiento == 48) {
            $municipi = $this->getMunicipoSimi(['idmunici' => $dataxxxx->id_lugar_expedicion]);
            $departam = $municipi->sis_departam_id;
            $municipx =  $municipi->id;
            $paisxxxx=$municipi->sis_departam->sis_pai_id;
        }else{
            $paisxxxx=SisPai::where('simianti_id',$dataxxxx->id_pais_nacimiento)->first()->id;
        }
        $objetoxx->s_documento = $dataxxxx->numero_documento;
       
        $objetoxx->sis_municipioexp_id = $municipx;
        $objetoxx->sis_departamexp_id = $departam;
        $objetoxx->sis_paiexp_id = $paisxxxx;
        return $objetoxx;
    }
    /**
     * armar data para la tabla nnaj_sit_mils datos de la situación militar del nnaj
     *
     * @param objete $objetoxx
     * @param objete $dataxxxx (getArmarData)
     * @return void
     */
    public function getNnajSitMilBNSFT($objetoxx, $dataxxxx)
    {
        if ($dataxxxx->situacion_mil != null) {
            $objetoxx->prm_situacion_militar_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->situacion_mil, 'tablaxxx' => 'DICOTOMIA', 'temaxxxx' => 367, 'testerxx' => true, 'sexoxxxx' => $dataxxxx->genero])->id;
        } else {
            $objetoxx->prm_situacion_militar_id = 235;
        }
        if ($dataxxxx->clase_libreta_militar != null) {
            $objetoxx->prm_clase_libreta_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->clase_libreta_militar, 'tablaxxx' => 'CLASE_LIBRETA', 'temaxxxx' => 33, 'testerxx' => false])->id;
        } else {
            $objetoxx->prm_clase_libreta_id = 235;
        }
        return $objetoxx;
    }
    /**
     * armar data para tabla nnaj_focalis datos del lugar de focalización
     *
     * @param objete $objetoxx
     * @param objete $dataxxxx (getArmarData)
     * @return void
     */
    public function getNnajFocaliBNSFT($objetoxx, $dataxxxx)
    {


        if ($dataxxxx->id_barrio != '') {
            $locabari = $this->getBarrio(['idbarrio' => $dataxxxx->id_barrio]);
            $objetoxx->sis_localidad_id = $locabari->sis_localupz->sis_localidad_id;
            $objetoxx->sis_upz_id = $locabari->sis_localupz->id;
            $objetoxx->sis_upzbarri_id = $locabari->id;
        }

        $objetoxx->s_lugar_focalizacion = 'SIN DATO';
        $objetoxx->s_nombre_focalizacion = 'SIN DATO';
        return $objetoxx;
    }
    /**
     * aramar la data para todo lo que tiene que ver con datos basico de la fi
     *
     * @param array $dataxxxx
     * @return $objetoxx
     */
    public function getBuscarNnajAgregar($dataxxxx)
    {
        $dataxxxx = $this->getArmarData($dataxxxx);
        $objetoxx = null;
        if ($dataxxxx != null) {
            $objetoxx = $this->getFiDatosBasicoBNSFT($dataxxxx);
            $objetoxx = $this->getFiDiligencBNSFT($objetoxx, $dataxxxx);
            $objetoxx = $this->getSisNnajBNSFT($objetoxx, $dataxxxx);
            $objetoxx = $this->gerSisDepenYSisServicioBNSFT($objetoxx, $dataxxxx);
            $objetoxx = $this->getNnajNacimiBNSFT($objetoxx, $dataxxxx);
            $objetoxx = $this->getNnajSexoBNSFT($objetoxx, $dataxxxx); // datos de sexo
            $objetoxx = $this->getNnajFiCsdBNSFT($objetoxx, $dataxxxx); // datos comunes en fi y csd para datos basicos
            $objetoxx = $this->getNnajDocuBNSFT($objetoxx, $dataxxxx);
            $objetoxx = $this->getNnajSitMilBNSFT($objetoxx, $dataxxxx);
            $objetoxx = $this->getNnajFocaliBNSFT($objetoxx, $dataxxxx);
        } else {
        }

        return $objetoxx;
    }
}
