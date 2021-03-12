<?php

namespace App\Traits\Interfaz;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\fichaIngreso\NnajUpi;
use App\Models\Parametro;
use App\Models\Simianti\Ge\GeNnaj;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\User;
use App\Traits\Interfaz\HomologacionesSimiAtiguoTrait as HSAT;

/**
 * realiza la comunicación entre las dos bases de datos=>'{$value->s_iso}'que se busca?
 * * que a traves de una api desarrollada en java la interfaz pueda realizar consultas e insertar registros
 * * al crar un nnaj se digite la cédula y se realice una búsqueda en la db del simi antiguo y este existe alla lo traiga y lo inserte en la nueva base de datos
 * * sino existe lo debe crear en las dos db
 */
trait InterfazFiTrait
{
    use HSAT;
    use HomologacionesTrait;
    public function getArmarData($request)
    {
        $dataxxxx = GeNnajDocumento::select([
            'ge_nnaj.id_nnaj',
            'ficha_acercamiento_ingreso.fecha_apertura',
            'ge_nnaj.tipo_poblacion',
            'ge_upi_nnaj.id_upi',
            'ge_upi_nnaj.modalidad',
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
        ])
            ->join('ge_nnaj', 'ge_nnaj_documento.id_nnaj', '=', 'ge_nnaj.id_nnaj')
            ->join('ge_upi_nnaj', 'ge_nnaj.id_nnaj', '=', 'ge_upi_nnaj.id_nnaj')
            ->join('ficha_acercamiento_ingreso', 'ge_nnaj.id_nnaj', '=', 'ficha_acercamiento_ingreso.id_nnaj')
            ->join('ge_direcciones', 'ge_nnaj.id_nnaj', '=', 'ge_direcciones.id_nnaj')
            ->where('ge_nnaj_documento.numero_documento', $request->docuagre)
            ->where('ge_upi_nnaj.estado', 'A')
            ->orderBy('ge_nnaj_documento.fecha_insercion', 'DESC')
            ->orderBy('ge_upi_nnaj.fecha_insercion', 'ASC')
            ->orderBy('ficha_acercamiento_ingreso.fecha_insercion', 'ASC')
            //->where('ficha_acercamiento_ingreso.estado', 'A')
            ->first();



        $this->getUpisModalidadHT(['idnnajxx' => $dataxxxx->id_nnaj]);
        return $dataxxxx;
    }
    public function getBuscarNnajAgregar($request)
    {
        // ya lo llamo
        $dataxxxx = $this->getArmarData($request);
        $objetoxx = new FiDatosBasico;
        $objetoxx->diligenc = explode(' ', $dataxxxx->fecha_apertura)[0];
        $objetoxx->prm_tipoblaci_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->tipo_poblacion, 'tablaxxx' => 'TIPOPOB', 'temaxxxx' => 119, 'testerxx' => false])->id;
        $objetoxx->sis_depen_id = $this->getUpiSimi(['idupixxx' => $dataxxxx->id_upi])->id;

        if ($dataxxxx->modalidad != null) {
            $objetoxx->sis_servicio_id = $this->getServiciosUpi(['codigoxx' => $dataxxxx->modalidad,  'sisdepen' => $objetoxx->sis_depen_id, 'datobasi' => true])->id;
        }

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
        $objetoxx->prm_tipodocu_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->tipo_documento, 'tablaxxx' => 'TIPO_DOCUMENTO', 'temaxxxx' => 3, 'testerxx' => false])->id;
        $objetoxx->prm_doc_fisico_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->cuenta_doc, 'tablaxxx' => 'DICOTOMIA', 'temaxxxx' => 23, 'testerxx' => false])->id;
        $objetoxx->s_documento = $dataxxxx->numero_documento;
        $municipi = $this->getMunicipoSimi(['idmunici' => $dataxxxx->id_lugar_expedicion]);
        $objetoxx->sis_municipioexp_id = $municipi->id;
        $objetoxx->sis_departamexp_id = $municipi->sis_departam_id;
        $objetoxx->sis_paiexp_id = $municipi->sis_departam->sis_pai_id;
        if ($dataxxxx->situacion_mil != null) {
            $objetoxx->prm_situacion_militar_id = $this->getParametrosSimiMultivalor(['codigoxx' => $dataxxxx->situacion_mil, 'tablaxxx' => 'DICOTOMIA', 'temaxxxx' => 23, 'testerxx' => false, 'sexoxxxx' => $dataxxxx->genero])->id;
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


    public function getUpisNnajIFT($dataxxxx)
    {
        $upissimi = GeNnajDocumento::join('ge_upi_nnaj', 'ge_nnaj_documento.id_nnaj', '=', 'ge_upi_nnaj.id_nnaj')
            ->where('ge_nnaj_documento.numero_documento', $dataxxxx['objetoxx']->nnaj_docu->s_documento)
            ->where('ge_upi_nnaj.estado', 'A')
            ->where('ge_upi_nnaj.modalidad', '!=', null)
            ->get();
        foreach ($upissimi as $key => $value) {
            $dataxxxx['idupixxx'] =  $value->id_upi;
            $upinnajx = $this->getUpiSimi($dataxxxx);
            $upinnajy = NnajUpi::where('sis_nnaj_id', $dataxxxx['objetoxx']->sis_nnaj_id)->where('sis_depen_id', $upinnajx->id)->first();
            $dataxxxx['idupixxx'] =  $upinnajx->id;
            if (!isset($upinnajy->id)) {
                $this->getAsignarUpiNnaj($dataxxxx);
            }
            $dataxxxx['codigoxx'] =  $value->modalidad;
            $this->getAsignarServiciosNnaj($dataxxxx);
        }
    }
    public function getDataGeNnaj($dataxxxx)
    {
        $padrexxx = $dataxxxx['padrexxx'];
        $padrexxx->prm_tipoblaci_id = 651;
        $maximoxx = GeNnaj::select(['id_nnaj'])->orderBy('id_nnaj', 'DESC')->first()->id_nnaj + 1;
        $nnajfics = $padrexxx->nnaj_fi_csd;
        $sexoxxxx = $padrexxx->nnaj_sexo;
        // ddd($padrexxx->toArray());
        // ddd(Parametro::find($nnajfics->prm_gsanguino_id)->nombre);
        $datannaj = [

            'id_nnaj' => $maximoxx,
            'primer_apellido' => $padrexxx->s_primer_apellido,
            'segundo_apellido' => $padrexxx->s_segundo_apellido,
            'primer_nombre' => $padrexxx->s_primer_nombre,
            'segundo_nombre' => $padrexxx->s_segundo_nombre,
            'fecha_nacimiento' => $padrexxx->nnaj_nacimi->d_nacimiento,
            'id_nacimiento' => $padrexxx->nnaj_nacimi->sis_municipio->simianti_id,
            'apodo' => $padrexxx->s_apodo,
            'fecha_insercion' => date('Y-m-d'),
            'usuario_insercion' => User::find($padrexxx->user_crea_id)->s_documento,
            'fecha_modificacion' => date('Y-m-d'),
            'usuario_modificacion' => User::find($padrexxx->user_crea_id)->s_documento,
            'rh' => Parametro::find($nnajfics->prm_gsanguino_id)->nombre . Parametro::find($nnajfics->prm_factor_rh_id)->nombre,
            'genero' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $sexoxxxx->prm_sexo_id,
                'tablaxxx' => 'GENERO',
                'temaxxxx' => 11,
                'tipoxxxx' => 'multival',
            ]),

            'tipo_documento' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $padrexxx->nnaj_docu->prm_tipodocu_id,
                'tablaxxx' => 'TIPO_DOCUMENTO',
                'temaxxxx' => 3,
                'tipoxxxx' => 'multival',
            ]),
            'numero_documento' => $padrexxx->nnaj_docu->s_documento,

            // 'id_lugar_expedicion'=>$padrexxx->,
            'clase_libreta_militar' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $padrexxx->nnaj_sit_mil->prm_clase_libreta_id,
                'tablaxxx' => 'CLASE_LIBRETA',
                'temaxxxx' => 33,
                'tipoxxxx' => 'multival',
            ]),
            'estado' => 'A',
            // 'numero_libreta_militar'=>$padrexxx->,
            // 'ultimo_grado_aprobado'=>$padrexxx->,
            // 'fecha_nacimiento_estimada'=>$padrexxx->,
            'etnia' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $padrexxx->nnaj_fi_csd->prm_etnia_id,
                'tablaxxx' => 'ETNIA',
                'temaxxxx' => 20,
                'tipoxxxx' => 'multival',
            ]),
            // 'email'=>$padrexxx->,
            'nombre_identitario' => $padrexxx->nnaj_sexo->s_nombre_identitario,
            'estado_civil' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $padrexxx->nnaj_fi_csd->prm_estado_civil_id,
                'tablaxxx' => 'ESTADOC',
                'temaxxxx' => 19,
                'tipoxxxx' => 'multival',
            ]),
            'genero_identifica' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $sexoxxxx->prm_identidad_genero_id,
                'tablaxxx' => 'IDENTIDADG',
                'temaxxxx' => 12,
                'tipoxxxx' => 'multival',
            ]),
            'sexo_orienta' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $sexoxxxx->prm_orientacion_sexual_id,
                'tablaxxx' => 'ORIENTACIONS',
                'temaxxxx' => 13,
                'tipoxxxx' => 'multival',
            ]),

            'condicion_vestido' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $padrexxx->prm_vestimenta_id,
                'tablaxxx' => 'DICOTOMIAS',
                'temaxxxx' => 290,
                'tipoxxxx' => 'multival',
            ]),
            // 'autocuidado'=>$padrexxx->,
            // 'sin_id_porque'=>$padrexxx->,
            'cuenta_doc' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $padrexxx->nnaj_docu->prm_doc_fisico_id,
                'tablaxxx' => 'DICOTOMIA',
                'temaxxxx' => 23,
                'tipoxxxx' => 'multival',
            ]),
            // 'situacion_mil'=>$padrexxx->,
            'tipo_poblacion' => $this->setParametrosHSAT([
                'nnajxxxx' => $padrexxx,
                'testerxx' => false,
                'idparame' => $padrexxx->prm_tipoblaci_id,
                'tablaxxx' => 'TIPOPOB',
                'temaxxxx' => 119,
                'tipoxxxx' => 'multival',
            ]),
            // 'id_pais_nacimiento'=>$padrexxx->,
            // 'sis_usuario'=>$padrexxx->,
        ];

        // ddd($datannaj);
        return $datannaj;
    }
    public function setDocumentoPNT($padrexxx)
    {
        $fillable = [
            'id_nnaj'=>$padrexxx->id_nnaj,
            'tipo_documento'=>$padrexxx->tipo_documento,
            'numero_documento'=>$padrexxx->numero_documento,
            'id_lugar_expedicion'=>$padrexxx->numero_documento,
            'fecha_insercion'=>$padrexxx->fecha_insercion,
            'usuario_insercion'=>$padrexxx->usuario_insercion,
            'fecha_modificacion'=>$padrexxx->fecha_modificacion,
            'usuario_modificacion'=>$padrexxx->usuario_modificacion,
            'estado'=>$padrexxx->estado,
        ];
    }
    public function setNnajPNT($dataxxxx)
    {
        $padrexxx = $dataxxxx['padrexxx'];
        $padrexxx->nnaj_docu->s_documento = 2933411;


        $nnajxxxx = GeNnaj::join('ge_nnaj_documento', 'ge_nnaj.id_nnaj', '=', 'ge_nnaj_documento.id_nnaj')
            ->where('ge_nnaj_documento.numero_documento', $padrexxx->nnaj_docu->s_documento)->first();
        if ($nnajxxxx == null) {
            $datannaj = $this->getDataGeNnaj($dataxxxx);

            // ddd($padrexxx);
            $iiiddi = GeNnaj::create($datannaj);
            // GeNnajDocumento::create()
            // ddd($iiiddi);
        }
    }
}
