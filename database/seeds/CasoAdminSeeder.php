<?php

use Illuminate\Database\Seeder;
use App\Models\Acciones\Individuales\SocialLegal\AsociarCaso;
use App\Models\Acciones\Individuales\SocialLegal\SeguimientoCaso;
use App\Models\Acciones\Individuales\SocialLegal\TemaCaso;
use App\Models\Acciones\Individuales\SocialLegal\TipoCaso;

class CasoAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tipo Caso
        TipoCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ADMINISTRATIVO', 'estusuario_id' => 49]); // 1
        TipoCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'RESTABLECIMIENTO DE DERECHOS', 'estusuario_id' => 49]); // 2
        TipoCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CIVIL', 'estusuario_id' => 49]); // 3
        TipoCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CONSTITUCIONAL', 'estusuario_id' => 49]); // 4
        TipoCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'FAMILIA', 'estusuario_id' => 49]); // 5
        TipoCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'LABORAL', 'estusuario_id' => 49]); // 6
        TipoCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'PENAL MILITAR', 'estusuario_id' => 49]); // 7
        TipoCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'PENAL SPOA', 'estusuario_id' => 49]); // 8
        TipoCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'PENAL SRPA', 'estusuario_id' => 49]); // 9
        //Seguimiento caso
        SeguimientoCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ABIERTO', 'estusuario_id' => 49]); // 1
        SeguimientoCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CERRADO', 'estusuario_id' => 49]); // 2
        //Temacaso
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'NULIDAD Y RESTABLECIMIENTO DE DERECHOS',  'estusuario_id' => 49]); // 1
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'REPARACIÓN DIRECTA',  'estusuario_id' => 49]); // 2
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'TRÁMITES MIGRATORIOS',  'estusuario_id' => 49]); // 3
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CONTRATO PRESTACIÓN DE SERVICIO',  'estusuario_id' => 49]); // 4
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'COMPARENDO TIPO 1',  'estusuario_id' => 49]); // 5
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'COMPARENDO TIPO 2',  'estusuario_id' => 49]); // 6
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'COMPARENDO TIPO 3',  'estusuario_id' => 49]); // 7
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'COMPARENDO TIPO 4',  'estusuario_id' => 49]); // 8
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CONSULTA DE ANTECEDENTES INSTITUCIONALES',  'estusuario_id' => 49]); // 9
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'PUESTOS A DISPOSICIÓN DE LA AUTORIDAD ADMINISTRATIVA',  'estusuario_id' => 49]); // 10
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ASESORÍA CONTRATOS',  'estusuario_id' => 49]); // 11
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'TÍTULOS VALORES',  'estusuario_id' => 49]); // 12
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'SOCIEDADES',  'estusuario_id' => 49]); // 13
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DERECHOS DE AUTOR',  'estusuario_id' => 49]); // 14
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'BIENES MUEBLES',  'estusuario_id' => 49]); // 15
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'BIENES INMUEBLES',  'estusuario_id' => 49]); // 16
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'RESPONSABILIDAD EXTRACONTRACTUAL',  'estusuario_id' => 49]); // 17
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'RESPONSABILIDAD CONTRACTUAL',  'estusuario_id' => 49]); // 18
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'PÓLIZAS',  'estusuario_id' => 49]); // 19
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'POSESIÓN',  'estusuario_id' => 49]); // 20
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CAMBIO O MODIFICACIÓN DE LA IDENTIDAD',  'estusuario_id' => 49]); // 21
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'PRESUNCIÓN DE MUERTE',  'estusuario_id' => 49]); // 22
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ACCIÓN DE TUTELA',  'estusuario_id' => 49]); // 23
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DERECHO DE PETICIÓN',  'estusuario_id' => 49]); // 24
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'INCIDENTE DE DESACATO',  'estusuario_id' => 49]); // 25
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'HABEAS CORPUS',  'estusuario_id' => 49]); // 26
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ACCIÓN DE GRUPO',  'estusuario_id' => 49]); // 27
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ACCIÓN POPULAR',  'estusuario_id' => 49]); // 28
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'HABEAS DATA',  'estusuario_id' => 49]); // 29
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CUSTODIA',  'estusuario_id' => 49]); // 30
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ALIMENTOS',  'estusuario_id' => 49]); // 31
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'REGULACIÓN DE VISITAS',  'estusuario_id' => 49]); // 32
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'FILIACIÓN',  'estusuario_id' => 49]); // 33
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'SUCESIÓN',  'estusuario_id' => 49]); // 34
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DIVORCIO',  'estusuario_id' => 49]); // 35
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'PATRIA POTESTAD',  'estusuario_id' => 49]); // 36
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'LIQUIDACIÓN DE SOCIEDAD CONYUGAL Y/O PATRIMONIAL',  'estusuario_id' => 49]); // 37
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CONSTITUCIÓN DE UNIÓN MARITAL DE HECHO',  'estusuario_id' => 49]); // 38
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'IMPUGNACIÓN DE LA PATERNIDAD-MATERNIDAD',  'estusuario_id' => 49]); // 39
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ADOPCIONES',  'estusuario_id' => 49]); // 40
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'LIQUIDACIONES',  'estusuario_id' => 49]); // 41
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CONTRATO LABORAL',  'estusuario_id' => 49]); // 42
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'SEGURIDAD SOCIAL',  'estusuario_id' => 49]); // 43
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'LESIÓN O ENFERMEDAD DE TRABAJO',  'estusuario_id' => 49]); // 44
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'PENSIONES',  'estusuario_id' => 49]); // 45
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CONFLICTOS EN JUSTICIA PENAL MILITAR',  'estusuario_id' => 49]); // 46
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'HURTO',  'estusuario_id' => 49]); // 47
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'LESIONES PERSONALES',  'estusuario_id' => 49]); // 48
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'PORTE ILEGAL DE ARMAS',  'estusuario_id' => 49]); // 49
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'INASISTENCIA ALIMENTARIA',  'estusuario_id' => 49]); // 50
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'VIOLENCIA INTRAFAMILIAR',  'estusuario_id' => 49]); // 51
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DELITOS SEXUALES',  'estusuario_id' => 49]); // 52
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'HOMICIDIO',  'estusuario_id' => 49]); // 53
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'VIOLENCIA CONTRA SERVIDOR PUBLICO',  'estusuario_id' => 49]); // 54
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DETENCIONES ARBITRARIAS PARA RECLUTAMIENTO',  'estusuario_id' => 49]); // 55
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ABUSO DE AUTORIDAD',  'estusuario_id' => 49]); // 56
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'FALSEDAD EN DOCUMENTO',  'estusuario_id' => 49]); // 57
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'TENTATIVA DE HOMICIDIO',  'estusuario_id' => 49]); // 58
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'AMENAZAS',  'estusuario_id' => 49]); // 59
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'TRÁFICO, PORTE O DISTRIBUCIÓN DE ESTUPEFACIENTES',  'estusuario_id' => 49]); // 60
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ESTAFA',  'estusuario_id' => 49]); // 61
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'EXTORSIÓN',  'estusuario_id' => 49]); // 62
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CONCIERTO PARA DELINQUIR',  'estusuario_id' => 49]); // 63
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'INJURIA Y CALUMNIA',  'estusuario_id' => 49]); // 64
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ABUSO DE CONFIANZA',  'estusuario_id' => 49]); // 65
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DESAPARICIÓN FORZADA',  'estusuario_id' => 49]); // 66
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DAÑO EN BIEN AJENO',  'estusuario_id' => 49]); // 67
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'TERRORISMO',  'estusuario_id' => 49]); // 68
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'FALSIFICACIÓN DE SELLOS, EFECTOS OFICIALES Y MARCAS',  'estusuario_id' => 49]); // 69
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'FALSIFICACIÓN DE MONEDA',  'estusuario_id' => 49]); // 70
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'FALSEDAD PERSONAL',  'estusuario_id' => 49]); // 71
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'USURA',  'estusuario_id' => 49]); // 72
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CONTRABANDO',  'estusuario_id' => 49]); // 73
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'PERTURBACIÓN EN SERVICIO DE TRANSPORTE COLECTIVO U OFICIAL',  'estusuario_id' => 49]); // 74
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'TENENCIA, FABRICACIÓN Y TRÁFICO DE SUSTANCIAS U OBJETOS PELIGROSOS',  'estusuario_id' => 49]); // 75
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'FALSA DENUNCIA',  'estusuario_id' => 49]); // 76
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'FALSO TESTIMONIO',  'estusuario_id' => 49]); // 77
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'FUGA DE PRESOS',  'estusuario_id' => 49]); // 78
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ASONADA',  'estusuario_id' => 49]); // 79
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'TENTATIVA DE FEMINICIDIO',  'estusuario_id' => 49]); // 80
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'FEMINICIDIO',  'estusuario_id' => 49]); // 81
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'SECUESTRO',  'estusuario_id' => 49]); // 82
        TemaCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DETENCIONES ARBITRARIAS CON FINES DE RECLUTAMIENTO',  'estusuario_id' => 49]); // 83

        //asociarcaso
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 1, 'tema_id' => 1, 'segui_id' => 1,]); // 2
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 1, 'tema_id' => 2, 'segui_id' => 1,]); // 2
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 1, 'tema_id' => 3, 'segui_id' => 1,]); // 3
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 1, 'tema_id' => 4, 'segui_id' => 1,]); // 4
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 1, 'tema_id' => 5, 'segui_id' => 1,]); // 5
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 1, 'tema_id' => 6, 'segui_id' => 1,]); // 6
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 1, 'tema_id' => 7, 'segui_id' => 1,]); // 7
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 1, 'tema_id' => 8, 'segui_id' => 1,]); // 8
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 2, 'tema_id' => 9, 'segui_id' => 1,]); // 9
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 2, 'tema_id' => 10, 'segui_id' => 1,]); // 10
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 3, 'tema_id' => 11, 'segui_id' => 1,]); // 11
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 3, 'tema_id' => 12, 'segui_id' => 1,]); // 12
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 3, 'tema_id' => 13, 'segui_id' => 1,]); // 13
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 3, 'tema_id' => 14, 'segui_id' => 1,]); // 14
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 3, 'tema_id' => 15, 'segui_id' => 1,]); // 15
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 3, 'tema_id' => 16, 'segui_id' => 1,]); // 16
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 3, 'tema_id' => 17, 'segui_id' => 1,]); // 17
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 3, 'tema_id' => 18, 'segui_id' => 1,]); // 18
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 3, 'tema_id' => 19, 'segui_id' => 1,]); // 19
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 3, 'tema_id' => 20, 'segui_id' => 1,]); // 20
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 3, 'tema_id' => 21, 'segui_id' => 1,]); // 21
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 3, 'tema_id' => 22, 'segui_id' => 1,]); // 22
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 4, 'tema_id' => 23, 'segui_id' => 1,]); // 23
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 4, 'tema_id' => 24, 'segui_id' => 1,]); // 24
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 4, 'tema_id' => 25, 'segui_id' => 1,]); // 25
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 4, 'tema_id' => 26, 'segui_id' => 1,]); // 26
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 4, 'tema_id' => 27, 'segui_id' => 1,]); // 27
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 4, 'tema_id' => 28, 'segui_id' => 1,]); // 28
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 4, 'tema_id' => 29, 'segui_id' => 1,]); // 29
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 5, 'tema_id' => 30, 'segui_id' => 1,]); // 30
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 5, 'tema_id' => 31, 'segui_id' => 1,]); // 31
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 5, 'tema_id' => 32, 'segui_id' => 1,]); // 32
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 5, 'tema_id' => 33, 'segui_id' => 1,]); // 33
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 5, 'tema_id' => 34, 'segui_id' => 1,]); // 34
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 5, 'tema_id' => 35, 'segui_id' => 1,]); // 35
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 5, 'tema_id' => 36, 'segui_id' => 1,]); // 36
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 5, 'tema_id' => 37, 'segui_id' => 1,]); // 37
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 5, 'tema_id' => 38, 'segui_id' => 1,]); // 38
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 5, 'tema_id' => 39, 'segui_id' => 1,]); // 39
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 5, 'tema_id' => 40, 'segui_id' => 1,]); // 40
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 6, 'tema_id' => 41, 'segui_id' => 1,]); // 41
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 6, 'tema_id' => 42, 'segui_id' => 1,]); // 42
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 6, 'tema_id' => 43, 'segui_id' => 1,]); // 43
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 6, 'tema_id' => 44, 'segui_id' => 1,]); // 44
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 6, 'tema_id' => 45, 'segui_id' => 1,]); // 45
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 7, 'tema_id' => 46, 'segui_id' => 1,]); // 46
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 47, 'segui_id' => 1,]); // 47
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 48, 'segui_id' => 1,]); // 48
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 49, 'segui_id' => 1,]); // 49
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 50, 'segui_id' => 1,]); // 50
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 51, 'segui_id' => 1,]); // 51
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 52, 'segui_id' => 1,]); // 52
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 53, 'segui_id' => 1,]); // 53
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 54, 'segui_id' => 1,]); // 54
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 55, 'segui_id' => 1,]); // 55
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 56, 'segui_id' => 1,]); // 56
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 57, 'segui_id' => 1,]); // 57
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 58, 'segui_id' => 1,]); // 58
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 59, 'segui_id' => 1,]); // 59
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 60, 'segui_id' => 1,]); // 60
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 61, 'segui_id' => 1,]); // 61
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 62, 'segui_id' => 1,]); // 62
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 63, 'segui_id' => 1,]); // 63
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 64, 'segui_id' => 1,]); // 64
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 65, 'segui_id' => 1,]); // 65
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 66, 'segui_id' => 1,]); // 66
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 67, 'segui_id' => 1,]); // 67
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 68, 'segui_id' => 1,]); // 68
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 69, 'segui_id' => 1,]); // 69
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 70, 'segui_id' => 1,]); // 70
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 71, 'segui_id' => 1,]); // 71
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 72, 'segui_id' => 1,]); // 72
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 73, 'segui_id' => 1,]); // 73
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 74, 'segui_id' => 1,]); // 74
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 75, 'segui_id' => 1,]); // 75
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 76, 'segui_id' => 1,]); // 76
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 77, 'segui_id' => 1,]); // 77
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 78, 'segui_id' => 1,]); // 78
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 79, 'segui_id' => 1,]); // 79
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 80, 'segui_id' => 1,]); // 80
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 81, 'segui_id' => 1,]); // 81
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 8, 'tema_id' => 82, 'segui_id' => 1,]); // 82
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 47, 'segui_id' => 1,]); // 83

        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 48, 'segui_id' => 1, ]); // 84
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 49, 'segui_id' => 1, ]); // 85
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 51, 'segui_id' => 1, ]); // 86
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 52, 'segui_id' => 1, ]); // 87
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 53, 'segui_id' => 1, ]); // 88
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 54, 'segui_id' => 1, ]); // 89
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 83, 'segui_id' => 1, ]); // 90
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 56, 'segui_id' => 1, ]); // 91
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 58, 'segui_id' => 1, ]); // 92
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 59, 'segui_id' => 1, ]); // 93
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 60, 'segui_id' => 1, ]); // 94
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 62, 'segui_id' => 1, ]); // 95
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 63, 'segui_id' => 1, ]); // 96
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 64, 'segui_id' => 1, ]); // 97
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 65, 'segui_id' => 1, ]); // 98
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 66, 'segui_id' => 1, ]); // 99
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 67, 'segui_id' => 1, ]); // 100
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 68, 'segui_id' => 1, ]); // 101
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 69, 'segui_id' => 1, ]); // 102
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 70, 'segui_id' => 1, ]); // 103
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 71, 'segui_id' => 1, ]); // 104
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 72, 'segui_id' => 1, ]); // 105
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 73, 'segui_id' => 1, ]); // 106
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 74, 'segui_id' => 1, ]); // 107
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 75, 'segui_id' => 1, ]); // 108
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 76, 'segui_id' => 1, ]); // 109
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 77, 'segui_id' => 1, ]); // 110
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 78, 'segui_id' => 1, ]); // 111
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 79, 'segui_id' => 1, ]); // 112
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 82, 'segui_id' => 1, ]); // 113
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 57, 'segui_id' => 1, ]); // 114
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 80, 'segui_id' => 1, ]); // 115
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 81, 'segui_id' => 1, ]); // 116
        AsociarCaso::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'tipo_id' => 9, 'tema_id' => 61, 'segui_id' => 1, ]); // 117







    }
}
