<?php

use App\Models\fichaobservacion\FosTse;
use Illuminate\Database\Seeder;

class FosTsesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FosTse::create(['id' => 1, 'nombre' => 'ATENCIÓN', 'fos_area_id' => 1, 'descripcion' => 'ATENCIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //1
        FosTse::create(['id' => 2, 'nombre' => 'COMPROMISOS', 'fos_area_id' => 1, 'descripcion' => 'COMPROMISOS', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //2
        FosTse::create(['id' => 3, 'nombre' => 'DX', 'fos_area_id' => 1, 'descripcion' => 'DX', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //3
        FosTse::create(['id' => 4, 'nombre' => 'DX-TRANS', 'fos_area_id' => 1, 'descripcion' => 'DX-TRANS', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //4
        FosTse::create(['id' => 5, 'nombre' => 'INDUCCIÓN', 'fos_area_id' => 1, 'descripcion' => 'INDUCCIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //5
        FosTse::create(['id' => 6, 'nombre' => 'MÓDULOS COMP. TRANS:', 'fos_area_id' => 1, 'descripcion' => 'MÓDULOS COMP. TRANS:', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //6
        FosTse::create(['id' => 7, 'nombre' => 'NIVELACIÓN', 'fos_area_id' => 1, 'descripcion' => 'NIVELACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //7
        FosTse::create(['id' => 8, 'nombre' => 'REFUERZO', 'fos_area_id' => 1, 'descripcion' => 'REFUERZO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //8
        FosTse::create(['id' => 9, 'nombre' => 'RESULTADO OBTENIDO', 'fos_area_id' => 1, 'descripcion' => 'RESULTADO OBTENIDO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //9
        FosTse::create(['id' => 10, 'nombre' => 'RESULTADO OBTENIDO LG', 'fos_area_id' => 1, 'descripcion' => 'RESULTADO OBTENIDO LG', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //10
        FosTse::create(['id' => 11, 'nombre' => 'RESULTADO OBTENIDO MT', 'fos_area_id' => 1, 'descripcion' => 'RESULTADO OBTENIDO MT', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //11
        FosTse::create(['id' => 12, 'nombre' => 'SEGUIMIENTO', 'fos_area_id' => 1, 'descripcion' => 'SEGUIMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //12
        FosTse::create(['id' => 13, 'nombre' => 'SG-LG/GRA10', 'fos_area_id' => 1, 'descripcion' => 'SG-LG/GRA10', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //13
        FosTse::create(['id' => 14, 'nombre' => 'SG-LG/GRA11', 'fos_area_id' => 1, 'descripcion' => 'SG-LG/GRA11', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //14
        FosTse::create(['id' => 15, 'nombre' => 'SG-LG/GRA5', 'fos_area_id' => 1, 'descripcion' => 'SG-LG/GRA5', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //15
        FosTse::create(['id' => 16, 'nombre' => 'SG-LG/GRA6', 'fos_area_id' => 1, 'descripcion' => 'SG-LG/GRA6', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //16
        FosTse::create(['id' => 17, 'nombre' => 'SG-LG/GRA7', 'fos_area_id' => 1, 'descripcion' => 'SG-LG/GRA7', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //17
        FosTse::create(['id' => 18, 'nombre' => 'SG-LG/GRA8', 'fos_area_id' => 1, 'descripcion' => 'SG-LG/GRA8', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //18
        FosTse::create(['id' => 19, 'nombre' => 'SG-MT/GRA10', 'fos_area_id' => 1, 'descripcion' => 'SG-MT/GRA10', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //19
        FosTse::create(['id' => 20, 'nombre' => 'SG-MT/GRA11', 'fos_area_id' => 1, 'descripcion' => 'SG-MT/GRA11', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //20
        FosTse::create(['id' => 21, 'nombre' => 'SG-MT/GRA5', 'fos_area_id' => 1, 'descripcion' => 'SG-MT/GRA5', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //21
        FosTse::create(['id' => 22, 'nombre' => 'SG-MT/GRA6', 'fos_area_id' => 1, 'descripcion' => 'SG-MT/GRA6', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //22
        FosTse::create(['id' => 23, 'nombre' => 'SG-MT/GRA7', 'fos_area_id' => 1, 'descripcion' => 'SG-MT/GRA7', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //23
        FosTse::create(['id' => 24, 'nombre' => 'SG-MT/GRA8', 'fos_area_id' => 1, 'descripcion' => 'SG-MT/GRA8', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //24
        FosTse::create(['id' => 25, 'nombre' => 'SG-MT/GRA9', 'fos_area_id' => 1, 'descripcion' => 'SG-MT/GRA9', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //25
        FosTse::create(['id' => 26, 'nombre' => 'VALORACIÓN', 'fos_area_id' => 1, 'descripcion' => 'VALORACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //26
        FosTse::create(['id' => 27, 'nombre' => 'ACOMPAÑAMIENTO', 'fos_area_id' => 2, 'descripcion' => 'ACOMPAÑAMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //27
        FosTse::create(['id' => 28, 'nombre' => 'ACTIVACIÓN DE REDES INTERINSTITUCIONALES', 'fos_area_id' => 2, 'descripcion' => 'ACTIVACIÓN DE REDES INTERINSTITUCIONALES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //28
        FosTse::create(['id' => 29, 'nombre' => 'ATENCIÓN', 'fos_area_id' => 2, 'descripcion' => 'ATENCIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //29
        FosTse::create(['id' => 30, 'nombre' => 'ATENCIÓN INICIAL', 'fos_area_id' => 2, 'descripcion' => 'ATENCIÓN INICIAL', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //30
        FosTse::create(['id' => 31, 'nombre' => 'CAPACITACIÓN', 'fos_area_id' => 2, 'descripcion' => 'CAPACITACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //31
        FosTse::create(['id' => 32, 'nombre' => 'CONTRATADOS', 'fos_area_id' => 2, 'descripcion' => 'CONTRATADOS', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //32
        FosTse::create(['id' => 33, 'nombre' => 'EMPRENDER', 'fos_area_id' => 2, 'descripcion' => 'EMPRENDER', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //33
        FosTse::create(['id' => 34, 'nombre' => 'INICIA PROCESO DE FORMACIÓN', 'fos_area_id' => 2, 'descripcion' => 'INICIA PROCESO DE FORMACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //34
        FosTse::create(['id' => 35, 'nombre' => 'POSTULADOS', 'fos_area_id' => 2, 'descripcion' => 'POSTULADOS', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //35
        FosTse::create(['id' => 36, 'nombre' => 'PROYECTO PRODUCTIVO', 'fos_area_id' => 2, 'descripcion' => 'PROYECTO PRODUCTIVO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //36
        FosTse::create(['id' => 37, 'nombre' => 'RESULTADO OBTENIDO LG', 'fos_area_id' => 2, 'descripcion' => 'RESULTADO OBTENIDO LG', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //37
        FosTse::create(['id' => 38, 'nombre' => 'SEGUIMIENTO LLAMADA TELEFONICA', 'fos_area_id' => 2, 'descripcion' => 'SEGUIMIENTO LLAMADA TELEFONICA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //38
        FosTse::create(['id' => 39, 'nombre' => 'TERMINA PROCESO DE FORMACIÓN', 'fos_area_id' => 2, 'descripcion' => 'TERMINA PROCESO DE FORMACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //39
        FosTse::create(['id' => 40, 'nombre' => 'AC', 'fos_area_id' => 3, 'descripcion' => 'AC', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //40
        FosTse::create(['id' => 41, 'nombre' => 'ACCIÓN', 'fos_area_id' => 3, 'descripcion' => 'ACCIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //41
        FosTse::create(['id' => 42, 'nombre' => 'ACOMPAÑAMIENTO', 'fos_area_id' => 3, 'descripcion' => 'ACOMPAÑAMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //42
        FosTse::create(['id' => 43, 'nombre' => 'ATENCIÓN', 'fos_area_id' => 3, 'descripcion' => 'ATENCIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //43
        FosTse::create(['id' => 44, 'nombre' => 'CAPACITACIÓN', 'fos_area_id' => 3, 'descripcion' => 'CAPACITACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //44
        FosTse::create(['id' => 45, 'nombre' => 'COMITÉ', 'fos_area_id' => 3, 'descripcion' => 'COMITÉ', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //45
        FosTse::create(['id' => 46, 'nombre' => 'CONTINUIDAD', 'fos_area_id' => 3, 'descripcion' => 'CONTINUIDAD', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //46
        FosTse::create(['id' => 47, 'nombre' => 'CULMINACIÓN', 'fos_area_id' => 3, 'descripcion' => 'CULMINACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //47
        FosTse::create(['id' => 48, 'nombre' => 'DESVINCULACIÓN', 'fos_area_id' => 3, 'descripcion' => 'DESVINCULACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //48
        FosTse::create(['id' => 49, 'nombre' => 'DEVOLUCIÓN', 'fos_area_id' => 3, 'descripcion' => 'DEVOLUCIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //49
        FosTse::create(['id' => 50, 'nombre' => 'DIRECCIONAMIENTO', 'fos_area_id' => 3, 'descripcion' => 'DIRECCIONAMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //50
        FosTse::create(['id' => 51, 'nombre' => 'EGRESO', 'fos_area_id' => 3, 'descripcion' => 'EGRESO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //51
        FosTse::create(['id' => 52, 'nombre' => 'ENTREGA', 'fos_area_id' => 3, 'descripcion' => 'ENTREGA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //52
        FosTse::create(['id' => 53, 'nombre' => 'EVALUACIÓN', 'fos_area_id' => 3, 'descripcion' => 'EVALUACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //53
        FosTse::create(['id' => 54, 'nombre' => 'FINALIZACIÓN', 'fos_area_id' => 3, 'descripcion' => 'FINALIZACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //54
        FosTse::create(['id' => 55, 'nombre' => 'FIRMA', 'fos_area_id' => 3, 'descripcion' => 'FIRMA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //55
        FosTse::create(['id' => 56, 'nombre' => 'ORIENTACIÓN', 'fos_area_id' => 3, 'descripcion' => 'ORIENTACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //56
        FosTse::create(['id' => 57, 'nombre' => 'RECONOCIMIENTO', 'fos_area_id' => 3, 'descripcion' => 'RECONOCIMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //57
        FosTse::create(['id' => 58, 'nombre' => 'RESULTADO', 'fos_area_id' => 3, 'descripcion' => 'RESULTADO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //58
        FosTse::create(['id' => 59, 'nombre' => 'SEGUIMIENTO', 'fos_area_id' => 3, 'descripcion' => 'SEGUIMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //59
        FosTse::create(['id' => 60, 'nombre' => 'VALORACIÓN', 'fos_area_id' => 3, 'descripcion' => 'VALORACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //60
        FosTse::create(['id' => 61, 'nombre' => 'VERIFICACIÓN', 'fos_area_id' => 3, 'descripcion' => 'VERIFICACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //61
        FosTse::create(['id' => 62, 'nombre' => 'VINCULACION', 'fos_area_id' => 3, 'descripcion' => 'VINCULACION', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //62
        FosTse::create(['id' => 63, 'nombre' => 'ESPIRITUALIDAD', 'fos_area_id' => 4, 'descripcion' => 'ESPIRITUALIDAD', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //63
        FosTse::create(['id' => 64, 'nombre' => 'REMISION', 'fos_area_id' => 4, 'descripcion' => 'REMISION', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //64
        FosTse::create(['id' => 65, 'nombre' => 'FONOAUDIOLOGIA', 'fos_area_id' => 5, 'descripcion' => 'FONOAUDIOLOGIA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //65
        FosTse::create(['id' => 66, 'nombre' => 'MITIGACION', 'fos_area_id' => 5, 'descripcion' => 'MITIGACION', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //66
        FosTse::create(['id' => 67, 'nombre' => 'SEGUIMIENTO', 'fos_area_id' => 5, 'descripcion' => 'SEGUIMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //67
        FosTse::create(['id' => 68, 'nombre' => 'VALORACIÓN Y/O SEGUIMIENTO', 'fos_area_id' => 5, 'descripcion' => 'VALORACIÓN Y/O SEGUIMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //68
        FosTse::create(['id' => 69, 'nombre' => 'ACERCAMIENTO', 'fos_area_id' => 6, 'descripcion' => 'ACERCAMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //69
        FosTse::create(['id' => 70, 'nombre' => 'ACOMPAÑAM. Y/O GESTIONES', 'fos_area_id' => 6, 'descripcion' => 'ACOMPAÑAM. Y/O GESTIONES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //70
        FosTse::create(['id' => 71, 'nombre' => 'ACOMPAÑAMIENTO', 'fos_area_id' => 6, 'descripcion' => 'ACOMPAÑAMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //71
        FosTse::create(['id' => 72, 'nombre' => 'ACOMPAÑAMIENTO INTER', 'fos_area_id' => 6, 'descripcion' => 'ACOMPAÑAMIENTO INTER', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //72
        FosTse::create(['id' => 73, 'nombre' => 'ACOMPAÑAMIENTO INTRA', 'fos_area_id' => 6, 'descripcion' => 'ACOMPAÑAMIENTO INTRA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //73
        FosTse::create(['id' => 74, 'nombre' => 'ACOMPAÑAMIENTO PSICOSOCIAL Y/O JURIDICO', 'fos_area_id' => 6, 'descripcion' => 'ACOMPAÑAMIENTO PSICOSOCIAL Y/O JURIDICO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //74
        FosTse::create(['id' => 75, 'nombre' => 'ACTIVACIÓN DE REDES', 'fos_area_id' => 6, 'descripcion' => 'ACTIVACIÓN DE REDES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //75
        FosTse::create(['id' => 76, 'nombre' => 'ACTIVACIÓN DE REDES INTERINSTITUCIONALES', 'fos_area_id' => 6, 'descripcion' => 'ACTIVACIÓN DE REDES INTERINSTITUCIONALES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //76
        FosTse::create(['id' => 77, 'nombre' => 'ACTIVACIÓN DE REDES INTRAINSTITUCIONALES', 'fos_area_id' => 6, 'descripcion' => 'ACTIVACIÓN DE REDES INTRAINSTITUCIONALES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //77
        FosTse::create(['id' => 78, 'nombre' => 'ACTIVACIÓN Y/O GESTIÓN', 'fos_area_id' => 6, 'descripcion' => 'ACTIVACIÓN Y/O GESTIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //78
        FosTse::create(['id' => 79, 'nombre' => 'ATENCIÓN O SEGUIMIENTO PSICOSOCIAL', 'fos_area_id' => 6, 'descripcion' => 'ATENCIÓN O SEGUIMIENTO PSICOSOCIAL', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //79
        FosTse::create(['id' => 80, 'nombre' => 'ATENCIÓN O SEGUIMIENTO TRABAJO SOCIAL', 'fos_area_id' => 6, 'descripcion' => 'ATENCIÓN O SEGUIMIENTO TRABAJO SOCIAL', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //80
        FosTse::create(['id' => 81, 'nombre' => 'ATENCIÓN PSICOSOCIAL', 'fos_area_id' => 6, 'descripcion' => 'ATENCIÓN PSICOSOCIAL', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //81
        FosTse::create(['id' => 82, 'nombre' => 'ATENCIÓN Y ORIENTACIÓN PSICOSOCIAL Y/O JURIDICA', 'fos_area_id' => 6, 'descripcion' => 'ATENCIÓN Y ORIENTACIÓN PSICOSOCIAL Y/O JURIDICA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //82
        FosTse::create(['id' => 83, 'nombre' => 'ATENCIONES Y ACCIONES DE TRABAJO SOCIAL', 'fos_area_id' => 6, 'descripcion' => 'ATENCIONES Y ACCIONES DE TRABAJO SOCIAL', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //83
        FosTse::create(['id' => 84, 'nombre' => 'ATENCIONES Y ACCIONES PSICOLÓGICAS', 'fos_area_id' => 6, 'descripcion' => 'ATENCIONES Y ACCIONES PSICOLÓGICAS', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //84
        FosTse::create(['id' => 85, 'nombre' => 'BIENVENIDA', 'fos_area_id' => 6, 'descripcion' => 'BIENVENIDA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //85
        FosTse::create(['id' => 86, 'nombre' => 'CIERRE DE CASO', 'fos_area_id' => 6, 'descripcion' => 'CIERRE DE CASO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //86
        FosTse::create(['id' => 87, 'nombre' => 'CIERRE DE PRÁCTICA', 'fos_area_id' => 6, 'descripcion' => 'CIERRE DE PRÁCTICA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //87
        FosTse::create(['id' => 88, 'nombre' => 'COMITÉ', 'fos_area_id' => 6, 'descripcion' => 'COMITÉ', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //88
        FosTse::create(['id' => 89, 'nombre' => 'COMITÉ TÉC. CONTINUIDAD', 'fos_area_id' => 6, 'descripcion' => 'COMITÉ TÉC. CONTINUIDAD', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //89
        FosTse::create(['id' => 90, 'nombre' => 'COMITÉ TÉCNICO ICBF', 'fos_area_id' => 6, 'descripcion' => 'COMITÉ TÉCNICO ICBF', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //90
        FosTse::create(['id' => 91, 'nombre' => 'CONFIRMACIÓN', 'fos_area_id' => 6, 'descripcion' => 'CONFIRMACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //91
        FosTse::create(['id' => 92, 'nombre' => 'CONTACTO TELEFÓNICO', 'fos_area_id' => 6, 'descripcion' => 'CONTACTO TELEFÓNICO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //92
        FosTse::create(['id' => 93, 'nombre' => 'CORREO ELECTRONICO', 'fos_area_id' => 6, 'descripcion' => 'CORREO ELECTRONICO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //93
        FosTse::create(['id' => 94, 'nombre' => 'CREACIÓN', 'fos_area_id' => 6, 'descripcion' => 'CREACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //94
        FosTse::create(['id' => 95, 'nombre' => 'EJERCICIO', 'fos_area_id' => 6, 'descripcion' => 'EJERCICIO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //95
        FosTse::create(['id' => 96, 'nombre' => 'ENCUENTRO', 'fos_area_id' => 6, 'descripcion' => 'ENCUENTRO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //96
        FosTse::create(['id' => 97, 'nombre' => 'GESTIÓN', 'fos_area_id' => 6, 'descripcion' => 'GESTIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //97
        FosTse::create(['id' => 98, 'nombre' => 'GESTIÓN R. INTERINSTITUCIONALES', 'fos_area_id' => 6, 'descripcion' => 'GESTIÓN R. INTERINSTITUCIONALES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //98
        FosTse::create(['id' => 99, 'nombre' => 'GESTIÓN INTER', 'fos_area_id' => 6, 'descripcion' => 'GESTIÓN INTER', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //99
        FosTse::create(['id' => 100, 'nombre' => 'GESTIÓN INTRA', 'fos_area_id' => 6, 'descripcion' => 'GESTIÓN INTRA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //100
        FosTse::create(['id' => 101, 'nombre' => 'GESTIÓN R. INTERINSTITUCIONALES', 'fos_area_id' => 6, 'descripcion' => 'GESTIÓN R. INTERINSTITUCIONALES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //101
        FosTse::create(['id' => 102, 'nombre' => 'GESTIÓN REDES', 'fos_area_id' => 6, 'descripcion' => 'GESTIÓN REDES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //102
        FosTse::create(['id' => 103, 'nombre' => 'GESTIÓN REDES INTER', 'fos_area_id' => 6, 'descripcion' => 'GESTIÓN REDES INTER', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //103
        FosTse::create(['id' => 104, 'nombre' => 'GESTIONES', 'fos_area_id' => 6, 'descripcion' => 'GESTIONES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //104
        FosTse::create(['id' => 105, 'nombre' => 'INFORME', 'fos_area_id' => 6, 'descripcion' => 'INFORME', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //105
        FosTse::create(['id' => 106, 'nombre' => 'LLAMADA', 'fos_area_id' => 6, 'descripcion' => 'LLAMADA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //106
        FosTse::create(['id' => 107, 'nombre' => 'NO CONSUME SPA', 'fos_area_id' => 6, 'descripcion' => 'NO CONSUME SPA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //107
        FosTse::create(['id' => 108, 'nombre' => 'NOVEDAD', 'fos_area_id' => 6, 'descripcion' => 'NOVEDAD', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //108
        FosTse::create(['id' => 109, 'nombre' => 'ORIENTACIÓN', 'fos_area_id' => 6, 'descripcion' => 'ORIENTACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //109
        FosTse::create(['id' => 110, 'nombre' => 'POSTULACION', 'fos_area_id' => 6, 'descripcion' => 'POSTULACION', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //110
        FosTse::create(['id' => 111, 'nombre' => 'PRESENTACIÓN', 'fos_area_id' => 6, 'descripcion' => 'PRESENTACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //111
        FosTse::create(['id' => 112, 'nombre' => 'PROCESO', 'fos_area_id' => 6, 'descripcion' => 'PROCESO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //112
        FosTse::create(['id' => 113, 'nombre' => 'REMISIONES', 'fos_area_id' => 6, 'descripcion' => 'REMISIONES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //113
        FosTse::create(['id' => 114, 'nombre' => 'REPORTE', 'fos_area_id' => 6, 'descripcion' => 'REPORTE', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //114
        FosTse::create(['id' => 115, 'nombre' => 'SALIDAS Y PERMISOS', 'fos_area_id' => 6, 'descripcion' => 'SALIDAS Y PERMISOS', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //115
        FosTse::create(['id' => 116, 'nombre' => 'SEGUIMIENTO', 'fos_area_id' => 6, 'descripcion' => 'SEGUIMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //116
        FosTse::create(['id' => 117, 'nombre' => 'SOLICITUD', 'fos_area_id' => 6, 'descripcion' => 'SOLICITUD', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //117
        FosTse::create(['id' => 118, 'nombre' => 'VALORACIÓN', 'fos_area_id' => 6, 'descripcion' => 'VALORACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //118
        FosTse::create(['id' => 119, 'nombre' => 'VERIFICACIÓN', 'fos_area_id' => 6, 'descripcion' => 'VERIFICACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //119
        FosTse::create(['id' => 120, 'nombre' => 'ACERCAMIENTO', 'fos_area_id' => 7, 'descripcion' => 'ACERCAMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //120
        FosTse::create(['id' => 121, 'nombre' => 'ACOMPAÑA. PSICOSOCIAL Y/O JURIDICO', 'fos_area_id' => 7, 'descripcion' => 'ACOMPAÑA. PSICOSOCIAL Y/O JURIDICO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //121
        FosTse::create(['id' => 122, 'nombre' => 'ACOMPAÑAMIENTO PSICOSOCIAL Y JURIDICO', 'fos_area_id' => 7, 'descripcion' => 'ACOMPAÑAMIENTO PSICOSOCIAL Y JURIDICO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //122
        FosTse::create(['id' => 123, 'nombre' => 'ACTIVACIÓN DE REDES', 'fos_area_id' => 7, 'descripcion' => 'ACTIVACIÓN DE REDES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //123
        FosTse::create(['id' => 124, 'nombre' => 'ACTIVACIÓN DE REDES INTERINSTITUCIONALES', 'fos_area_id' => 7, 'descripcion' => 'ACTIVACIÓN DE REDES INTERINSTITUCIONALES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //124
        FosTse::create(['id' => 125, 'nombre' => 'ACTIVACIÓN DE REDES INTRAINSTITUCIONALES', 'fos_area_id' => 7, 'descripcion' => 'ACTIVACIÓN DE REDES INTRAINSTITUCIONALES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //125
        FosTse::create(['id' => 126, 'nombre' => 'ACTIVACIÓN Y/O GESTIÓN', 'fos_area_id' => 7, 'descripcion' => 'ACTIVACIÓN Y/O GESTIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //126
        FosTse::create(['id' => 127, 'nombre' => 'ATEN Y ORIENTA PSICOSOCIAL Y/O JURIDICA', 'fos_area_id' => 7, 'descripcion' => 'ATEN Y ORIENTA PSICOSOCIAL Y/O JURIDICA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //127
        FosTse::create(['id' => 128, 'nombre' => 'CERTIFICACION', 'fos_area_id' => 7, 'descripcion' => 'CERTIFICACION', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //128
        FosTse::create(['id' => 129, 'nombre' => 'CIERRE', 'fos_area_id' => 7, 'descripcion' => 'CIERRE', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //129
        FosTse::create(['id' => 130, 'nombre' => 'CIERRE DE CASO', 'fos_area_id' => 7, 'descripcion' => 'CIERRE DE CASO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //130
        FosTse::create(['id' => 131, 'nombre' => 'CONFIRMACIÓN', 'fos_area_id' => 7, 'descripcion' => 'CONFIRMACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //131
        FosTse::create(['id' => 132, 'nombre' => 'CONTACTO TELEFÓNICO', 'fos_area_id' => 7, 'descripcion' => 'CONTACTO TELEFÓNICO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //132
        FosTse::create(['id' => 133, 'nombre' => 'EJERCICIO', 'fos_area_id' => 7, 'descripcion' => 'EJERCICIO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //133
        FosTse::create(['id' => 134, 'nombre' => 'GESTIÓN', 'fos_area_id' => 7, 'descripcion' => 'GESTIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //134
        FosTse::create(['id' => 135, 'nombre' => 'INICIO', 'fos_area_id' => 7, 'descripcion' => 'INICIO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //135
        FosTse::create(['id' => 136, 'nombre' => 'LLAMADA', 'fos_area_id' => 7, 'descripcion' => 'LLAMADA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //136
        FosTse::create(['id' => 137, 'nombre' => 'NOVEDAD', 'fos_area_id' => 7, 'descripcion' => 'NOVEDAD', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //137
        FosTse::create(['id' => 138, 'nombre' => 'ORIENTACIÓN', 'fos_area_id' => 7, 'descripcion' => 'ORIENTACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //138
        FosTse::create(['id' => 139, 'nombre' => 'PRESENTACIÓN', 'fos_area_id' => 7, 'descripcion' => 'PRESENTACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //139
        FosTse::create(['id' => 140, 'nombre' => 'SEGUIMIENTO', 'fos_area_id' => 7, 'descripcion' => 'SEGUIMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //140
        FosTse::create(['id' => 141, 'nombre' => 'SOLICITUD', 'fos_area_id' => 7, 'descripcion' => 'SOLICITUD', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //141
        FosTse::create(['id' => 142, 'nombre' => 'VERIFICACIÓN', 'fos_area_id' => 7, 'descripcion' => 'VERIFICACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //142
        FosTse::create(['id' => 143, 'nombre' => 'ACOMPAÑAMIENTO', 'fos_area_id' => 8, 'descripcion' => 'ACOMPAÑAMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //143
        FosTse::create(['id' => 144, 'nombre' => 'ACTIVIDADES', 'fos_area_id' => 8, 'descripcion' => 'ACTIVIDADES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //144
        FosTse::create(['id' => 145, 'nombre' => 'ACTUALIZACION', 'fos_area_id' => 8, 'descripcion' => 'ACTUALIZACION', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //145
        FosTse::create(['id' => 146, 'nombre' => 'ATENCIÓN', 'fos_area_id' => 8, 'descripcion' => 'ATENCIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //146
        FosTse::create(['id' => 147, 'nombre' => 'AUTO Y COEVALUACIÓN', 'fos_area_id' => 8, 'descripcion' => 'AUTO Y COEVALUACIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //147
        FosTse::create(['id' => 148, 'nombre' => 'CONCEPTO', 'fos_area_id' => 8, 'descripcion' => 'CONCEPTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //148
        FosTse::create(['id' => 149, 'nombre' => 'CULMINA SANCIÓN', 'fos_area_id' => 8, 'descripcion' => 'CULMINA SANCIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //149
        FosTse::create(['id' => 150, 'nombre' => 'FORMACION', 'fos_area_id' => 8, 'descripcion' => 'FORMACION', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //150
        FosTse::create(['id' => 151, 'nombre' => 'INTERVENCION', 'fos_area_id' => 8, 'descripcion' => 'INTERVENCION', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //151
        FosTse::create(['id' => 152, 'nombre' => 'INTERVENCIÓN Y SEGUIMIENTO', 'fos_area_id' => 8, 'descripcion' => 'INTERVENCIÓN Y SEGUIMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //152
        FosTse::create(['id' => 153, 'nombre' => 'NO REGRESO', 'fos_area_id' => 8, 'descripcion' => 'NO REGRESO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //153
        FosTse::create(['id' => 154, 'nombre' => 'NOVEDAD', 'fos_area_id' => 8, 'descripcion' => 'NOVEDAD', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //154
        FosTse::create(['id' => 155, 'nombre' => 'NOVEDADES', 'fos_area_id' => 8, 'descripcion' => 'NOVEDADES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //155
        FosTse::create(['id' => 156, 'nombre' => 'PARTICIPACION', 'fos_area_id' => 8, 'descripcion' => 'PARTICIPACION', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //156
        FosTse::create(['id' => 157, 'nombre' => 'REFLEXIÓN', 'fos_area_id' => 8, 'descripcion' => 'REFLEXIÓN', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //157
        FosTse::create(['id' => 158, 'nombre' => 'RESPONSABLE UPI', 'fos_area_id' => 8, 'descripcion' => 'RESPONSABLE UPI', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //158
        FosTse::create(['id' => 159, 'nombre' => 'SEGUIMIENTO', 'fos_area_id' => 8, 'descripcion' => 'SEGUIMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //159
        FosTse::create(['id' => 160, 'nombre' => 'SIN EVIDENCIA', 'fos_area_id' => 8, 'descripcion' => 'SIN EVIDENCIA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //160
        FosTse::create(['id' => 161, 'nombre' => 'SIN REGISTRO', 'fos_area_id' => 8, 'descripcion' => 'SIN REGISTRO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //161
        FosTse::create(['id' => 162, 'nombre' => 'SOLICITUD', 'fos_area_id' => 8, 'descripcion' => 'SOLICITUD', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //162
        FosTse::create(['id' => 163, 'nombre' => 'TERRITORIOS/AVANCES', 'fos_area_id' => 8, 'descripcion' => 'TERRITORIOS/AVANCES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //163
        FosTse::create(['id' => 164, 'nombre' => 'TERRITORIOS/JUSTIFICACION', 'fos_area_id' => 8, 'descripcion' => 'TERRITORIOS/JUSTIFICACION', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //164
        FosTse::create(['id' => 165, 'nombre' => 'TRANSVERSALES', 'fos_area_id' => 8, 'descripcion' => 'TRANSVERSALES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //165
        FosTse::create(['id' => 166, 'nombre' => 'VALORACIÓN Y/O SEGUIMIENTO', 'fos_area_id' => 8, 'descripcion' => 'VALORACIÓN Y/O SEGUIMIENTO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); //166
    }
}
