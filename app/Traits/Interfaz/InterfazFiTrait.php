<?php

namespace App\Traits\Interfaz;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\Parametro;
use App\Models\Simianti\Ge\GeNnajDocumento;


/**
 * realiza la comunicación entre las dos bases de datos=>'{$value->s_iso}'que se busca?
 * * que a traves de una api desarrollada en java la interfaz pueda realizar consultas e insertar registros
 * * al crar un nnaj se digite la cédula y se realice una búsqueda en la db del simi antiguo y este existe alla lo traiga y lo inserte en la nueva base de datos
 * * sino existe lo debe crear en las dos db
 */
trait InterfazFiTrait
{
    use HomologacionesTrait;
    public function getArmarData($request)
    {
        $dataxxxx = GeNnajDocumento::select([
                'ge_nnaj.id_nnaj',
                'ficha_acercamiento_ingreso.fecha_apertura',
                'ge_nnaj.tipo_poblacion',
                'ge_upi_nnaj.id_upi',
                'ge_upi_nnaj.modalidad',
                'ge_upi_nnaj.servicio',
                'ge_upi_nnaj.fecha_insercion as insercion_upi',
                'ge_nnaj.primer_nombre',
                'ge_nnaj.segundo_nombre',
                'ge_nnaj.primer_apellido',
                'ge_nnaj.segundo_apellido',
                'ge_nnaj.nombre_identitario',
                'ge_nnaj.apodo',
                'ge_nnaj.fecha_nacimiento',
                'ge_nnaj.id_nacimiento',
                'ge_nnaj.genero',
                'ge_nnaj.genero_identifica',
                'ge_nnaj.sexo_orienta',
                'ge_nnaj.rh',
                'ge_nnaj_documento.tipo_documento',
                'ge_nnaj.cuenta_doc',
                'ge_nnaj_documento.numero_documento',
                'ge_nnaj_documento.id_lugar_expedicion',
                'ge_nnaj_documento.fecha_insercion as insercion_documento',
                'ge_nnaj.situacion_mil',
                'ge_nnaj.clase_libreta_militar',
                'ge_nnaj.estado_civil',
                'ge_nnaj.etnia',
                'ge_nnaj.condicion_vestido',
                'ge_direcciones.id_barrio',
                'ficha_acercamiento_ingreso.fecha_insercion as fai',
            ])->join('ge_nnaj', 'ge_nnaj_documento.id_nnaj', '=', 'ge_nnaj.id_nnaj')
            ->join('ge_upi_nnaj', 'ge_nnaj.id_nnaj', '=', 'ge_upi_nnaj.id_nnaj')
            ->join('ficha_acercamiento_ingreso', 'ge_nnaj.id_nnaj', '=', 'ficha_acercamiento_ingreso.id_nnaj')
            ->join('ge_direcciones', 'ge_nnaj.id_nnaj', '=', 'ge_direcciones.id_nnaj')
            ->where('ge_nnaj_documento.numero_documento', $request->docuagre)
            ->orderBy('ge_nnaj_documento.fecha_insercion', 'DESC')
            ->orderBy('ge_upi_nnaj.fecha_insercion', 'ASC')
            ->orderBy('ficha_acercamiento_ingreso.fecha_insercion', 'ASC')
            ->first();

        // ddd($dataxxxx->toArray());
        return $dataxxxx;
    }
    public function getBuscarNnajAgregar($request)
    {
        // $request->docuagre = 1006148207;
        $dataxxxx = $this->getArmarData($request);

        $objetoxx = new FiDatosBasico;
        $objetoxx->diligenc = explode(' ', $dataxxxx->fecha_apertura)[0];
        $objetoxx->prm_tipoblaci_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->tipo_poblacion, 'tablaxxx' => 'TIPOPOB', 'temaxxxx' => 119, 'testerxx' => false])->id;
// if($objetoxx->prm_tipoblaci_id==){

