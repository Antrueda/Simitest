<?php

namespace App\Traits\Interfaz;

use App\Models\Simianti\Ge\FichaAcercamientoIngreso;
use App\Models\Simianti\Ge\GeNnaj;
use App\Models\Simianti\Ge\GeNnajDocumento;
use App\Models\Simianti\Ge\GeUpiNnaj;
use Illuminate\Support\Facades\Auth;
use App\Traits\Interfaz\HomologacionesSimiAtiguoTrait as HSAT;
use App\Traits\Interfaz\Nuevsimi\ActualizarNnajFiTrait;
use Illuminate\Support\Facades\DB;

/**
 * realizar la creación de nnaj
 *
 */
trait InterfazFiTrait
{
    use HSAT;
    use HomologacionesTrait;
    use CrearNnajSimiantiFiTrait;
    use BuscarNnajSimiantiFiTrait;
    use ActualizarNnajFiTrait;
    /**
     * consultar documento de identidad,
     * * en caso de que no exista lo crea
     *
     * @param array $dataxxxx
     * @return $document
     */
    public function setGeNnajDocumentoIFT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $respuest = [
                'id_nnaj' => $dataxxxx['nnajxxxx']->id_nnaj,
                'tipo_documento' => $dataxxxx['nnajxxxx']->tipo_documento,
                'numero_documento' => $dataxxxx['padrexxx']->nnaj_docu->s_documento,
                'notaria' => '',
                'registraduria' => '',
                'id_lugar_expedicion' => $dataxxxx['padrexxx']->nnaj_docu->sis_municipio->simianti_id,
                'fecha_insercion' => date('Y-m-d'),
                'usuario_insercion' => Auth::user()->s_documento,
                'fecha_modificacion' => date('Y-m-d'),
                'usuario_modificacion' => Auth::user()->s_documento,
                'estado' => 'A',
            ];
            $document = GeNnajDocumento::where('numero_documento', $dataxxxx['padrexxx']->nnaj_docu->s_documento)->first();
            if ($document == null) {
                $document = GeNnajDocumento::create($respuest);
            }
            return $document;
        }, 5);
        return $objetoxx;
    }

    /**
     * consulta la relacion del nnaj con el documento de identidad
     *
     * @param array $dataxxxx
     * @return $nnajxxxx
     */
    public function getGeNnajIFT($dataxxxx)
    {
        $nnajxxxx = GeNnaj::join('ge_nnaj_documento', 'ge_nnaj.id_nnaj', '=', 'ge_nnaj_documento.id_nnaj')
            ->where('ge_nnaj_documento.numero_documento', $dataxxxx['padrexxx']->nnaj_docu->s_documento)->first();
        return $nnajxxxx;
    }

    /**
     * consultar y crar nnaj
     *
     * @param array $dataxxxx
     * @return $nnajxxxx
     */
    public function setGeNnajIFT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $nnajxxxx = GeNnaj::where('numero_documento', $dataxxxx['padrexxx']->nnaj_docu->s_documento)->first();
            if ($nnajxxxx == null) {

                $datannaj = $this->getDataGeNnajCNSFT($dataxxxx);
                $nnajxxxx = GeNnaj::create($datannaj);
                $nnajactu = $dataxxxx['padrexxx']->sis_nnaj;
                $nnajactu->update(['simianti_id' => $nnajxxxx->id_nnaj, 'user_edita_id' => Auth::user()->id]);
            }
            return  $nnajxxxx;
        }, 5);
        return $objetoxx;
    }

    /**
     * asignarle la upi al nnaj en el antiguo simi
     *
     * @param array $dataxxxx
     * @return void
     */
    public function setGeUpiNnajIFT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $upinnajx = GeUpiNnaj::where('id_nnaj', $dataxxxx['nnajxxxx']->id_nnaj)
                ->where('id_upi', $dataxxxx['dependen']->sis_depen->simianti_id)
                ->where('modalidad', $dataxxxx['servicio']->simianti_id)
                ->first();
            if ($upinnajx == null) {
                $maximoxx = GeUpiNnaj::select(['id_upi_nnaj'])->orderBy('id_upi_nnaj', 'DESC')->first()->id_upi_nnaj;
                $fillable = [
                    'id_upi_nnaj' => $maximoxx + 1,
                    'id_upi' => $dataxxxx['dependen']->sis_depen->simianti_id,
                    'modalidad' => $dataxxxx['servicio']->simianti_id,
                    'id_nnaj' => $dataxxxx['nnajxxxx']->id_nnaj,
                    'fecha_insercion' => $dataxxxx['nnajxxxx']->fecha_insercion,
                    'usuario_insercion' => $dataxxxx['nnajxxxx']->usuario_insercion,
                    'fecha_modificacion' => $dataxxxx['nnajxxxx']->fecha_modificacion,
                    'usuario_modificacion' => $dataxxxx['nnajxxxx']->usuario_modificacion,
                    'estado' => 'A',
                ];
                GeUpiNnaj::create($fillable);
            }
        }, 5);
        return $objetoxx;
    }
    public function getFichaAcercamientoIngresoDataIFT($dataxxxx)
    {
        $fiacingr = FichaAcercamientoIngreso::select(['id'])->orderBy('id', 'DESC')->first();
        $dataxxxx = [
            'id' => $fiacingr->id + 1,
<<<<<<< HEAD
            // 'fecha_apertura',
            // 'telefonos',
            // 'estado_civil',
            // 'numero_hijos',
            // 'ultimo_grado_aprobado',
            // 'certificado_escolar',
            // 'institucion_educativa',
            // 'edad_inicio_estudios',
            // 'direccion_residencia',
            // 'estrato_residencia',
            // 'id_barrio',
            // 'tipo_vivienda',
            // 'tenencia',
            // 'situacion',
            'id_nnaj' => $dataxxxx['nnajxxxx']->id_nnaj,
            // 'id_facilitador_social',
            // 'id_trabajador_social_upi',
            // 'id_responsable_busqueda_activa',
            // 'fecha_insercion',
            // 'usuario_insercion',
            // 'fecha_modificacion',
            // 'usuario_modificacion',
            // 'estado_embarazo',
            // 'numero_semana',
            // 'vive_familia',
            // 'con_quien_vive',
            // 'esp_hab',
            // 'contributivo',
            // 'subsidiado',
            // 'nivel_sisben',
            // 'entidad',
            // 'carta_especial',
            // 'cual',
            // 'consume_sustancia',
            // 'frecuencia_consumo',
            // 'intensidad_consumo',
            // 'tiene_discapacidad',
            // 'ind_disc',
            // 'asiste_estudiar',
            // 'nom_institucion',
            // 'tmp_sin_est',
            // 'jornada_estudio',
            // 'nivel_academico',
            // 'permanenecia_calle',
            // 'duerme_calle',
            // 'tiempo_calle',
            // 'actividad_calle',
            // 'actividad_grupo',
            // 'nombre_grupo',
            // 'tipo_habitante',
            // 'reingreso',
            // 'tiene_residencia',
            // 'zona',
            // 'cc_acudiente',
            // 'nombre_acudiente',
            // 'diligenciado',
            // 'estado',
            // 'parentesco_acudiente',
            // 'edad_inicio_consumo',
            // 'genero_identifica',
            // 'orientacion_sexual',
            // 'leerescribir',
            // 'consume_medicamentos',
            // 'cual_medicamento',
            // 'estado_lactancia',
            // 'semana_lactancia',
            // 'sabe_leer',
            // 'sabe_escribir',
            // 'sabe_operaciones_basicas',
            // 'no_sisben',
            // 'certificado_discapacidad',
            // 'problema_salud',
            // 'cual_problema_salud',
            // 'conoce_anticonceptivos',
            // 'usa_anticonceptivos',
            // 'usa_voluntarmiamente_anti',
            // 'eventos_medicos',
            // 'cuantas_comidas',
            // 'id_razon_no_comer',
            // 'actividad_ingresos',
            // 'que_trabajo',
            // 'id_tipo_informal',
            // 'id_tipo_otros',
            // 'jornada_ingresos',
            // 'hora_turno_inicio',
            // 'hora_turno_fin',
            // 'id_tipo_frecuencia_ing',
            // 'cantidad_ingreso',
            // 'id_tipo_relacion_lab',
            // 'id_razon_ingresos',
            // 'tiempo_busca_trabajo',
            // 'id_acceso_recreacion',
            // 'id_religioso',
            // 'id_religion',
            // 'id_estado_pard',
            // 'id_activo_pard',
            // 'tiempo_pard',
            // 'id_motivo_pard',
            // 'nombre_defensor',
            // 'telefonos_defensor',
            // 'lugar_pard',
            // 'id_estado_srpa',
            // 'id_activo_srpa',
            // 'id_motivo_srpa',
            // 'id_estado_spoa',
            // 'id_activo_spoa',
            // 'hace_cuanto_spoa',
            // 'id_motivo_spoa',
            // 'id_sancion_spoa',
            // 'id_privado_libertad',
            // 'id_vinculado_violencia',
            // 'id_causa_violencia',
            // 'id_riesgo_ac_del',
            // 'talla_pantalon',
            // 'talla_camisa',
            // 'talla_zapatos',
            // 'id_municipio_reinc',
            // 'id_tipo_contacto',
            // 'id_tipo_opcion',
            // 'id_tipo_proteccion',
            // 'fecha_remision',
            // 'id_presenta_violencia',
            // 'id_autoriza_datos',
            // 'id_quiere_entrar',
            // 'por_que_entrar',
            // 'gustaria_hacer',
            // 'id_autoriza_int',
            // 'id_autoriza_ext',
            // 'id_autoriza_terr',
            // 'id_autoriza_foto',
            // 'razones_ingreso',
            // 'tiempo_calle_m',
            // 'tipo_tiempo_estudio',
            // 'sisben',
            // 'tipo_discapacidad',
            // 'numero_meses',
            // 'cual_metodo',
            // 'jornada_inreso_de',
            // 'jornada_ingreso_a',
            // 'dias_calle',
            // 'tipo_tiempo_pard',
            // 'medida_srpa',
            // 'tipo_tiempo_spoa',
            // 'causa_actos_del',
            // 'certificado_poblacion',
            // 'tipo_tiempo_calle',
            // 'entidad_remitio',
            // 'motivo_remitio',
            // 'tipo_afiliacion',
            // 'razon_no_salud',
            // 'tiempo_spoa',
            // 'minicipio_despl',
=======
            'id_nnaj' => $dataxxxx['nnajxxxx']->id_nnaj,
>>>>>>> master
        ];
        return $dataxxxx;
    }
    public function setFichaAcercamientoIngresoIFT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $objetoxx = FichaAcercamientoIngreso::where('id_nnaj', $dataxxxx['nnajxxxx']->id_nnaj)->first();
            if ($objetoxx == null) {
                $objetoxx = FichaAcercamientoIngreso::create($this->getFichaAcercamientoIngresoDataIFT($dataxxxx));
            }
            return $objetoxx;
        }, 5);
        return $objetoxx;
    }
    /**
     * crear nnaj en el antiguo simi, este método se llama en el metodo edit de FiController
     *
     * @param array $dataxxxx
<<<<<<< HEAD
     * @return void
     */
    public function setNnajAnguoSimiIFT($dataxxxx)
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $nnajxxxx  = $this->getGeNnajIFT($dataxxxx);
            if ($nnajxxxx == null) {
                $padrexxx = $dataxxxx['padrexxx'];
=======
     * @return object
     */
    public function setNnajAnguoSimiIFT($dataxxxx): object
    {
        $objetoxx = DB::transaction(function () use ($dataxxxx) {
            $nnajxxxx  = $this->getGeNnajIFT($dataxxxx);
            $padrexxx = $dataxxxx['padrexxx'];
            if ($nnajxxxx == null) {
>>>>>>> master
                $dependen = $padrexxx->sis_nnaj->nnaj_upis->where('prm_principa_id', 227)->first();
                $servicio = $dependen->nnaj_deses->where('prm_principa_id', 227)->first();
                if ($servicio != null) {
                    $nnajxxxx = $this->setGeNnajIFT(['padrexxx' => $padrexxx]);
                    $document = $this->setGeNnajDocumentoIFT(['nnajxxxx' => $nnajxxxx, 'padrexxx' => $dataxxxx['padrexxx']]);
                    $this->setGeUpiNnajIFT(
                        [
                            'nnajxxxx' =>  $nnajxxxx,
                            'dependen' => $dependen,
                            'servicio' => $servicio->sis_servicio
                        ]
                    );
                }
            } else {
<<<<<<< HEAD

                $this->pruebaANFT($dataxxxx);
            }
=======
                $padrexxx = $this->pruebaANFT($dataxxxx);
            }
            return $padrexxx;
>>>>>>> master
        }, 5);
        return $objetoxx;
    }
}
