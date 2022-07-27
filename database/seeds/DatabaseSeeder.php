<?php

use Illuminate\Database\Seeder;
use Database\Seeds\Indicadores\InAreaindiSeeder;
use Database\Seeds\Indicadores\InGrupreguSeeder;
use Database\Seeds\Indicadores\InIndilibaSeeder;
use Database\Seeds\Indicadores\InLibagrupSeeder;
use Database\Seeds\Indicadores\InPregtcamSeeder;
use Database\Seeds\Indicadores\InIndicadorSeeder;
use Database\Seeds\Indicadores\InLineaBasesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SisEstasSeeder::class);
        $this->call(SisPaisSeeder::class);
        $this->call(SisDepartamSeeder::class);
        $this->call(SisMunicipioSeeder::class);
        $this->call(SisCargosSeeder::class);
        $this->call(SisLocalidadsSeeder::class);
        $this->call(SisDocumentosFuentesSeeder::class);
        $this->call(SisMenusSeeder::class);
        $this->call(SisPestaniasSeeder::class);
        $this->call(RolesSeeder::class);
        /** SEEDERS PARA LOS PERSMISOS */
        $this->call(PermisosActaencuetroSeeder::class);
        $this->call(PermisosFosadminSeeder::class);
        $this->call(PermisosUbicacionSeeder::class);
        $this->call(CarguedocuSeeder::class);
        $this->call(AyudaPermisosSeeder::class);
        $this->call(InvalorInicialPermisoSeeder::class);
        $this->call(PermisosVsiSeeder::class);
        $this->call(PermisosMatriculaSeeder::class);
        $this->call(PermisosEducacionUsuarioSeeder::class);
        $this->call(PermisosIndicadoresSeeder::class);
        $this->call(PermisosGestMatrAcademicaSeeder::class);
        $this->call(PermisosPlanillasAsistenciaSemanalDiariaSeeder::class); // Planillas de Asistencia Semanal y 
        $this->call(PermisosAdmiCuestionarioGustosIntereseSeeder::class); // Cuestionario de gustos, intereces y Habilidades
        $this->call(PermisosAdmiCuestionarioLimiteSeeder::class); // Cuestionario de gustos, intereces y Habilidades
        $this->call(PermisosAdmiActiSeeder::class); // Administracion de Actividades
        $this->call(PermisosValoCaracToSeeder::class);

        $this->call(ReportesSeeder::class);
        // CUALQUIER SEEDER DE PERMISO SE DEBE CARGAR ANTES DE ESTE
        $this->call(RolesYPermisosSeeder::class);
        $this->call(PermisosReferenteLocalSeeder::class);
        $this->call(SisParametrosMilSeeder::class);
        $this->call(SisParametrosDosMilSeeder::class);
        $this->call(SisParametrosTresMilSeeder::class);
        $this->call(EstusuariosSeeder::class);
        $this->call(UsuariosmilSeeder::class);
        $this->call(UsuariosdosmilSeeder::class);
        $this->call(UsuariosTresMilSeeder::class);
        /** FIN SEEDERS PARA LOS PERSMISOS */
        $this->call(TemasTableSeeder::class);
        $this->call(SisTablasSeeder::class);
        $this->call(SisTcamposSeeder::class);
        $this->call(TemacomboSeeder::class);
        $this->call(ParametroTemacomboMilSeeder::class);
        $this->call(ParametroTemacomboDosmilSeeder::class);
        $this->call(ParametroTemacomboTresmilSeeder::class);
        $this->call(RolesUsuarioSeeder::class);
        $this->call(SisDepartamSisPaiSeeder::class);
        $this->call(SisDepartamSisMunicipioSeeder::class);
        $this->call(SisEslugSeeder::class);
        $this->call(SisAreasSeeder::class);
        $this->call(AreasUserSeeder::class);
        $this->call(FiNucleoFamiliarsTableSeeder::class);
        $this->call(SisUpzsSeeder::class);
        $this->call(SisBarriosSeeder::class);
        $this->call(SisBarriosDosMilSeeder::class);
        $this->call(SisBarriosTresMilSeeder::class);
        $this->call(SisLocalupzSeeder::class);
        $this->call(SisUpzbarrisSeeder::class);
        $this->call(SisUpzbarriDosMilSeeder::class);
        $this->call(SisUpzbarriTresMilSeeder::class);
        $this->call(SisDepensSeeder::class);
        $this->call(SisDepenUsuaSeeder::class);
        $this->call(SisEntidadsSeeder::class);
        $this->call(SisDepeServsSeeder::class);
        $this->call(SisEnprsaSeeder::class);
        $this->call(SisEntidadSaludsSeeder::class);
        $this->call(SisInstitucionEdusSeeder::class);
        // * INDICADORES
        $this->call(InIndicadorSeeder::class);
        $this->call(InAreaindiSeeder::class);
        $this->call(InLineaBasesSeeder::class);
        $this->call(InIndilibaSeeder::class);
        $this->call(InLibagrupSeeder::class);
        $this->call(InPregtcamSeeder::class);
        $this->call(InGrupreguSeeder::class);
         // * FIN INDICADORES
        
        $this->call(SisActividadsSeeder::class);
        $this->call(SisMapaProcsSeeder::class);
        $this->call(SisProcesosSeeder::class);
        $this->call(MensajesSeeder::class);
        $this->call(SisActividadProcesosSeeder::class);
        // ya
        $this->call(SisNnajMilSeeder::class);
        $this->call(SisNnajDosMilSeeder::class);
        $this->call(SisNnajTresMilSeeder::class);
        $this->call(SisNnajCuatroMilSeeder::class);
        $this->call(SisNnajCincoMilSeeder::class);
        $this->call(SisNnajSeisMilSeeder::class);
        $this->call(SisNnajSieteMilSeeder::class);
        $this->call(SisNnajOchoMilSeeder::class);
        $this->call(SisNnajNueveMilSeeder::class);
        $this->call(SisNnajDiezMilSeeder::class);

        $this->call(SisNnajOnceMilSeeder::class);

        $this->call(FiDatosBasicoMilSeeder::class);
        $this->call(FiDatosBasicoDosMilSeeder::class);
        $this->call(FiDatosBasicoTresMilSeeder::class);
        $this->call(FiDatosBasicoCuatroMilSeeder::class);
        $this->call(FiDatosBasicoCincoMilSeeder::class);
        $this->call(FiDatosBasicoSeisMilSeeder::class);
        $this->call(FiDatosBasicoSieteMilSeeder::class);
        $this->call(FiDatosBasicoOchoMilSeeder::class);
        $this->call(FiDatosBasicoNueveMilSeeder::class);
        $this->call(FiDatosBasicoDiezMilSeeder::class);
