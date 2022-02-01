<?php

namespace App\Traits\Actaencu;

use App\Models\Actaencu\AeAsisNnaj;
use App\Models\Actaencu\AeAsistencia;
use App\Models\Actaencu\AeContacto;
use App\Models\Actaencu\AeEncuentro;
use App\Models\Actaencu\AeRecurso;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\sistema\SisNnaj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ActaencuListadosTrait
{
    public  function getDt($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    /**
                     * validaciones para los permisos
                     */

                    return  view($requestx->botonesx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }
            )
            ->addColumn(
                's_estado',
                function ($queryxxx) use ($requestx) {
                    return  view($requestx->estadoxx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }

            )
            ->rawColumns(['botonexx', 's_estado'])
            ->toJson();
    }

    public  function getDtae($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    /**
                     * validaciones para los permisos
                     */
                    $respuest = $this->getPuedeCargar([
                        'estoyenx' => 2,
                        'upixxxxx' => $queryxxx->sis_depen_id,
                        'fechregi' => $queryxxx->fechdili
                    ]);
                    return  view($requestx->botonesx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                        'tienperm' => $respuest['tienperm'],
                    ]);
                }
            )
            ->addColumn(
                's_estado',
                function ($queryxxx) use ($requestx) {
                    return  view($requestx->estadoxx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }

            )
            ->addColumn(
                'updated_at',
                function ($queryxxx) use ($requestx) {
                    return explode(' ', $queryxxx->updated_at)[0];
                }

            )
            ->addColumn(
                'created_at',
                function ($queryxxx) use ($requestx) {
                    return explode(' ', $queryxxx->created_at)[0];
                }

            )
            ->addColumn(
                'fechdili',
                function ($queryxxx) use ($requestx) {
                    return explode(' ', $queryxxx->fechdili)[0];
                }

            )
            ->rawColumns(['botonexx', 's_estado'])
            ->toJson();
    }

    public  function getAsistenciaNnajDt($queryxxx, $requestx)
    {
        return datatables()->of($queryxxx)->addColumn(
            'botonexx',
            function ($queryxxx) use ($requestx) {
                /**
                 * validaciones para los permisos
                 */

                return  view($requestx->botonesx, [
                    'queryxxx' => $queryxxx,
                    'requestx' => $requestx,
                ]);
            }
        )->addColumn(
            'edadxxxx',
            function ($queryxxx) use ($requestx) {
                return $queryxxx->getEdadAttribute();
            }
        )->addColumn(
            'direccio',
            function ($queryxxx) use ($requestx) {
                return SisNnaj::find($queryxxx->id)->FiResidencia->getDireccionAttribute();
            }
        )->addColumn(
            's_estado',
            function ($queryxxx) use ($requestx) {
                return  view($requestx->estadoxx, [
                    'queryxxx' => $queryxxx,
                    'requestx' => $requestx,
                ]);
            }

        )->setRowClass(function ($queryxxx) use ($requestx) {
            $fiDatosBasicos = FiDatosBasico::where('sis_nnaj_id', $queryxxx->id)->first();
            return $queryxxx->prm_escomfam_id == 2686 ? 'alert-warning' : (!$this->validacionDatosCompletosNnaj($fiDatosBasicos)[0] ? 'alert-danger' : '');
        })
            ->rawColumns(['botonexx', 's_estado'])
            ->toJson();
    }

    public  function getAsistenciaDt($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    /**
                     * validaciones para los permisos
                     */
                    $respuest = $this->getPuedeCargar([
                        'estoyenx' => 2,
                        'upixxxxx' => $queryxxx->sis_depen_id,
                        'fechregi' => $queryxxx->fechdili
                    ]);
                    return  view($requestx->botonesx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                        'tienperm' => $respuest['tienperm'],
                    ]);
                }
            )
            ->addColumn(
                's_estado',
                function ($queryxxx) use ($requestx) {
                    return  view($requestx->estadoxx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }

            )
            ->rawColumns(['botonexx', 's_estado'])
            ->toJson();
    }

    /**
     * encontrar la lisa de actas de encuentro
     */


    public function getListaxxx(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  AeEncuentro::select([
                'ae_encuentros.id',
                'ae_encuentros.fechdili',
                'ae_asistencias.id as planilla',
                'ae_encuentros.sis_depen_id',
                'sis_depens.nombre as dependencia',
                'sis_servicios.s_servicio',
                'sis_localidads.s_localidad',
                'sis_upzs.s_upz',
                'user_contdili.name as user_contdili',
                'user_funcontr.name as user_funcontr',
                'sis_barrios.s_barrio',
                'accion.nombre as accion',
                'actividad.nombre as actividad',
                'ae_encuentros.sis_esta_id',
                'ae_encuentros.user_crea_id',
                'ae_encuentros.updated_at',
                'ae_encuentros.created_at',
                'registra.name as registra',
                'edita.name as edita',
                'sis_estas.s_estado'
            ])
                ->leftjoin('ae_asistencias', 'ae_encuentros.id', '=', 'ae_asistencias.ae_encuentro_id')
                ->join('sis_depens', 'ae_encuentros.sis_depen_id', '=', 'sis_depens.id')
                ->join('sis_servicios', 'ae_encuentros.sis_servicio_id', '=', 'sis_servicios.id')
                ->join('sis_localidads', 'ae_encuentros.sis_localidad_id', '=', 'sis_localidads.id')
                ->join('sis_upzs', 'ae_encuentros.sis_upz_id', '=', 'sis_upzs.id')
                ->join('users as user_contdili', 'ae_encuentros.user_contdili_id', '=', 'user_contdili.id')
                ->join('users as registra', 'ae_encuentros.user_crea_id', '=', 'registra.id')
                ->join('users as edita', 'ae_encuentros.user_edita_id', '=', 'edita.id')
                ->leftJoin('users as user_funcontr', 'ae_encuentros.user_funcontr_id', '=', 'user_funcontr.id')

                ->join('sis_barrios', 'ae_encuentros.sis_barrio_id', '=', 'sis_barrios.id')
                ->join('parametros as accion', 'ae_encuentros.prm_accion_id', '=', 'accion.id')
                ->join('parametros as actividad', 'ae_encuentros.prm_actividad_id', '=', 'actividad.id')
                ->join('sis_estas', 'ae_encuentros.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDtae($dataxxxx, $request);
        }
    }

    public function getListaContactos($padrexxx, Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.' . $request->botonapi;
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  AeContacto::select([
                'ae_contactos.id',
                'ae_contactos.nombres_apellidos',
                'sis_entidads.nombre',
                'ae_contactos.cargo',
                'ae_contactos.phone',
                'ae_contactos.email',
                'ae_contactos.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'ae_contactos.sis_esta_id', '=', 'sis_estas.id')
                ->join('sis_entidads', 'ae_contactos.sis_entidad_id', '=', 'sis_entidads.id')
                ->where('ae_contactos.ae_encuentro_id', $padrexxx);
            return $this->getDt($dataxxxx, $request);
        }
    }

    /**
     * List de personas que no han sido creados como nnaj y que no han sido agregados a la asistencia
     *
     * @param int $padrexxx
     * @param Request $request
     * @return void
     */
    public function getListaNnajsAsignaar($padrexxx, Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesnnajasigapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $nnajregi = AeAsisNnaj::where('ae_asistencia_id', $padrexxx)->pluck('sis_nnaj_id')->toArray();
            $dataxxxx =  FiDatosBasico::select([
                'fi_datos_basicos.sis_nnaj_id as id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'sis_nnajs.prm_escomfam_id',
                'nnaj_sexos.s_nombre_identitario',
                'tipo_docu.nombre as tipo_docu',
                'nnaj_docus.s_documento',
                'nnaj_nacimis.d_nacimiento',
                'sexo.nombre as sexo',
                'sis_localidads.s_localidad',
                'sis_upzs.s_upz',
                'sis_barrios.s_barrio',
                'fi_residencias.s_telefono_uno',
                'tipo_pobla.nombre as tipo_pobla',
                'perfil.nombre as perfil',
                'lug_foca.nombre as lug_foca',
                'autorizo.nombre as autorizo',
                'fi_datos_basicos.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('sis_nnajs', 'fi_datos_basicos.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->join('fi_residencias', 'sis_nnajs.id', '=', 'fi_residencias.sis_nnaj_id')
                ->join('sis_upzbarris', 'fi_residencias.sis_upzbarri_id', '=', 'sis_upzbarris.id')
                ->join('sis_barrios', 'sis_upzbarris.sis_barrio_id', '=', 'sis_barrios.id')
                ->join('sis_localupzs', 'sis_upzbarris.sis_localupz_id', '=', 'sis_localupzs.id')
                ->join('sis_localidads', 'sis_localupzs.sis_localidad_id', '=', 'sis_localidads.id')
                ->join('sis_upzs', 'sis_localupzs.sis_upz_id', '=', 'sis_upzs.id')
                ->join('parametros as tipo_docu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipo_docu.id')
                ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                ->join('parametros as sexo', 'nnaj_sexos.prm_sexo_id', '=', 'sexo.id')
                ->join('parametros as tipo_pobla', 'fi_datos_basicos.prm_tipoblaci_id', '=', 'tipo_pobla.id')
                ->leftjoin('nnaj_asiss', 'fi_datos_basicos.id', '=', 'nnaj_asiss.fi_datos_basico_id')
                ->leftjoin('parametros as perfil', 'nnaj_asiss.prm_pefil_id', '=', 'perfil.id')
                ->leftjoin('parametros as lug_foca', 'nnaj_asiss.prm_lugar_focali_id', '=', 'lug_foca.id')
                ->leftjoin('parametros as autorizo', 'nnaj_asiss.prm_autorizo_id', '=', 'autorizo.id')
                ->whereIn('sis_nnajs.prm_escomfam_id', [227, 2686])
                ->whereNotIn('sis_nnajs.id', $nnajregi);
            return $this->getAsistenciaNnajDt($dataxxxx, $request);
        }
    }

    /**
     * perosonas que ya fueron agregados a a la asistencia
     *
     * @param int $padrexxx
     * @param Request $request
     * @return void
     */
    public function getListaNnajsSelected($padrexxx, Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesnnajelimapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  FiDatosBasico::select([
                'fi_datos_basicos.sis_nnaj_id as id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'sis_nnajs.prm_escomfam_id',
                'nnaj_sexos.s_nombre_identitario',
                'tipo_docu.nombre as tipo_docu',
                'nnaj_docus.s_documento',
                'nnaj_nacimis.d_nacimiento',
                'sexo.nombre as sexo',
                'sis_localidads.s_localidad',
                'sis_upzs.s_upz',
                'sis_barrios.s_barrio',
                'fi_residencias.s_telefono_uno',
                'tipo_pobla.nombre as tipo_pobla',
                'perfil.nombre as perfil',
                'lug_foca.nombre as lug_foca',
                'autorizo.nombre as autorizo',
                'fi_datos_basicos.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
                ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
                ->join('sis_nnajs', 'fi_datos_basicos.sis_nnaj_id', '=', 'sis_nnajs.id')
                ->join('fi_residencias', 'sis_nnajs.id', '=', 'fi_residencias.sis_nnaj_id')
                ->join('sis_upzbarris', 'fi_residencias.sis_upzbarri_id', '=', 'sis_upzbarris.id')
                ->join('sis_barrios', 'sis_upzbarris.sis_barrio_id', '=', 'sis_barrios.id')
                ->join('sis_localupzs', 'sis_upzbarris.sis_localupz_id', '=', 'sis_localupzs.id')
                ->join('sis_localidads', 'sis_localupzs.sis_localidad_id', '=', 'sis_localidads.id')
                ->join('sis_upzs', 'sis_localupzs.sis_upz_id', '=', 'sis_upzs.id')
                ->join('parametros as tipo_docu', 'nnaj_docus.prm_tipodocu_id', '=', 'tipo_docu.id')
                ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                ->join('parametros as sexo', 'nnaj_sexos.prm_sexo_id', '=', 'sexo.id')
                ->join('parametros as tipo_pobla', 'fi_datos_basicos.prm_tipoblaci_id', '=', 'tipo_pobla.id')
                ->join('ae_asistencia_sis_nnaj', 'sis_nnajs.id', '=', 'ae_asistencia_sis_nnaj.sis_nnaj_id')
                ->leftjoin('nnaj_asiss', 'fi_datos_basicos.id', '=', 'nnaj_asiss.fi_datos_basico_id')
                ->leftjoin('parametros as perfil', 'nnaj_asiss.prm_pefil_id', '=', 'perfil.id')
                ->leftjoin('parametros as lug_foca', 'nnaj_asiss.prm_lugar_focali_id', '=', 'lug_foca.id')
                ->leftjoin('parametros as autorizo', 'nnaj_asiss.prm_autorizo_id', '=', 'autorizo.id')
                ->whereIn('sis_nnajs.prm_escomfam_id', [227, 2686])
                ->where('ae_asistencia_sis_nnaj.ae_asistencia_id', $padrexxx);
            return $this->getAsistenciaNnajDt($dataxxxx, $request);
        }
    }

    /**
     * Listado de asistenacias 
     *
     * @param int $padrexxx
     * @param Request $request
     * @return void
     */
    public function getListaAsistencias($padrexxx, Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx = AeAsistencia::select([
                'ae_asistencias.id',
                'ae_encuentros.sis_depen_id',
                'ae_encuentros.fechdili',
                'ae_encuentros.user_crea_id',
                'funcionario.name as funcname',
                'responsable.name as respname',
                'ae_asistencias.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'ae_asistencias.sis_esta_id', '=', 'sis_estas.id')
                ->join('users as funcionario', 'ae_asistencias.user_funcontr_id', '=', 'funcionario.id')
                ->join('users as responsable', 'ae_asistencias.respoupi_id', '=', 'responsable.id')
                ->join('ae_encuentros', 'ae_asistencias.ae_encuentro_id', '=', 'ae_encuentros.id')
                ->where('ae_asistencias.ae_encuentro_id', $padrexxx);
            return $this->getAsistenciaDt($dataxxxx, $request);
        }
    }

    /**
     * Recursos del acta de encuentro
     *
     * @param int $padrexxx
     * @param Request $request
     * @return void
     */
    public function getListaRecursos($padrexxx, Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.' . $request->botonapi;
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  AeRecurso::select([
                'ae_recursos.id',
                'ae_recuadmis.s_recurso',
                'ae_recursos.cantidad',
                'trecurso.nombre as trecurso',
                'umedida.nombre as umedida',
                'ae_recursos.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'ae_recursos.sis_esta_id', '=', 'sis_estas.id')
                ->join('ae_recuadmis', 'ae_recursos.ae_recuadmi_id', '=', 'ae_recuadmis.id')
                ->join('parametros as trecurso', 'ae_recuadmis.prm_trecurso_id', '=', 'trecurso.id')
                ->join('parametros as umedida', 'ae_recuadmis.prm_umedida_id', '=', 'umedida.id')
                ->where('ae_recursos.ae_encuentro_id', $padrexxx);
            return $this->getDt($dataxxxx, $request);
        }
    }

    /**
     * Realizar validaciones para saber si al NNAJ le falta algo de la FI
     *
     * @param FiDatosBasico $fiDatosBasicos
     * @return void
     */
    public function validacionDatosCompletosNnaj(FiDatosBasico $fiDatosBasicos)
    {
        $errores = 0;
        $mensaje = '';
        // * Consumo de Spa
        if (is_null($fiDatosBasicos->sis_nnaj->fi_consumo_spas)) {
            $errores++;
            $mensaje .= 'consumo de spas, ';
        }

        // * Vestuario
        if ($fiDatosBasicos->prm_estrateg_id != 2323 && is_null($fiDatosBasicos->sis_nnaj->fi_vestuario_nnaj)) {
            $errores++;
            $mensaje .= 'vestuario, ';
        }

        // * Formación
        if (is_null($fiDatosBasicos->sis_nnaj->fi_formacions)) {
            $errores++;
            $mensaje .= 'formación, ';
        }

        // * Generación de ingresos
        if (is_null($fiDatosBasicos->sis_nnaj->fi_generacion_ingresos)) {
            $errores++;
            $mensaje .= 'generación de ingresos, ';
        }

        // * Justocia restaurativa
        if ($fiDatosBasicos->prm_tipoblaci_id != 650 && is_null($fiDatosBasicos->sis_nnaj->fi_justrests)) {
            $errores++;
            $mensaje .= 'justicia restaurativa, ';
        }

        // * Actividades de tiempo libre
        if (is_null($fiDatosBasicos->sis_nnaj->fi_actividadestls)) {
            $errores++;
            $mensaje .= 'actividades en el tiempo libre, ';
        }

        // * Redes de apoyo
        if (is_null($fiDatosBasicos->sis_nnaj->fi_red_apoyo_actuals)) {
            $errores++;
            $mensaje .= 'redes de apoyo, ';
        }

        // * Salud
        if (is_null($fiDatosBasicos->sis_nnaj->fi_saluds)) {
            $errores++;
            $mensaje .= 'salud, ';
        }

        // * Situación especial
        if (is_null($fiDatosBasicos->sis_nnaj->fi_situacion_especials)) {
            $errores++;
            $mensaje .= 'situacion especial, ';
        }

        // * Violencia y condiciones especiales
        if (is_null($fiDatosBasicos->sis_nnaj->fi_violencias)) {
            $errores++;
            $mensaje .= 'violencia, ';
        }

        // * Bienvenida
        if (is_null($fiDatosBasicos->sis_nnaj->FiBienvenida)) {
            $errores++;
            $mensaje .= 'bienvenida, ';
        }

        // * Observaciones
        if (is_null($fiDatosBasicos->sis_nnaj->fi_observacion)) {
            $errores++;
            $mensaje .= 'observaciones, ';
        }

        // * Autorización
        if (is_null($fiDatosBasicos->sis_nnaj->fi_autorizacion)) {
            $errores++;
            $mensaje .= 'autorización, ';
        }

        // * Razones
        if (is_null($fiDatosBasicos->sis_nnaj->fi_razone)) {
            $errores++;
            $mensaje .= 'razones, ';
        }

        // * Situación militar
        if (is_null($fiDatosBasicos->nnaj_sit_mil)) {
            $errores++;
            $mensaje .= 'situación militar, ';
        }

        // * Datos comunes entre la ficha de ingreso y la consulta social en domicilio
        if (is_null($fiDatosBasicos->nnaj_fi_csd)) {
            $errores++;
            $mensaje .= 'csd, ';
        }

        // * Lugar de focalización
        if (is_null($fiDatosBasicos->nnaj_focali)) {
            $errores++;
            $mensaje .= 'focalización, ';
        }

        // * Dependencias
        if (is_null($fiDatosBasicos->sis_nnaj->nnaj_depes)) {
            $errores++;
            $mensaje .= 'dependencia, ';
        }

        // * Fecha de diligenciamiento
        if (is_null($fiDatosBasicos->fi_diligenc)) {
            $errores++;
            $mensaje .= 'diligencia, ';
        }

        if ($errores) {
            return [false, $mensaje];
        }
        return [true, $mensaje];
    }
}
