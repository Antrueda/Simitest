<?php

use App\Models\consulta\pivotes\CsdBienvenidaMotivos;
use Illuminate\Database\Seeder;

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
        $this->call(RolesYPermisosSeeder::class);
        $this->call(SisParametrosSeeder::class);
        $this->call(SisPaisSeeder::class);
        $this->call(SisDepartamentoSeeder::class);
        $this->call(SisMunicipioSeeder::class);
        $this->call(SisCargosSeeder::class);
        $this->call(SisLocalidadsSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(TemasTableSeeder::class);
        $this->call(SisAreasSeeder::class);
        $this->call(FiNucleoFamiliarsTableSeeder::class);
        $this->call(SisUpzsSeeder::class);
        $this->call(SisBarriosSeeder::class);
        $this->call(SisLocalupzSeeder::class);
        $this->call(SisUpzbarrisSeeder::class);
        $this->call(SisDependenciasSeeder::class);
        $this->call(SisEntidadsSeeder::class);
        $this->call(SisEntidadSaludsSeeder::class);
        $this->call(SisInstitucionEdusSeeder::class);
        $this->call(SisDocumentosFuentesSeeder::class);
        $this->call(InIndicadorSeeder::class);
        $this->call(SisActividadsSeeder::class);
        $this->call(SisMapaProcsSeeder::class);
        $this->call(SisProcesosSeeder::class);
        $this->call(SisActividadProcesosSeeder::class);
        $this->call(SisNnajsSeeder::class);
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
        $this->call(CsdComFamiliarObservacionesSeeder::class); // Jorge
        $this->call(CsdGenIngresoSeeder::class); // Jorge
        $this->call(CsdBienvenidaSeeder::class); // Jorge
        //$this->call(CsdBienvenidaMotivosSeeder::class); // Jorge
        $this->call(InLineaBasesSeeder::class);
        $this->call(InFuentesSeeder::class);
        $this->call(InBaseFuentesSeeder::class);
        $this->call(InPreguntasSeeder::class);
        $this->call(SisTablasSeeder::class);
        $this->call(SisTcamposSeeder::class);
        $this->call(InLigrusSeeder::class);
        $this->call(InDocPreguntasSeeder::class);
        $this->call(SisFsoportesSeeder::class);
        $this->call(FosTsesSeeder::class);
        $this->call(FosStsesSeeder::class);
        $this->call(InRespuestasSeeder::class);
        $this->call(AgTemasSeeder::class);
        $this->call(AgTallersSeeder::class);
        $this->call(AgSubtemasSeeder::class);
        $this->call(SisTitulosSeeder::class);
        $this->call(AgRecursosSeeder::class);
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
        //56 estan mal los id de vsi_relfamiliar_id, vsi_relfamiliar tiene solo 331 se le estan
        //asignando valores superiores que no cumplen con la integridad referencial
        $this->call(VsiEstEmocionalSeeder::class);
        $this->call(VsiRelfamDificultadSeeder::class);
        $this->call(VsiActEmocionalSeeder::class);
        $this->call(VsiActemoFisiologicaSeeder::class);
        $this->call(VsiRelfamMotivoSeeder::class);  //58 ok
        $this->call(VsiRelSocialesSeeder::class);  //59  ok
        $this->call(VsiRelSolDificultaSeeder::class);  //60 ok
        $this->call(VsiRelSolFacilitaSeeder::class);  //61 ok
        $this->call(VsiViolenciaSeeder::class);  //66 ok
        $this->call(VsiVioContextoSeeder::class);  //65 ok

        $this->call(VsiVioTipoSeeder::class);  //67 ok
        $this->call(VsiEmocionVinculaSeeder::class);  //30 ok
        $this->call(VsiSitEspecialSeeder::class);
        $this->call(VsiSituacionVinculaSeeder::class);  //64 falta


        $this->call(VsiEduCausaSeeder::class);  //25
        $this->call(VsiEduDificultadSeeder::class);  //26 falta
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
        $this->call(VsiDinfamConsumoSeeder::class);  //17 falta
        $this->call(VsiDinfamDelitoSeeder::class);  //19 falta
        $this->call(VsiDinfamLibertadSeeder::class);  //20 falta
        $this->call(VsiDinfamPadreSeeder::class);  //22 falta
        $this->call(VsiDinfamProstitucionSeeder::class);  //23 falta


        $this->call(VsiEduDiftipoASeeder::class);  //27 falta
        $this->call(VsiEduDiftipoBSeeder::class);  //28 falta

        $this->call(VsiEstemoAdecuadoSeeder::class);  //31 falta
        $this->call(VsiEstemoDificultaSeeder::class);  //32 falta
        $this->call(VsiEstemoEstresanteSeeder::class);  //33 falta
        $this->call(VsiEstemoLesivaSeeder::class);  //34 falta
        $this->call(VsiEstemoMotivoSeeder::class);  //35 falta
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
        //  falta
        //  falta

    }
}
