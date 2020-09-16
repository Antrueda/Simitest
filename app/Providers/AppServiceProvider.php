<?php

namespace App\Providers;

use App\Models\Acciones\Grupales\AgActividad;
use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Grupales\AgContexto;
use App\Models\Acciones\Grupales\AgConvenio;
use App\Models\Acciones\Grupales\AgRecurso;
use App\Models\Acciones\Grupales\AgRelacion;
use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Acciones\Grupales\AgSubtema;
use App\Models\Acciones\Grupales\AgTaller;
use App\Models\Acciones\Grupales\AgTallerAgTema;
use App\Models\Acciones\Grupales\AgTema;
use App\Models\Acciones\Individuales\AiReporteEvasion;
use App\Models\Acciones\Individuales\AiRetornoSalida;
use App\Models\Acciones\Individuales\AiSalidaMayores;
use App\Models\Acciones\Individuales\AiSalidaMenores;
use App\Models\consulta\Csd;
use App\Models\consulta\CsdAlimentacion;
use App\Models\consulta\CsdBienvenida;
use App\Models\consulta\CsdComFamiliar;
use App\Models\consulta\CsdComFamiliarObservaciones;
use App\Models\consulta\CsdConclusiones;
use App\Models\consulta\CsdDatosBasico;
use App\Models\consulta\CsdDinFamiliar;
use App\Models\consulta\CsdDinfamMadre;
use App\Models\consulta\CsdDinfamPadre;
use App\Models\consulta\CsdGeningAporta;
use App\Models\consulta\CsdGenIngreso;
use App\Models\consulta\CsdJusticia;
use App\Models\consulta\CsdRedsocActual;
use App\Models\consulta\CsdRedsocPasado;
use App\Models\consulta\CsdResidencia;
use App\Models\consulta\CsdViolencia;
use App\Models\consulta\pivotes\CsdAlimentCompra;
use App\Models\consulta\pivotes\CsdAlimentFrec;
use App\Models\consulta\pivotes\CsdAlimentInge;
use App\Models\consulta\pivotes\CsdAlimentPrepara;
use App\Models\consulta\pivotes\CsdBienvenidaMotivo;
use App\Models\consulta\pivotes\CsdDinfamAntecedente;
use App\Models\consulta\pivotes\CsdDinfamEstablecen;
use App\Models\consulta\pivotes\CsdDinfamIncumple;
use App\Models\consulta\pivotes\CsdDinfamProblema;
use App\Models\consulta\pivotes\CsdNnajEspecial;
use App\Models\consulta\pivotes\CsdResideambiente;
use App\Models\consulta\pivotes\CsdSisNnaj;
use App\Models\fichaIngreso\FiAccione;
use App\Models\fichaIngreso\FiActividadestl;
use App\Models\fichaIngreso\FiActividadTiempoLibre;
use App\Models\fichaIngreso\FiAutorizacion;
use App\Models\fichaIngreso\FiBienvenida;
use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\FiCondicionAmbiente;
use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\fichaIngreso\FiContacto;
use App\Models\fichaIngreso\FiContviol;
use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\FiDiasGeneraIngreso;
use App\Models\fichaIngreso\FiDiscausa;
use App\Models\fichaIngreso\FiDocumentosAnexa;
use App\Models\fichaIngreso\FiEnfermedadesFamilia;
use App\Models\fichaIngreso\FiEventosMedico;
use App\Models\fichaIngreso\FiFormacion;
use App\Models\fichaIngreso\FiGeneracionIngreso;
use App\Models\fichaIngreso\FiJrFamiliar;
use App\Models\fichaIngreso\FiJustrest;
use App\Models\fichaIngreso\FiLesicome;
use App\Models\fichaIngreso\FiModalidad;
use App\Models\fichaIngreso\FiMotivoVinculacion;
use App\Models\fichaIngreso\FiProcesoFamilia;
use App\Models\fichaIngreso\FiProcesoPard;
use App\Models\fichaIngreso\FiProcesoSpoa;
use App\Models\fichaIngreso\FiProcesoSrpa;
use App\Models\fichaIngreso\FiRazonContinua;
use App\Models\fichaIngreso\FiRazone;
use App\Models\fichaIngreso\FiRazonIniciado;
use App\Models\fichaIngreso\FiRedApoyoActual;
use App\Models\fichaIngreso\FiRedApoyoAntecedente;
use App\Models\fichaIngreso\FiRedesApoyo;
use App\Models\fichaIngreso\FiResidencia;
use App\Models\fichaIngreso\FiRiesgoEscnna;
use App\Models\fichaIngreso\FiSacramento;
use App\Models\fichaIngreso\FiSalud;
use App\Models\fichaIngreso\FiSituacionEspecial;
use App\Models\fichaIngreso\FiSituacionVulneracion;
use App\Models\fichaIngreso\FiSustanciaConsumida;
use App\Models\fichaIngreso\FiVestuarioNnaj;
use App\Models\fichaIngreso\FiVictataq;
use App\Models\fichaIngreso\FiVictimaEscnna;
use App\Models\fichaIngreso\FiViolbasa;
use App\Models\fichaIngreso\FiViolencia;
use App\Models\fichaobservacion\FosDatosBasico;
use App\Models\fichaobservacion\FosStse;
use App\Models\fichaobservacion\FosTse;
use App\Models\intervencion\IsDatosBasico;
use App\Models\intervencion\IsProximaAreaAjuste;