//ya
        $this->call(NnajDocuMilSeeder::class);
        $this->call(NnajDocuDosMilSeeder::class);
        $this->call(NnajDocuTresMilSeeder::class);
        $this->call(NnajDocuCuatroMilSeeder::class);
        $this->call(NnajDocuCincoMilSeeder::class);
        $this->call(NnajDocuSeisMilSeeder::class);
        $this->call(NnajDocuSieteMilSeeder::class);
        $this->call(NnajDocuOchoMilSeeder::class);
        $this->call(NnajDocuNueveMilSeeder::class);
        $this->call(NnajDocuDiezMilSeeder::class);
// ya
        $this->call(NnajNacimiMilSeeder::class);
        $this->call(NnajNacimiDosMilSeeder::class);
        $this->call(NnajNacimiTresMilSeeder::class);
        $this->call(NnajNacimiCuatroMilSeeder::class);
        $this->call(NnajNacimiCincoMilSeeder::class);
        $this->call(NnajNacimiSeisMilSeeder::class);
        $this->call(NnajNacimiSieteMilSeeder::class);
        $this->call(NnajNacimiOchoMilSeeder::class);
        $this->call(NnajNacimiNueveMilSeeder::class);
        $this->call(NnajNacimiDiezMilSeeder::class);
//ya
        $this->call(NnajFiCsdMilSeeder::class);
        $this->call(NnajFiCsdDosMilSeeder::class);
        $this->call(NnajFiCsdTresMilSeeder::class);
        $this->call(NnajFiCsdCuatroMilSeeder::class);
        $this->call(NnajFiCsdCincoMilSeeder::class);
        $this->call(NnajFiCsdSeisMilSeeder::class);
        $this->call(NnajFiCsdSieteMilSeeder::class);
        $this->call(NnajFiCsdOchoMilSeeder::class);
        $this->call(NnajFiCsdNueveMilSeeder::class);