// }

        $objetoxx->sis_depen_id = $this->getUpiSimi(['idupixxx' => $dataxxxx->id_upi])->id;
        $objetoxx->sis_servicio_id = $this->getServiciosUpi(['codigoxx' => $dataxxxx->modalidad, 'tablaxxx' => 'MODALIDAD_UPI', 'sisdepen' => $objetoxx->sis_depen_id])->id;
        $objetoxx->s_primer_nombre = $dataxxxx->primer_nombre;
        $objetoxx->s_segundo_nombre = $dataxxxx->segundo_nombre;
        $objetoxx->s_primer_apellido = $dataxxxx->primer_apellido;
        $objetoxx->s_segundo_apellido = $dataxxxx->segundo_apellido;
        $objetoxx->s_nombre_identitario = $dataxxxx->nombre_identitario;
        $objetoxx->s_apodo = $dataxxxx->apodo;
        /* datos de nacimiento */
        $objetoxx->nnaj_nacimi = new NnajNacimi;
        $objetoxx->d_nacimiento = $objetoxx->nnaj_nacimi->d_nacimiento = explode(' ', $dataxxxx->fecha_nacimiento)[0];

        $municipi = $this->getMunicipoSimi(['idmunici' => $dataxxxx->id_nacimiento]);
        $objetoxx->sis_municipio_id = $municipi->id;
        $objetoxx->sis_departam_id = $municipi->sis_departam_id;
        $objetoxx->sis_pai_id = $municipi->sis_departam->sis_pai_id;
        $objetoxx->prm_sexo_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->genero, 'tablaxxx' => 'GENERO', 'temaxxxx' => 11, 'testerxx' => false])->id;
        $objetoxx->prm_identidad_genero_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->genero_identifica, 'tablaxxx' => 'IDENTIDADG', 'temaxxxx' => 12, 'testerxx' => false])->id;
        $objetoxx->prm_orientacion_sexual_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->sexo_orienta, 'tablaxxx' => 'ORIENTACIONS', 'temaxxxx' => 13, 'testerxx' => false])->id;
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
// ddd( $objetoxx->prm_factor_rh_id);
        $objetoxx->prm_tipodocu_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->tipo_documento, 'tablaxxx' => 'TIPO_DOCUMENTO', 'temaxxxx' => 3, 'testerxx' => false])->id;

        $objetoxx->prm_doc_fisico_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->cuenta_doc, 'tablaxxx' => 'DICOTOMIA', 'temaxxxx' => 23, 'testerxx' => false])->id;
        $objetoxx->s_documento = $dataxxxx->numero_documento;
        $municipi = $this->getMunicipoSimi(['idmunici' => $dataxxxx->id_lugar_expedicion]);
        $objetoxx->sis_municipioexp_id = $municipi->id;
        $objetoxx->sis_departamexp_id = $municipi->sis_departam_id;
        $objetoxx->sis_paiexp_id = $municipi->sis_departam->sis_pai_id;

        if ($dataxxxx->situacion_mil != null) {
            $objetoxx->prm_situacion_militar_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->situacion_mil, 'tablaxxx' => 'DICOTOMIA', 'temaxxxx' => 23, 'testerxx' => false])->id;
        } else {
            $objetoxx->prm_situacion_militar_id = 235;
        }
        if ($dataxxxx->clase_libreta_militar != null) {
            $objetoxx->prm_clase_libreta_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->clase_libreta_militar, 'tablaxxx' => 'CLASE_LIBRETA', 'temaxxxx' => 33, 'testerxx' => false])->id;
        } else {
            $objetoxx->prm_clase_libreta_id = 235;
        }
        $objetoxx->prm_estado_civil_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->estado_civil, 'tablaxxx' => 'ESTADOC', 'temaxxxx' => 19, 'testerxx' => false])->id;
        $objetoxx->prm_etnia_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->etnia, 'tablaxxx' => 'ETNIA', 'temaxxxx' => 20, 'testerxx' => false])->id;
        $objetoxx->prm_vestimenta_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->condicion_vestido, 'tablaxxx' => 'DICOTOMIAS', 'temaxxxx' => 290, 'testerxx' => false])->id;
        $locabari = $this->getBarrio(['idbarrio' => $dataxxxx->id_barrio]);

        $objetoxx->sis_localidad_id = $locabari->sis_localupz->sis_localidad_id;
        $objetoxx->sis_upz_id = $locabari->sis_localupz->id;
        $objetoxx->sis_upzbarri_id = $locabari->id;


        return $objetoxx;
    }

    public function getArmaRequest($requestx)
    {
        // $request->docuagre = 1006148207;
        $dataxxxx = $this->getArmarData($requestx);
        ddd($dataxxxx->toArray());
        // $objetoxx = new FiDatosBasico;
        $requestx->request->add(['diligenc' => explode(' ', $dataxxxx->fecha_apertura)[0]]);
        $requestx->request->add(['prm_tipoblaci_id' => $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->tipo_poblacion, 'tablaxxx' => 'TIPOPOB', 'temaxxxx' => 119, 'testerxx' => false])->id]);
        $estrateg = 651;
        if ($requestx->prm_tipoblaci_id != 651) {
            $estrateg = 235;
        }
        $requestx->request->add(['prm_estrateg_id' => $estrateg]);

        $requestx->request->add(['sis_depen_id' => $this->getUpiSimi(['idupixxx' => $dataxxxx->id_upi])->id]);
        $requestx->request->add(['sis_servicio_id' => $this->getServiciosUpi(['codigoxx' => $dataxxxx->modalidad, 'tablaxxx' => 'MODALIDAD_UPI', 'sisdepen' => $requestx->sis_depen_id])->id]);
        $requestx->request->add(['s_primer_nombre' => $dataxxxx->primer_nombre]);
        $requestx->request->add(['s_segundo_nombre' => $dataxxxx->segundo_nombre]);
        $requestx->request->add(['s_primer_apellido' => $dataxxxx->primer_apellido]);
        $requestx->request->add(['s_segundo_apellido' => $dataxxxx->segundo_apellido]);
        $requestx->request->add(['s_nombre_identitario' => $dataxxxx->nombre_identitario]);
        $requestx->request->add(['s_apodo' => $dataxxxx->apodo]);
        /* datos de nacimiento */
        $requestx->nnaj_nacimi = new NnajNacimi;
        $requestx->request->add(['d_nacimiento' => $requestx->nnaj_nacimi->d_nacimiento = explode(' ', $dataxxxx->fecha_nacimiento)[0]]);

        $municipi = $this->getMunicipoSimi(['idmunici' => $dataxxxx->id_nacimiento]);
        $requestx->request->add(['sis_municipio_id' => $municipi->id]);
        $requestx->sis_departam_id = $municipi->sis_departam_id;
        $requestx->sis_pai_id = $municipi->sis_departam->sis_pai_id;
        $requestx->request->add(['prm_sexo_id' => $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->genero, 'tablaxxx' => 'GENERO', 'temaxxxx' => 11, 'testerxx' => false])->id]);
        $requestx->request->add(['prm_identidad_genero_id' => $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->genero_identifica, 'tablaxxx' => 'IDENTIDADG', 'temaxxxx' => 12, 'testerxx' => false])->id]);
        $requestx->request->add(['prm_orientacion_sexual_id' => $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->sexo_orienta, 'tablaxxx' => 'ORIENTACIONS', 'temaxxxx' => 13, 'testerxx' => false])->id]);
        if ($dataxxxx->rh != null) {
            $parametr = Parametro::where('nombre', explode('+', $dataxxxx->rh)[0])->first();
            if ($parametr == null) {
                $parametr =  Parametro::find(2503);
                $this->getValidarParametro($parametr, ['codigoxx' => $dataxxxx->rh, 'temaxxxx' => 17], true, 0)->id;
            }
            $requestx->request->add(['prm_gsanguino_id' => $parametr->id]);
            $parametr = Parametro::where(
                'nombre',
                str_replace(str_replace("+", "", $dataxxxx->rh), "", $dataxxxx->rh)
            )->first();
            if ($parametr == null) {
                $parametr =  Parametro::find(2503);
                $this->getValidarParametro($parametr, ['codigoxx' => $dataxxxx->rh, 'temaxxxx' => 18], true, 0)->id;
            }
            $requestx->request->add(['prm_factor_rh_id' => $parametr->id]);
        }

        $requestx->request->add(['prm_tipodocu_id' => $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->tipo_documento, 'tablaxxx' => 'TIPO_DOCUMENTO', 'temaxxxx' => 3, 'testerxx' => false])->id]);

        $requestx->request->add(['prm_doc_fisico_id' => $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->cuenta_doc, 'tablaxxx' => 'DICOTOMIA', 'temaxxxx' => 23, 'testerxx' => false])->id]);
        $requestx->request->add(['s_documento' => $dataxxxx->numero_documento]);
        $municipi = $this->getMunicipoSimi(['idmunici' => $dataxxxx->id_lugar_expedicion]);
        $requestx->request->add(['sis_municipioexp_id' => $municipi->id]);
        $requestx->sis_departamexp_id = $municipi->sis_departam_id;
        $requestx->sis_paiexp_id = $municipi->sis_departam->sis_pai_id;
        $requestx->request->add(['prm_situacion_militar_id' => 235]);
        if ($dataxxxx->situacion_mil != null) {
            $requestx->request->add(['prm_situacion_militar_id' => $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->situacion_mil, 'tablaxxx' => 'DICOTOMIA', 'temaxxxx' => 23, 'testerxx' => false])->id]);
        }
        $requestx->request->add(['prm_clase_libreta_id' => 235]);

        if ($dataxxxx->clase_libreta_militar != null) {
            $requestx->request->add(['prm_clase_libreta_id' => $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->clase_libreta_militar, 'tablaxxx' => 'CLASE_LIBRETA', 'temaxxxx' => 33, 'testerxx' => false])->id]);
        }
        $requestx->request->add(['prm_estado_civil_id' => $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->estado_civil, 'tablaxxx' => 'ESTADOC', 'temaxxxx' => 19, 'testerxx' => false])->id]);
        $requestx->request->add(['prm_etnia_id' => $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->etnia, 'tablaxxx' => 'ETNIA', 'temaxxxx' => 20, 'testerxx' => false])->id]);
        $requestx->request->add(['prm_vestimenta_id' => $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->condicion_vestido, 'tablaxxx' => 'DICOTOMIAS', 'temaxxxx' => 290, 'testerxx' => false])->id]);
        $locabari = $this->getBarrio(['idbarrio' => $dataxxxx->id_barrio]);

        $requestx->request->add(['s_lugar_focalizacion' => '']);
        $requestx->request->add(['s_nombre_focalizacion' => '']);

        $requestx->sis_localidad_id = $locabari->sis_localupz->sis_localidad_id;
        $requestx->sis_upz_id = $locabari->sis_localupz->id;
        $requestx->request->add(['sis_upzbarri_id' => $locabari->id]);


        return $requestx;
    }

    public function getUpisIFT($dataxxxx)
    {

    }
}