use App\Models\Permissionext;
use App\Models\Post;

use App\Models\sicosocial\Pivotes\VsiActemoFisiologica;
use App\Models\sicosocial\Pivotes\VsiBienvenidaMotivo;
use App\Models\sicosocial\Pivotes\VsiConcepRed;
use App\Models\sicosocial\Pivotes\VsiConsumoExpectativa;
use App\Models\sicosocial\Pivotes\VsiConsumoQuien;
use App\Models\sicosocial\Pivotes\VsiDinfamAusencia;
use App\Models\sicosocial\Pivotes\VsiDinfamCalle;
use App\Models\sicosocial\Pivotes\VsiDinfamConsumo;
use App\Models\sicosocial\Pivotes\VsiDinfamCuidador;
use App\Models\sicosocial\Pivotes\VsiDinfamDelito;
use App\Models\sicosocial\Pivotes\VsiDinfamLibertad;
use App\Models\sicosocial\Pivotes\VsiDinfamProstitucion;
use App\Models\sicosocial\Pivotes\VsiDinfamSalud;
use App\Models\sicosocial\Pivotes\VsiEduCausa;
use App\Models\sicosocial\Pivotes\VsiEduDificultad;
use App\Models\sicosocial\Pivotes\VsiEduDiftipoA;
use App\Models\sicosocial\Pivotes\VsiEduDiftipoB;
use App\Models\sicosocial\Pivotes\VsiEduFortaleza;
use App\Models\sicosocial\Pivotes\VsiEmocionVincula;
use App\Models\sicosocial\Pivotes\VsiEstemoAdecuado;
use App\Models\sicosocial\Pivotes\VsiEstemoDificulta;
use App\Models\sicosocial\Pivotes\VsiEstemoEstresante;
use App\Models\sicosocial\Pivotes\VsiEstemoLesiva;
use App\Models\sicosocial\Pivotes\VsiEstemoMotivo;
use App\Models\sicosocial\Pivotes\VsiGeningDia;
use App\Models\sicosocial\Pivotes\VsiGeningLabor;
use App\Models\sicosocial\Pivotes\VsiGeningQuien;
use App\Models\sicosocial\Pivotes\VsiNnajAcademica;
use App\Models\sicosocial\Pivotes\VsiNnajComportamental;
use App\Models\sicosocial\Pivotes\VsiNnajEmocional;
use App\Models\sicosocial\Pivotes\VsiNnajFamiliar;
use App\Models\sicosocial\Pivotes\VsiNnajSexual;
use App\Models\sicosocial\Pivotes\VsiNnajSocial;
use App\Models\sicosocial\Pivotes\VsiRedsocAceso;
use App\Models\sicosocial\Pivotes\VsiRedsocMotivo;
use App\Models\sicosocial\Pivotes\VsiRelfamAccione;
use App\Models\sicosocial\Pivotes\VsiRelfamDificultad;
use App\Models\sicosocial\Pivotes\VsiRelfamMotivo;
use App\Models\sicosocial\Pivotes\VsiRelsolDificulta;
use App\Models\sicosocial\Pivotes\VsiRelsolFacilita;
use App\Models\sicosocial\Pivotes\VsiSitespRiesgo;
use App\Models\sicosocial\Pivotes\VsiSitespVictima;
use App\Models\sicosocial\Pivotes\VsiSituacionVincula;
use App\Models\sicosocial\Pivotes\VsiVioContexto;
use App\Models\sicosocial\Pivotes\VsiVioTipo;
use App\Models\sicosocial\Vsi;
use App\Models\sicosocial\VsiAbuSexual;
use App\Models\sicosocial\VsiActEmocional;
use App\Models\sicosocial\VsiAntecedente;
use App\Models\sicosocial\VsiBienvenida;
use App\Models\sicosocial\VsiConcepto;
use App\Models\sicosocial\VsiConsentimiento;
use App\Models\sicosocial\VsiConsumo;
use App\Models\sicosocial\VsiDatosVincula;
use App\Models\sicosocial\VsiDinFamiliar;
use App\Models\sicosocial\VsiDinfamMadre;
use App\Models\sicosocial\VsiDinfamPadre;
use App\Models\sicosocial\VsiEducacion;
use App\Models\sicosocial\VsiEstEmocional;
use App\Models\sicosocial\VsiFacProtector;
use App\Models\sicosocial\VsiFacRiesgo;
use App\Models\sicosocial\VsiGenIngreso;
use App\Models\sicosocial\VsiMeta;
use App\Models\sicosocial\VsiPotencialidad;
use App\Models\sicosocial\VsiRedsocActual;
use App\Models\sicosocial\VsiRedSocial;
use App\Models\sicosocial\VsiRedsocPasado;
use App\Models\sicosocial\VsiRelFamiliar;
use App\Models\sicosocial\VsiRelSociale;
use App\Models\sicosocial\VsiSalud;
use App\Models\sicosocial\VsiSitEspecial;
use App\Models\sicosocial\VsiViolencia;
use App\Models\Sistema\AreaUser;
use App\Models\Sistema\ParametroTema;
use App\Models\Sistema\SisActividad;
use App\Models\Sistema\SisActividadProceso;
use App\Models\Sistema\SisBarrio;
use App\Models\Sistema\SisCargo;
use App\Models\Sistema\SisDepartamento;
use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisDepeServ;
use App\Models\Sistema\SisDepeUsua;
use App\Models\Sistema\SisDiaFestivo;
use App\Models\Sistema\SisDiagnosticos;
// use App\Models\Sistema\SisDocumentoFuente;
use App\Models\Sistema\SisEntidad;
use App\Models\Sistema\SisEntidadSalud;
use App\Models\Sistema\SisEslug;
use App\Models\Sistema\SisEsta;
use App\Models\Sistema\SisFsoporte;
use App\Models\Sistema\SisInstitucionEdu;
use App\Models\Sistema\SisLocalidad;
use App\Models\Sistema\SisLocalupz;
use App\Models\Sistema\SisMapaProc;
use App\Models\Sistema\SisMunicipio;
use App\Models\Sistema\SisNnaj;
use App\Models\Sistema\SisObse;
use App\Models\Sistema\SisPai;
use App\Models\Sistema\SisProceso;
use App\Models\Sistema\SisServicio;
use App\Models\Sistema\SisTabla;
use App\Models\Sistema\SisTcampo;
use App\Models\Sistema\SisTitulo;
use App\Models\Sistema\SisUpz;
use App\Models\Sistema\SisUpzbarri;
use App\Models\Tema;
use App\Models\User;
use App\Models\Usuario\SisAreaUsua;
use App\Models\Salud\Mitigacion\Vspa;
use App\Models\Salud\Mitigacion\VspaTabla;
use App\Models\Salud\Mitigacion\VspaTablaCuatro;
use App\Models\Salud\Mitigacion\VspaTablaDos;
use App\Models\Salud\Mitigacion\VspaTablaTres;
use App\Models\Salud\Mitigacion\Vma\MitVma;
use App\Models\Indicadores\Area;
use App\Models\Indicadores\InAccionGestion;
use App\Models\Indicadores\InActsoporte;
use App\Models\Indicadores\InBaseFuente;
use App\Models\Indicadores\InDocIndi;
use App\Models\Indicadores\InDocPregunta;
use App\Models\Indicadores\InFuente;
use App\Models\Indicadores\InIndicador;
use App\Models\Indicadores\InLigru;
use App\Models\Indicadores\InLineaBase;
use App\Models\Indicadores\InLineabaseNnaj;
use App\Models\Indicadores\InPregunta;
use App\Models\Indicadores\InRespu;
use App\Models\Indicadores\InValidacion;
use App\Models\Indicadores\InValoracion;
use App\Models\Sistema\SisDocfuen;
use App\Models\Sistema\SisEnprsa;
use App\Observers\AreaObserver;
use App\Observers\AgActividadObserver;
use App\Observers\AgAsistenteObserver;
use App\Observers\AgContextoObserver;
use App\Observers\AgConvenioObserver;
use App\Observers\AgRecursoObserver;
use App\Observers\AgRelacionObserver;
use App\Observers\AgResponsableObserver;
use App\Observers\AgSubtemaObserver;
use App\Observers\AgTallerAgTemaObserver;
use App\Observers\AgTallerObserver;
use App\Observers\AgTemaObserver;
use App\Observers\AiReporteEvasionObserver;
use App\Observers\AiRetornoSalidaObserver;
use App\Observers\AiSalidaMayoresObserver;
use App\Observers\AiSalidaMenoresObserver;
use App\Observers\AreaUserObserver;
use App\Observers\CsdAlimentacionObserver;
use App\Observers\CsdAlimentCompraObserver;
use App\Observers\CsdAlimentFrecObserver;
use App\Observers\CsdAlimentIngeObserver;
use App\Observers\CsdAlimentPreparaObserver;
use App\Observers\CsdBienvenidaMotivosObserver;
use App\Observers\CsdBienvenidaObserver;
use App\Observers\CsdComFamiliarObservacionesObserver;
use App\Observers\CsdComFamiliarObserver;
use App\Observers\CsdConclusionesObserver;
use App\Observers\CsdDatosBasicoObserver;
use App\Observers\CsdDinfamAntecedenteObserver;
use App\Observers\CsdDinfamEstablecenObserver;
use App\Observers\CsdDinFamiliarObserver;
use App\Observers\CsdDinfamIncumpleObserver;
use App\Observers\CsdDinfamMadreObserver;
use App\Observers\CsdDinfamPadreObserver;
use App\Observers\CsdDinfamProblemaObserver;
use App\Observers\CsdGeningAportaObserver;
use App\Observers\CsdGenIngresoObserver;
use App\Observers\CsdJusticiaObserver;
use App\Observers\CsdNnajEspecialObserver;
use App\Observers\CsdObserver;
use App\Observers\CsdRedSocActualObserver;
use App\Observers\CsdRedSocPasadoObserver;
use App\Observers\CsdResideambienteObserver;
use App\Observers\CsdResidenciaObserver;
use App\Observers\CsdSisNnajObserver;
use App\Observers\CsdViolenciaObserver;
use App\Observers\FiAccioneObserver;
use App\Observers\FiActividadestlObserver;
use App\Observers\FiActividadTiempoLibreObserver;
use App\Observers\FiAutorizacionObserver;
use App\Observers\FiBienvenidaObserver;
use App\Observers\FiCompfamiObserver;
use App\Observers\FiCondicionAmbienteObserver;
use App\Observers\FiConsumoSpaObserver;
use App\Observers\FiContactoObserver;
use App\Observers\FiContviolObserver;
use App\Observers\FiDatosBasicoObserver;
use App\Observers\FiDiasGeneraIngresoObserver;
use App\Observers\FiDiscausaObserver;
use App\Observers\FiDocumentosAnexaObserver;
use App\Observers\FiEnfermedadesFamiliaObserver;
use App\Observers\FiEventosMedicoObserver;
use App\Observers\FiFormacionObserver;
use App\Observers\FiGeneracionIngresoObserver;
use App\Observers\FiJrFamiliarObserver;
use App\Observers\FiJustrestObserver;
use App\Observers\FiLesicomeObserver;
use App\Observers\FiModalidadObserver;
use App\Observers\FiMotivoVinculacionObserver;
use App\Observers\FiProcesoFamiliaObserver;
use App\Observers\FiProcesoPardObserver;
use App\Observers\FiProcesoSpoaObserver;
use App\Observers\FiProcesoSrpaObserver;
use App\Observers\FiRazonContinuaObserver;
use App\Observers\FiRazoneObserver;
use App\Observers\FiRazonIniciadoObserver;
use App\Observers\FiRedApoyoActualObserver;
use App\Observers\FiRedApoyoAntecedenteObserver;
use App\Observers\FiRedesApoyoObserver;
use App\Observers\FiResidenciaObserver;
use App\Observers\FiRiesgoEscnnaObserver;
use App\Observers\FiSacramentoObserver;
use App\Observers\FiSaludObserver;
use App\Observers\FiSituacionEspecialObserver;
use App\Observers\FiSituacionVulneracionObserver;
use App\Observers\FiSustanciaConsumidaObserver;
use App\Observers\FiVestuarioNnajObserver;
use App\Observers\FiVictataqObserver;
use App\Observers\FiVictimaEscnnaObserver;
use App\Observers\FiViolbasaObserver;
use App\Observers\FiViolenciaObserver;
use App\Observers\FosDatosBasicoObserver;
use App\Observers\FosStseObserver;
use App\Observers\FosTseObserver;
use App\Observers\InAccionGestionObserver;
use App\Observers\IsDatosBasicoObserver;
use App\Observers\InActsoporteObserver;
use App\Observers\InBaseFuenteObserver;
use App\Observers\InDocPreguntaObserver;
use App\Observers\InFuenteObserver;
use App\Observers\InIndicadorObserver;
use App\Observers\InLigruObserver;
use App\Observers\InLineaBaseObserver;
use App\Observers\InLineabaseNnajObserver;
use App\Observers\InPreguntaObserver;
use App\Observers\InRespuObserver;
use App\Observers\InValidacionObserver;