//ya
        $this->call(NnajFocaliMilSeeder::class);
        $this->call(NnajFocaliDosMilSeeder::class);
        $this->call(NnajFocaliTresMilSeeder::class);
        $this->call(NnajFocaliCuatroMilSeeder::class);
        $this->call(NnajFocaliCincoMilSeeder::class);
        $this->call(NnajFocaliSeisMilSeeder::class);
        $this->call(NnajFocaliSieteMilSeeder::class);
        $this->call(NnajFocaliOchoMilSeeder::class);
        // ya
        $this->call(NnajSexoMilSeeder::class);
        $this->call(NnajSexoDosMilSeeder::class);
        $this->call(NnajSexoTresMilSeeder::class);
        $this->call(NnajSexoCuatroMilSeeder::class);
        $this->call(NnajSexoCincoMilSeeder::class);
        $this->call(NnajSexoSeisMilSeeder::class);
        $this->call(NnajSexoSieteMilSeeder::class);
        $this->call(NnajSexoOchoMilSeeder::class);
        $this->call(NnajSexoNueveMilSeeder::class);
// ya
        $this->call(NnajSitMilMilSeeder::class);
        $this->call(NnajSitMilDosMilSeeder::class);
        $this->call(NnajSitMilTresMilSeeder::class);
        $this->call(NnajSitMilCuatroMilSeeder::class);
        $this->call(NnajSitMilCincoMilSeeder::class);
        $this->call(NnajSitMilSeisMilSeeder::class);
        $this->call(NnajSitMilSieteMilSeeder::class);
        $this->call(NnajSitMilOchoMilSeeder::class);

        $this->call(NnajUpiMilSeeder::class);
        $this->call(NnajUpiDosMilSeeder::class);
        $this->call(NnajUpiTresMilSeeder::class);
        $this->call(NnajUpiCuatroMilSeeder::class);
        $this->call(NnajUpiCincoMilSeeder::class);
        $this->call(NnajUpiSeisMilSeeder::class);
        $this->call(NnajUpiSieteMilSeeder::class);
        $this->call(NnajUpiOchoMilSeeder::class);
        $this->call(NnajUpiNueveMilSeeder::class);
        $this->call(NnajUpiDiezMilSeeder::class);
        $this->call(NnajUpiOnceMilSeeder::class);
        $this->call(NnajUpiDoceMilSeeder::class);
// ya
        $this->call(NnajDeseMilSeeder::class);
        $this->call(NnajDeseDosMilSeeder::class);
        $this->call(NnajDeseTresMilSeeder::class);
        $this->call(NnajDeseCuatroMilSeeder::class);
        $this->call(NnajDeseCincoMilSeeder::class);
        $this->call(NnajDeseSeisMilSeeder::class);
        $this->call(NnajDeseSieteMilSeeder::class);
        $this->call(NnajDeseOchoMilSeeder::class);
        $this->call(NnajDeseNueveMilSeeder::class);
        $this->call(NnajDeseDiezMilSeeder::class);
        $this->call(NnajDeseOnceMilSeeder::class);
        $this->call(NnajDeseDoceMilSeeder::class);
//ya
        $this->call(FiDiligenc1MilSeeder::class);
        $this->call(FiDiligenc2MilSeeder::class);
        $this->call(FiDiligenc3MilSeeder::class);

        $this->call(FiBienvenidaSeeder::class); //nuevo
        $this->call(FiResidenciaSeeder::class); //nuevo
        $this->call(FiCondicionAmbienteSeeder::class);
        $this->call(FiFormacionSeeder::class); //nuevo
        $this->call(FiMotivoVinculacionSeeder::class);
        $this->call(FiSaludSeeder::class); //ya
        $this->call(FiEventosMedicoSeeder::class);
        $this->call(FiVictataqSeeder::class);
        $this->call(FiDiscausaSeeder::class);
        $this->call(FiGeneracionIngresoSeeder::class); //nuevo
        $this->call(FiDiasGeneraIngresoSeeder::class);
        $this->call(FiActividadestlSeeder::class); //nuevo
        $this->call(FiActividadTiempoLibreSeeder::class);
        $this->call(FiAccioneSeeder::class);
        $this->call(FiConsumoSpaSeeder::class); //nuevo
        $this->call(FiSustanciaConsumidaSeeder::class);
        $this->call(FiRedApoyoActualSeeder::class); //nuevo
        $this->call(FiRedApoyoAntecedenteSeeder::class); //nuevo
        $this->call(FiViolenciaSeeder::class); //nuevo
        $this->call(FiLesicomeSeeder::class);
        $this->call(FiViolbasaSeeder::class);
        $this->call(FiSituacionEspecialSeeder::class); //nuevo
        $this->call(FiSituVulneraSeeder::class);
        $this->call(FiContactoSeeder::class); //nuevo
        $this->call(FiCompfamiSeeder::class); //nuevo
        $this->call(FiJustrestSeeder::class); //nuevo
        $this->call(FiJrCausassiSeeder::class);
        $this->call(FiJrCausasmoSeeder::class);
        $this->call(FiProcesoPardSeeder::class);
        $this->call(FiProcesoSpoaSeeder::class);
        $this->call(FiProcesoSrpaSeeder::class);
        $this->call(FiAutorizacionSeeder::class); //nuevo
        $this->call(FiRazoneSeeder::class); //nuevo
        $this->call(CsdsSeeder::class);
        $this->call(CsdSisNnajSeeder::class);
        $this->call(CsdJusticiasSeeder::class);
        $this->call(CsdNnajEspecialSeeder::class);
        $this->call(CsdViolenciasSeeder::class);
        $this->call(CsdConclusionesSeeder::class);
        $this->call(CsdAlimentacionsSeeder::class);
        $this->call(CsdAlimentFrecSeeder::class);
        $this->call(CsdAlimentCompraSeeder::class);
        $this->call(CsdAlimentIngeSeeder::class);
        $this->call(CsdAlimentPreparaSeeder::class);
        $this->call(CsdDinFamiliarSeeder::class);
        $this->call(CsdDinfamIncumpleSeeder::class);
        $this->call(CsdDinfamAntecedenteSeeder::class);
        $this->call(CsdDinfamProblemaSeeder::class);
        $this->call(CsdDinfamEstablecenSeeder::class);
        $this->call(CsdDinfamMadreSeeder::class);
        $this->call(CsdDinfamPadresSeeder::class);
        $this->call(CsdDatosBasicoSeeder::class); // Jorge
        $this->call(CsdGeningAportarSeeder::class); // Jorge
        $this->call(CsdRedsocActualSeeder::class);
        $this->call(CsdRedsocPasadoSeeder::class); // Jorge
        $this->call(CsdComFamiliarSeeder::class);
        $this->call(CsdComfamobSeeder::class); // Jorge
        $this->call(CsdGenIngresoSeeder::class); // Jorge
        $this->call(CsdBienvenidaSeeder::class); // Jorge
        $this->call(CsdBienvenidaMotivosSeeder::class); // Jorge
        $this->call(SisFsoportesSeeder::class);
        $this->call(FosStsesSeeder::class);
        $this->call(FosTsesSeeder::class);
        $this->call(FosSeguimientosSeeder::class);
        $this->call(AgTemasTableSeeder::class);
        $this->call(AgTallersTableSeeder::class);
        $this->call(SisTitulosSeeder::class);
        $this->call(AgRecursosTableMigSeeder::class);

        // $this->call(AgRelacionsTableSeeder::class);
        // $this->call(AgRelacionsDosMIlSeeder::class);

        $this->call(AgSubtemasTableSeeder::class);
        $this->call(SisObsesSeeder::class);
        $this->call(CsdResidenciaSeeder::class);
        $this->call(CsdResideambienteSeeder::class);
        // -- Modulo SICO SOCIAL, Javier
        $this->call(VsisSeeder::class); // ok  //1
        $this->call(VsiBienvenidaSeeder::class);        // ok // 2
        $this->call(VsiBienvenidaMotivoSeeder::class);  // ok // 3
        $this->call(VsiAntecedenteSeeder::class);  // ok //6
        $this->call(VsiDatosVinculaSeeder::class);  //13 ok
        $this->call(VsiDinFamiliarSeeder::class);  //14 ok
        $this->call(VsiDinfamAusenciaSeeder::class);  //15 ok
        $this->call(VsiDinfamCuidadorSeeder::class);  //18  estan mal los id de vsi_dinfamiliar_id
        $this->call(VsiDinfamMadreSeeder::class);  //21 ok
        $this->call(VsiEducacionSeeder::class);  //24  ok
        $this->call(VsiRedSocialSeeder::class);  //52 ok
        $this->call(VsiRedsocAcesoSeeder::class);  //50 ok
        $this->call(VsiRedSocMotivoSeeder::class);  //53 ok
        $this->call(VsiRelFamiliarSeeder::class);  //57 ok
        $this->call(VsiRelfamAccionesSeeder::class);  //55 estan mal los id de vsi_relfamiliar_id
        $this->call(VsiEstEmocionalSeeder::class);
        $this->call(VsiRelfamDificultadSeeder::class);
        $this->call(VsiActEmocionalSeeder::class);
        $this->call(VsiActemoFisiologicaSeeder::class);
        $this->call(VsiRelfamMotivoSeeder::class);  //58 ok
        $this->call(VsiRelSocialesSeeder::class);  //59  ok
        $this->call(VsiRelSolDificultaSeeder::class);  //aca
        $this->call(VsiRelSolFacilitaSeeder::class);  //61 ok
        $this->call(VsiViolenciaSeeder::class);  //66 ok
        $this->call(VsiVioContextoSeeder::class);  //65 ok
        $this->call(VsiVioTipoSeeder::class);  //67 ok
        $this->call(VsiEmocionVinculaSeeder::class);  //30 ok
        $this->call(VsiSitEspecialSeeder::class);
        $this->call(VsiSituacionVinculaSeeder::class);  //64
        $this->call(VsiEduCausaSeeder::class);  //25
        $this->call(VsiEduDificultadSeeder::class);  //aca
        $this->call(VsiEduFortalezaSeeder::class);  //29
        $this->call(VsiGenIngresoSeeder::class);
        $this->call(VsiGeningDiaSeeder::class);  //38
        $this->call(VsiGeningLaborSeeder::class);  //39
        $this->call(VsiGeningQuienSeeder::class);  //40
        $this->call(VsiSitespRiesgoSeeder::class);  //62
        $this->call(VsiSitespVictimaSeeder::class);  //63
        $this->call(VsiAbuSexualSeeder::class);  //4  falta
        $this->call(VsiConceptoSeeder::class);  //8 falta
        $this->call(VsiConcepRedSeeder::class);  //7 falta
        $this->call(VsiConsentimientoSeeder::class);  //9 falta
        $this->call(VsiConsumoSeeder::class);  //10 falta
        $this->call(VsiConsumoExpectativaSeeder::class);  //11 falta
        $this->call(VsiConsumoQuienSeeder::class);  //12 falta
        $this->call(VsiDinfamCalleSeeder::class);  //16 falta
      //$this->call(VsiDinfamProstitucionSeeder::class);  //23 falta
        $this->call(VsiEduDiftipoASeeder::class);  //27 falta
        $this->call(VsiEduDiftipoBSeeder::class);  //28 falta
        $this->call(VsiEstemoAdecuadoSeeder::class);  //31 falta
        $this->call(VsiEstemoDificultaSeeder::class);  //32 falta
        $this->call(VsiEstemoEstresanteSeeder::class);  //33 falta
        $this->call(VsiEstemoLesivaSeeder::class);  //34 falta
        $this->call(VsiEstemoMotivoSeeder::class);  //35 falta
        $this->call(VsiEstemoContextoSeeder::class);
        $this->call(VsiFacProtectorSeeder::class);  //36 falta
        $this->call(VsiFacRiesgoSeeder::class);  //37 falta
        $this->call(VsiMetaSeeder::class);  //41 falta
        $this->call(VsiNnajAcademicaSeeder::class);  //42 falta
        $this->call(VsiNnajComportamentalSeeder::class);  //43 falta
        $this->call(VsiNnajEmocionalSeeder::class);  //44 falta
        $this->call(VsiNnajFamiliarSeeder::class);  //46 falta
        $this->call(VsiNnajSexualSeeder::class);  //47 falta
        $this->call(VsiNnajSocialSeeder::class);  //48 falta
        $this->call(VsiPotencialidadSeeder::class);  //49 falta
        $this->call(VsiRedsocActualSeeder::class);  //51 falta
        $this->call(VsiRedsocPasadoSeeder::class);  //54 falta
        $this->call(VsiSaludSeeder::class);
        $this->call(SisDiaFestivosSeeder::class);
        $this->call(VsiPersonaSeeder::class);
        $this->call(AjusteAgSubtemasSeeder::class);  // Ajuste del seeder AdSubtema::class
        $this->call(MotivoEgresoSeeder::class);
        $this->call(MotivoEgresoSecusSeeder::class);
        $this->call(MotivoEgreusSeeder::class);
        $this->call(TextosSeeder::class);
        $this->call(EdaGradoSeeder::class);
        $this->call(IntervencionAdminSeeder::class); // Intervenciones Admin.
        $this->call(BeneficiarioSeeder::class); // Familiares como beneficiarios
       

        $this->call(GrupoMatriculaSeeder::class); // Administracion de Grupos
        $this->call(CursosSeeder::class); // Administracion de Cursos
        $this->call(ModuloSeeder::class); // Administracion de Modulos
        $this->call(CursoModuloSeeder::class); // Administracion de CursosAsignados
        $this->call(UnidadSeeder::class); // Administracion de Modulos
        $this->call(ModuloUnidadSeeder::class); // Administracion de UnidadAsignado
        $this->call(AreaActividadPerfilVocacional::class); // Administracion perfil vocacional
        $this->call(UnidadSeeder::class); // Administracion de Modulos
        $this->call(ModuloUnidadSeeder::class); // Administracion de UnidadAsignado
        $this->call(TipoActividadesAsdSeeder::class); // Administracion de tipos de actividad de asistencia diaria
        $this->call(ActividadesAsdSeeder::class); // Actividades de asistencia diaria
        $this->call(VctoItemAreaSubareaSeeder::class); // areas, subareas,items admin vcto


    }

}