use App\Observers\IsProximaAreaAjusteObserver;
use App\Observers\ParametroObserver;
use App\Observers\ParametroTemaObserver;
use App\Observers\PermissionextObserver;
use App\Observers\postObserver;
use App\Observers\RoleextObserver;
use App\Observers\RolUsuarioObserver;
use App\Observers\SisActividadObserver;
use App\Observers\SisActividadProcesoObserver;
use App\Observers\SisAreaUsuaObserver;
use App\Observers\SisBarrioObserver;
use App\Observers\SisCargoObserver;
use App\Observers\SisDepartamentoObserver;
use App\Observers\SisDepenObserver;
use App\Observers\SisDepeServObserver;
use App\Observers\SisDepeUsuaObserver;
use App\Observers\SisDiaFestivoObserver;
use App\Observers\SisDiagnosticosObserver;
use App\Observers\SisDocumentoFuenteObserver;
use App\Observers\SisEntidadObserver;
use App\Observers\SisEntidadSaludObserver;
use App\Observers\SisEslugObserver;
use App\Observers\SisEstaObserver;
use App\Observers\SisFsoporteObserver;
use App\Observers\SisInstitucionEduObserver;
use App\Observers\SisLocalidadObserver;
use App\Observers\SisLocalupzObserver;
use App\Observers\SisMapaProcObserver;
use App\Observers\SisMunicipioObserver;
use App\Observers\SisNnajObserver;
use App\Observers\SisObseObserver;
use App\Observers\SisPaiObserver;
use App\Observers\SisProcesoObserver;
use App\Observers\TemaObserver;
use App\Observers\UserObserver;
use App\Observers\VsiObserver;
use App\Observers\VsiAbuSexualObserver;
use App\Observers\VsiActEmocionalObserver;
use App\Observers\VsiActemoFisiologicaObserver;
use App\Observers\VsiAntecedenteObserver;
use App\Observers\VsiBienvenidaObserver;
use App\Observers\VsiBienvenidaMotivoObserver;
use App\Observers\VsiConcepRedObserver;
use App\Observers\VsiConceptoObserver;
use App\Observers\VsiConsentimientoObserver;
use App\Observers\VsiConsumoExpectativaObserver;
use App\Observers\VsiConsumoObserver;
use App\Observers\VsiConsumoQuienObserver;
use App\Observers\VsiDatosVinculaObserver;
use App\Observers\VsiDinfamAusenciaObserver;
use App\Observers\VsiDinfamCalleObserver;
use App\Observers\VsiDinfamConsumoObserver;
use App\Observers\VsiDinfamCuidadorObserver;
use App\Observers\VsiDinfamDelitoObserver;
use App\Observers\VsiDinFamiliarObserver;
use App\Observers\VsiDinfamLibertadObserver;
use App\Observers\VsiDinfamMadreObserver;
use App\Observers\VsiDinfamPadreObserver;
use App\Observers\VsiDinfamProstitucionObserver;
use App\Observers\VsiDinfamSaludObserver;
use App\Observers\VsiEducacionObserver;
use App\Observers\VsiEduCausaObserver;
use App\Observers\VsiEduDificultadObserver;
use App\Observers\VsiEduDiftipoAObserver;
use App\Observers\VsiEduDiftipoBObserver;
use App\Observers\VsiEduFortalezaObserver;
use App\Observers\VsiEmocionVinculaObserver;
use App\Observers\VsiEstemoAdecuadoObserver;
use App\Observers\VsiEstEmocionalObserver;
use App\Observers\VsiEstemoDificultaObserver;
use App\Observers\VsiEstemoEstresanteObserver;
use App\Observers\VsiEstemoLesivaObserver;
use App\Observers\VsiEstemoMotivoObserver;
use App\Observers\VsiFacProtectorObserver;
use App\Observers\VsiFacRiesgoObserver;
use App\Observers\VsiGeningDiaObserver;
use App\Observers\VsiGeningLaborObserver;
use App\Observers\VsiGeningQuienObserver;
use App\Observers\VsiGenIngresoObserver;
use App\Observers\VsiMetaObserver;
use App\Observers\VsiNnajAcademicaObserver;
use App\Observers\VsiNnajComportamentalObserver;
use App\Observers\VsiNnajEmocionalObserver;
use App\Observers\VsiNnajFamiliarObserver;
use App\Observers\VsiNnajSexualObserver;
use App\Observers\VsiNnajSocialObserver;
use App\Observers\VsiPotencialidadObserver;
use App\Observers\VsiRedsocAcesoObserver;
use App\Observers\VsiRedsocActualObserver;
use App\Observers\VsiRedSocialObserver;
use App\Observers\VsiRedSocMotivoObserver;
use App\Observers\VsiRedsocPasadoObserver;
use App\Observers\VsiRelfamAccioneObserver;
use App\Observers\VsiRelfamDificultadObserver;
use App\Observers\VsiRelFamiliarObserver;
use App\Observers\VsiRelfamMotivoObserver;
use App\Observers\VsiRelSocialeObserver;
use App\Observers\VsiRelSolDificultaObserver;
use App\Observers\VsiRelSolFacilitaObserver;
use App\Observers\VsiSaludObserver;
use App\Observers\VsiSitEspecialObserver;
use App\Observers\VsiSitespRiesgoObserver;
use App\Observers\VsiSitespVictimaObserver;
use App\Observers\VsiSituacionVinculaObserver;
use App\Observers\VsiVioContextoObserver;
use App\Observers\VsiViolenciaObserver;
use App\Observers\VsiVioTipoObserver;
use App\Observers\SisServicioObserver;
use App\Observers\SisTablaObserver;
use App\Observers\SisTcampoObserver;
use App\Observers\SisTituloObserver;
use App\Observers\SisUpzObserver;
use App\Observers\SisUpzbarriObserver;
use App\Observers\VspaObserver;
use App\Observers\VspaTablaObserver;
use App\Observers\VspaTablaCuatroObserver;
use App\Observers\VspaTablaDosObserver;
use App\Observers\VspaTablaTresObserver;
use App\Observers\MitVmaObserver;
use App\Observers\InValoracionObserver;
use App\Observers\InDocIndiObserver;
use App\Observers\SisEnprsaObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(190);


        // SICOSOCIAL
        Vsi::observe(VsiObserver::class);
        VsiAbuSexual::observe(VsiAbuSexualObserver::class);
        VsiActEmocional::observe(VsiActEmocionalObserver::class);
        VsiAntecedente::observe(VsiAntecedenteObserver::class);
        VsiBienvenida::observe(VsiBienvenidaObserver::class);
        VsiConcepto::observe(VsiConceptoObserver::class);
        VsiConsentimiento::observe(VsiConsentimientoObserver::class);
        VsiConsumo::observe(VsiConsumoObserver::class);
        VsiDatosVincula::observe(VsiDatosVinculaObserver::class);
        VsiDinFamiliar::observe(VsiDinFamiliarObserver::class);
        VsiDinfamMadre::observe(VsiDinfamMadreObserver::class);
        VsiDinfamPadre::observe(VsiDinfamPadreObserver::class);
        VsiEducacion::observe(VsiEducacionObserver::class);
        VsiEstEmocional::observe(VsiEstEmocionalObserver::class);
        VsiFacProtector::observe(VsiFacProtectorObserver::class);
        VsiFacRiesgo::observe(VsiFacRiesgoObserver::class);
        VsiGenIngreso::observe(VsiGenIngresoObserver::class);
        VsiMeta::observe(VsiMetaObserver::class);
        VsiPotencialidad::observe(VsiPotencialidadObserver::class);
        VsiRedsocActual::observe(VsiRedsocActualObserver::class);
        VsiRedSocial::observe(VsiRedSocialObserver::class);
        VsiRedsocPasado::observe(VsiRedsocPasadoObserver::class);
        VsiRelFamiliar::observe(VsiRelFamiliarObserver::class);
        VsiRelSociale::observe(VsiRelSocialeObserver::class);
        VsiSalud::observe(VsiSaludObserver::class);
        VsiSitEspecial::observe(VsiSitEspecialObserver::class);
        VsiViolencia::observe(VsiViolenciaObserver::class);

        // SICOSOCIAL - PIVOTES
        VsiActemoFisiologica::observe(VsiActemoFisiologicaObserver::class);
        VsiBienvenidaMotivo::observe(VsiBienvenidaMotivoObserver::class);
        VsiConcepRed::observe(VsiConcepRedObserver::class);
        VsiConsumoExpectativa::observe(VsiConsumoExpectativaObserver::class);
        VsiConsumoQuien::observe(VsiConsumoQuienObserver::class);
        VsiDinfamAusencia::observe(VsiDinfamAusenciaObserver::class);
        VsiDinfamCalle::observe(VsiDinfamCalleObserver::class);
        VsiDinfamConsumo::observe(VsiDinfamConsumoObserver::class);
        VsiDinfamCuidador::observe(VsiDinfamCuidadorObserver::class);
        VsiDinfamDelito::observe(VsiDinfamDelitoObserver::class);
        VsiDinfamLibertad::observe(VsiDinfamLibertadObserver::class);
        VsiDinfamProstitucion::observe(VsiDinfamProstitucionObserver::class);
        VsiDinfamSalud::observe(VsiDinfamSaludObserver::class);
        VsiEduCausa::observe(VsiEduCausaObserver::class);
        VsiEduDificultad::observe(VsiEduDificultadObserver::class);
        VsiEduDiftipoA::observe(VsiEduDiftipoAObserver::class);
        VsiEduDiftipoB::observe(VsiEduDiftipoBObserver::class);
        VsiEduFortaleza::observe(VsiEduFortalezaObserver::class);
        VsiEmocionVincula::observe(VsiEmocionVinculaObserver::class);
        VsiEstemoAdecuado::observe(VsiEstemoAdecuadoObserver::class);
        VsiEstemoDificulta::observe(VsiEstemoDificultaObserver::class);
        VsiEstemoEstresante::observe(VsiEstemoEstresanteObserver::class);
        VsiEstemoLesiva::observe(VsiEstemoLesivaObserver::class);
        VsiEstemoMotivo::observe(VsiEstemoMotivoObserver::class);
        VsiGeningDia::observe(VsiGeningDiaObserver::class);
        VsiGeningLabor::observe(VsiGeningLaborObserver::class);
        VsiGeningQuien::observe(VsiGeningQuienObserver::class);
        VsiNnajAcademica::observe(VsiNnajAcademicaObserver::class);
        VsiNnajComportamental::observe(VsiNnajComportamentalObserver::class);
        VsiNnajEmocional::observe(VsiNnajEmocionalObserver::class);
        VsiNnajFamiliar::observe(VsiNnajFamiliarObserver::class);
        VsiNnajSexual::observe(VsiNnajSexualObserver::class);
        VsiNnajSocial::observe(VsiNnajSocialObserver::class);
        VsiRedsocAceso::observe(VsiRedsocAcesoObserver::class);
        VsiRedsocMotivo::observe(VsiRedSocMotivoObserver::class);
        VsiRelfamAccione::observe(VsiRelfamAccioneObserver::class);
        VsiRelfamDificultad::observe(VsiRelfamDificultadObserver::class);
        VsiRelfamMotivo::observe(VsiRelfamMotivoObserver::class);
        VsiRelsolDificulta::observe(VsiRelSolDificultaObserver::class);
        VsiRelsolFacilita::observe(VsiRelSolFacilitaObserver::class);
        VsiSitespRiesgo::observe(VsiSitespRiesgoObserver::class);
        VsiSitespVictima::observe(VsiSitespVictimaObserver::class);
        VsiSituacionVincula::observe(VsiSituacionVinculaObserver::class);
        VsiVioContexto::observe(VsiVioContextoObserver::class);
        VsiVioTipo::observe(VsiVioTipoObserver::class);

        // ACCIONES GRUPALES
        AgActividad::observe(AgActividadObserver::class);
        AgAsistente::observe(AgAsistenteObserver::class);
        AgContexto::observe(AgContextoObserver::class);
        AgConvenio::observe(AgConvenioObserver::class);
        AgRecurso::observe(AgRecursoObserver::class);
        AgRelacion::observe(AgRelacionObserver::class);
        AgResponsable::observe(AgResponsableObserver::class);
        AgSubtema::observe(AgSubtemaObserver::class);
        AgTaller::observe(AgTallerObserver::class);
        AgTallerAgTema::observe(AgTallerAgTemaObserver::class);
        AgTema::observe(AgTemaObserver::class);

        // ACCIONES INDIVIDUALES
        AiReporteEvasion::observe(AiReporteEvasionObserver::class);
        AiRetornoSalida::observe(AiRetornoSalidaObserver::class);
        AiSalidaMayores::observe(AiSalidaMayoresObserver::class);
        AiSalidaMenores::observe(AiSalidaMenoresObserver::class);

        // CONSULTA
        Csd::observe(CsdObserver::class);
        CsdAlimentacion::observe(CsdAlimentacionObserver::class);
        CsdBienvenida::observe(csdBienvenidaObserver::class);
        CsdComFamiliar::observe(CsdComFamiliarObserver::class);
        CsdComFamiliarObservaciones::observe(CsdComFamiliarObservacionesObserver::class);
        CsdConclusiones::observe(CsdConclusionesObserver::class);
        CsdDatosBasico::observe(CsdDatosBasicoObserver::class);
        CsdDinFamiliar::observe(CsdDinFamiliarObserver::class);
        CsdDinfamMadre::observe(CsdDinfamMadreObserver::class);
        CsdDinfamPadre::observe(CsdDinfamPadreObserver::class);
        CsdGeningAporta::observe(CsdGeningAportaObserver::class);
        CsdGenIngreso::observe(CsdGenIngresoObserver::class);
        CsdJusticia::observe(CsdJusticiaObserver::class);
        CsdRedsocActual::observe(CsdRedSocActualObserver::class);
        CsdRedsocPasado::observe(CsdRedSocPasadoObserver::class);
        CsdResidencia::observe(CsdResidenciaObserver::class);
        CsdViolencia::observe(CsdViolenciaObserver::class);

        // CONSULTA - PIVOTES
        CsdAlimentCompra::observe(CsdAlimentCompraObserver::class);
        CsdAlimentFrec::observe(CsdAlimentFrecObserver::class);
        CsdAlimentInge::observe(CsdAlimentIngeObserver::class);
        CsdAlimentPrepara::observe(CsdAlimentPreparaObserver::class);
        CsdBienvenidaMotivo::observe(CsdBienvenidaMotivosObserver::class);
        CsdDinfamAntecedente::observe(CsdDinfamAntecedenteObserver::class);
        CsdDinfamEstablecen::observe(CsdDinfamEstablecenObserver::class);
        CsdDinfamIncumple::observe(CsdDinfamIncumpleObserver::class);
        CsdDinfamProblema::observe(CsdDinfamProblemaObserver::class);
        CsdNnajEspecial::observe(CsdNnajEspecialObserver::class);
        CsdResideambiente::observe(CsdResideambienteObserver::class);
        CsdSisNnaj::observe(CsdSisNnajObserver::class);

        // INTERVENCION
        IsDatosBasico::observe(IsDatosBasicoObserver::class);
        IsProximaAreaAjuste::observe(IsProximaAreaAjusteObserver::class);

        // FICHA OBSERVACION
        FosDatosBasico::observe(FosDatosBasicoObserver::class);
        FosStse::observe(FosStseObserver::class);
        FosTse::observe(FosTseObserver::class);

        // FICHA INGRESO
        FiActividadestl::observe(FiActividadestlObserver::class);
        FiActividadTiempoLibre::observe(FiActividadTiempoLibreObserver::class);
        FiAutorizacion::observe(FiAutorizacionObserver::class);
        FiBienvenida::observe(FiBienvenidaObserver::class);
        FiCompfami::observe(FiCompfamiObserver::class);
        FiCondicionAmbiente::observe(FiCondicionAmbienteObserver::class);
        FiConsumoSpa::observe(FiConsumoSpaObserver::class);
        FiContacto::observe(FiContactoObserver::class);
        FiDatosBasico::observe(FiDatosBasicoObserver::class);
        FiDiasGeneraIngreso::observe(FiDiasGeneraIngresoObserver::class);
        FiDocumentosAnexa::observe(FiDocumentosAnexaObserver::class);
        FiEnfermedadesFamilia::observe(FiEnfermedadesFamiliaObserver::class);
        FiEventosMedico::observe(FiEventosMedicoObserver::class);
        FiFormacion::observe(FiFormacionObserver::class);
        FiGeneracionIngreso::observe(FiGeneracionIngresoObserver::class);
        FiJrFamiliar::observe(FiJrFamiliarObserver::class);
        FiJustrest::observe(FiJustrestObserver::class);
        FiModalidad::observe(FiModalidadObserver::class);
        FiMotivoVinculacion::observe(FiMotivoVinculacionObserver::class);
        FiProcesoFamilia::observe(FiProcesoFamiliaObserver::class);
        FiProcesoPard::observe(FiProcesoPardObserver::class);
        FiProcesoSpoa::observe(FiProcesoSpoaObserver::class);
        FiProcesoSrpa::observe(FiProcesoSrpaObserver::class);
        FiRazonContinua::observe(FiRazonContinuaObserver::class);
        FiRazone::observe(FiRazoneObserver::class);
        FiRazonIniciado::observe(FiRazonIniciadoObserver::class);
        FiRedApoyoActual::observe(FiRedApoyoActualObserver::class);
        FiRedApoyoAntecedente::observe(FiRedApoyoAntecedenteObserver::class);

        FiResidencia::observe(FiResidenciaObserver::class);
        FiRiesgoEscnna::observe(FiRiesgoEscnnaObserver::class);
        FiSacramento::observe(FiSacramentoObserver::class);
        FiSalud::observe(FiSaludObserver::class);
        FiSituacionEspecial::observe(FiSituacionEspecialObserver::class);
        FiSituacionVulneracion::observe(FiSituacionVulneracionObserver::class);
        FiSustanciaConsumida::observe(FiSustanciaConsumidaObserver::class);
        FiVestuarioNnaj::observe(FiVestuarioNnajObserver::class);
        FiVictimaEscnna::observe(FiVictimaEscnnaObserver::class);
        FiViolencia::observe(FiViolenciaObserver::class);
        FiViolbasa::observe(FiViolbasaObserver::class);
        FiLesicome::observe(FiLesicomeObserver::class);
        FiDiscausa::observe(FiDiscausaObserver::class);
        FiVictataq::observe(FiVictataqObserver::class);
        FiAccione::observe(FiAccioneObserver::class);
        FiContviol::observe(FiContviolObserver::class);
        // USUARIO
        SisAreaUsua::observe(SisAreaUsuaObserver::class);

        // CARPETA RAIZ
        // Parametro::observe(ParametroObserver::class);
        Permissionext::observe(PermissionextObserver::class);
        post::observe(postObserver::class);

        Tema::observe(TemaObserver::class);
        User::observe(UserObserver::class);

        // SISTEMA
        AreaUser::observe(AreaUserObserver::class);
        ParametroTema::observe(ParametroTemaObserver::class);
        SisActividad::observe(SisActividadObserver::class);
        SisActividadProceso::observe(SisActividadProcesoObserver::class);
        SisBarrio::observe(SisBarrioObserver::class);
        SisCargo::observe(SisCargoObserver::class);
        SisDepartamento::observe(SisDepartamentoObserver::class);
        SisDepen::observe(SisDepenObserver::class);
        SisDepeServ::observe(SisDepeServObserver::class);
        SisDepeUsua::observe(SisDepeUsuaObserver::class);
        SisDiaFestivo::observe(SisDiaFestivoObserver::class);
        SisDiagnosticos::observe(SisDiagnosticosObserver::class);
        SisDocfuen::observe(SisDocumentoFuenteObserver::class);
        SisEntidad::observe(SisEntidadObserver::class);
        SisEnprsa::observe(SisEnprsaObserver::class);
        SisEntidadSalud::observe(SisEntidadSaludObserver::class);
        SisEslug::observe(SisEslugObserver::class);
        SisEsta::observe(SisEstaObserver::class);
        SisFsoporte::observe(SisFsoporteObserver::class);
        SisInstitucionEdu::observe(SisInstitucionEduObserver::class);
        SisLocalidad::observe(SisLocalidadObserver::class);
        SisLocalupz::observe(SisLocalupzObserver::class);
        SisMapaProc::observe(SisMapaProcObserver::class);
        SisMunicipio::observe(SisMunicipioObserver::class);
        SisNnaj::observe(SisNnajObserver::class);
        SisObse::observe(SisObseObserver::class);
        SisPai::observe(SisPaiObserver::class);
        SisProceso::observe(SisProcesoObserver::class);
        SisServicio::observe(SisServicioObserver::class);
        SisTabla::observe(SisTablaObserver::class);
        SisTcampo::observe(SisTcampoObserver::class);
        SisTitulo::observe(SisTituloObserver::class);
        SisUpz::observe(SisUpzObserver::class);
        SisUpzbarri::observe(SisUpzbarriObserver::class);

        // SALUD/MITIGACION
        Vspa::observe(VspaObserver::class);
        VspaTabla::observe(VspaTablaObserver::class);
        VspaTablaCuatro::observe(VspaTablaCuatroObserver::class);
        VspaTablaDos::observe(VspaTablaDosObserver::class);
        VspaTablaTres::observe(VspaTablaTresObserver::class);

        MitVma::observe(MitVmaObserver::class);

        // INDICADORES
        Area::observe(AreaObserver::class);
        InAccionGestion::observe(InAccionGestionObserver::class);
        InActsoporte::observe(InActsoporteObserver::class);
        InBaseFuente::observe(InBaseFuenteObserver::class);
        InDocPregunta::observe(InDocPreguntaObserver::class);
        InFuente::observe(InFuenteObserver::class);
        InIndicador::observe(InIndicadorObserver::class);
        InLigru::observe(InLigruObserver::class);
        InLineaBase::observe(InLineaBaseObserver::class);
        InLineabaseNnaj::observe(InLineabaseNnajObserver::class);
        InPregunta::observe(InPreguntaObserver::class);
        InRespu::observe(InRespuObserver::class);
        InValidacion::observe(InValidacionObserver::class);
        InValoracion::observe(InValoracionObserver::class);
        InDocIndi::observe(InDocIndiObserver::class);
    }
}
