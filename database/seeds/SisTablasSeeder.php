<?php

use App\Models\Sistema\SisTabla;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SisTablasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $tablasxx = DB::select("SELECT table_name
        // FROM USER_TAB_COLUMNS  where table_name not like 'H_%' group by table_name order by  table_name asc");
        // $i = 1;
        // $inxxxxxx = ['VSI' => 3, 'CSD' => 4, 'FI' => 2];
        // foreach ($tablasxx as $key => $tablaxxx) {
        //     $tablaxxy = explode('_', $tablaxxx->table_name)[0];
        //     if (array_key_exists($tablaxxy, $inxxxxxx)) {
        //         SisTabla::create([
        //             'id' => $i,
        //             'sis_docfuen_id' => $inxxxxxx[$tablaxxy],
        //             's_tabla' => $tablaxxx->table_name,
        //             's_descripcion' => $tablaxxx->table_name,
        //             'sis_esta_id' => 1,
        //             'user_crea_id' => 1,
        //             'user_edita_id' => 1
        //         ]);
        //         $i++;
        //     }
        // }

        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_ALIMENTACIONS', 's_descripcion' => 'CSD_ALIMENTACIONS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 1
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_ALIMENT_COMPRA', 's_descripcion' => 'CSD_ALIMENT_COMPRA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 2
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_ALIMENT_FREC', 's_descripcion' => 'CSD_ALIMENT_FREC', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 3
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_ALIMENT_INGE', 's_descripcion' => 'CSD_ALIMENT_INGE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 4
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_ALIMENT_PREPARA', 's_descripcion' => 'CSD_ALIMENT_PREPARA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 5
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_BIENVENIDAS', 's_descripcion' => 'CSD_BIENVENIDAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 6
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_BIENVENIDA_MOTIVOS', 's_descripcion' => 'CSD_BIENVENIDA_MOTIVOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 7
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_COMFAMOBS', 's_descripcion' => 'CSD_COMFAMOBS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 8
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_COM_FAMILIARS', 's_descripcion' => 'CSD_COM_FAMILIARS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 9
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_CONCLUSIONES', 's_descripcion' => 'CSD_CONCLUSIONES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 10
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_DATOS_BASICOS', 's_descripcion' => 'CSD_DATOS_BASICOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 11
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_DIAS_GEN_INGRESOS', 's_descripcion' => 'CSD_DIAS_GEN_INGRESOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 12
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_DINFAM_ANTECEDENTE', 's_descripcion' => 'CSD_DINFAM_ANTECEDENTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 13
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_DINFAM_ESTABLECEN', 's_descripcion' => 'CSD_DINFAM_ESTABLECEN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 14
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_DINFAM_INCUMPLE', 's_descripcion' => 'CSD_DINFAM_INCUMPLE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 15
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_DINFAM_MADRES', 's_descripcion' => 'CSD_DINFAM_MADRES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 16
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_DINFAM_NORMA', 's_descripcion' => 'CSD_DINFAM_NORMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 17
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_DINFAM_PADRES', 's_descripcion' => 'CSD_DINFAM_PADRES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 18
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_DINFAM_PROBLEMA', 's_descripcion' => 'CSD_DINFAM_PROBLEMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 19
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_DIN_FAMILIARS', 's_descripcion' => 'CSD_DIN_FAMILIARS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 20
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_GENING_APORTAS', 's_descripcion' => 'CSD_GENING_APORTAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 21
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_GENING_DIAS', 's_descripcion' => 'CSD_GENING_DIAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 22
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_GEN_INGRESOS', 's_descripcion' => 'CSD_GEN_INGRESOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 23
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_JUSTICIAS', 's_descripcion' => 'CSD_JUSTICIAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 24
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_NNAJ_ESPECIAL', 's_descripcion' => 'CSD_NNAJ_ESPECIAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 25
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_REDSOC_ACTUALS', 's_descripcion' => 'CSD_REDSOC_ACTUALS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 26
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_REDSOC_PASADOS', 's_descripcion' => 'CSD_REDSOC_PASADOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 27
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_RESCAMASS', 's_descripcion' => 'CSD_RESCAMASS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 28
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_RESCOMPARTE', 's_descripcion' => 'CSD_RESCOMPARTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 29
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_RESHOGARS', 's_descripcion' => 'CSD_RESHOGARS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 30
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_RESIDENCIAS', 's_descripcion' => 'CSD_RESIDENCIAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 31
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_RESIDE_AMBIENTE', 's_descripcion' => 'CSD_RESIDE_AMBIENTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 32
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_RESOBSERS', 's_descripcion' => 'CSD_RESOBSERS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 33
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_RESSERVIS', 's_descripcion' => 'CSD_RESSERVIS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 34
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_SIS_NNAJ', 's_descripcion' => 'CSD_SIS_NNAJ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 35
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'CSD_VIOLENCIAS', 's_descripcion' => 'CSD_VIOLENCIAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 36
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_ACCIONES', 's_descripcion' => 'FI_ACCIONES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 37
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_ACTIVIDADESTLS', 's_descripcion' => 'FI_ACTIVIDADESTLS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 38
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_ACTIVIDAD_TIEMPO_LIBRES', 's_descripcion' => 'FI_ACTIVIDAD_TIEMPO_LIBRES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 39
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_AUTORIZACIONS', 's_descripcion' => 'FI_AUTORIZACIONS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 40
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_BIENVENIDAS', 's_descripcion' => 'FI_BIENVENIDAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 41
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_COMPFAMIS', 's_descripcion' => 'FI_COMPFAMIS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 42
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_CONDICION_AMBIENTES', 's_descripcion' => 'FI_CONDICION_AMBIENTES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 43
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_CONSUMO_SPAS', 's_descripcion' => 'FI_CONSUMO_SPAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 44
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_CONTACTOS', 's_descripcion' => 'FI_CONTACTOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 45
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_CONTVIOLS', 's_descripcion' => 'FI_CONTVIOLS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 46
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_CSDVSIS', 's_descripcion' => 'FI_CSDVSIS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 47
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_CSD_VSI_GENI', 's_descripcion' => 'FI_CSD_VSI_GENI', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 48
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_CSD_VSI_REDES_ACTUALES', 's_descripcion' => 'FI_CSD_VSI_REDES_ACTUALES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 49
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_CSD_VSI_REDES_PASADOS', 's_descripcion' => 'FI_CSD_VSI_REDES_PASADOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 50
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_DATOS_BASICOS', 's_descripcion' => 'FI_DATOS_BASICOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 51
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_DIAS_GENERA_INGRESOS', 's_descripcion' => 'FI_DIAS_GENERA_INGRESOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 52
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_DILIGENCS', 's_descripcion' => 'FI_DILIGENCS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 53
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_DISCAUSAS', 's_descripcion' => 'FI_DISCAUSAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 54
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_DOCUMENTOS_ANEXAS', 's_descripcion' => 'FI_DOCUMENTOS_ANEXAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 55
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_ENFERMEDADES_FAMILIAS', 's_descripcion' => 'FI_ENFERMEDADES_FAMILIAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 56
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_EVENTOS_MEDICOS', 's_descripcion' => 'FI_EVENTOS_MEDICOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 57
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_FORMACIONS', 's_descripcion' => 'FI_FORMACIONS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 58
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_GENERACION_INGRESOS', 's_descripcion' => 'FI_GENERACION_INGRESOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 59
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_JR_CAUSASMOS', 's_descripcion' => 'FI_JR_CAUSASMOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 60
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_JR_CAUSASSIS', 's_descripcion' => 'FI_JR_CAUSASSIS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 61
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_JR_FAMILIARS', 's_descripcion' => 'FI_JR_FAMILIARS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 62
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_JUSTRESTS', 's_descripcion' => 'FI_JUSTRESTS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 63
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_LESICOMES', 's_descripcion' => 'FI_LESICOMES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 64
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_MODALIDADS', 's_descripcion' => 'FI_MODALIDADS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 65
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_MOTIVO_VINCULACIONS', 's_descripcion' => 'FI_MOTIVO_VINCULACIONS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 66
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_OBSERVACIONES', 's_descripcion' => 'FI_OBSERVACIONES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 67
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_PROCESO_FAMILIAS', 's_descripcion' => 'FI_PROCESO_FAMILIAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 68
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_PROCESO_PARDS', 's_descripcion' => 'FI_PROCESO_PARDS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 69
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_PROCESO_SPOAS', 's_descripcion' => 'FI_PROCESO_SPOAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 70
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_PROCESO_SRPAS', 's_descripcion' => 'FI_PROCESO_SRPAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 71
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_RAZONES', 's_descripcion' => 'FI_RAZONES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 72
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_RAZON_CONTINUAS', 's_descripcion' => 'FI_RAZON_CONTINUAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 73
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_RAZON_INICIADOS', 's_descripcion' => 'FI_RAZON_INICIADOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 74
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_RED_APOYO_ACTUALS', 's_descripcion' => 'FI_RED_APOYO_ACTUALS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 75
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_RED_APOYO_ANTECEDENTES', 's_descripcion' => 'FI_RED_APOYO_ANTECEDENTES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 76
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_RESIDENCIAS', 's_descripcion' => 'FI_RESIDENCIAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 77
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_RIESGO_ESCNNAS', 's_descripcion' => 'FI_RIESGO_ESCNNAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 78
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_SACRAMENTOS', 's_descripcion' => 'FI_SACRAMENTOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 79
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_SALUDS', 's_descripcion' => 'FI_SALUDS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 80
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_SITUACION_ESPECIALS', 's_descripcion' => 'FI_SITUACION_ESPECIALS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 81
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_SITU_VULNERA', 's_descripcion' => 'FI_SITU_VULNERA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 82
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_SUSTANCIA_CONSUMIDAS', 's_descripcion' => 'FI_SUSTANCIA_CONSUMIDAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 83
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_VESTUARIO_NNAJS', 's_descripcion' => 'FI_VESTUARIO_NNAJS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 84
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_VICTATAQS', 's_descripcion' => 'FI_VICTATAQS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 85
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_VICTIMA_ESCNNAS', 's_descripcion' => 'FI_VICTIMA_ESCNNAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 86
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_VIOLBASAS', 's_descripcion' => 'FI_VIOLBASAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 87
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'FI_VIOLENCIAS', 's_descripcion' => 'FI_VIOLENCIAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 88
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_ABU_SEXUALS', 's_descripcion' => 'VSI_ABU_SEXUALS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 89
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_ACTEMO_FISIOLOGICA', 's_descripcion' => 'VSI_ACTEMO_FISIOLOGICA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 90
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_ACT_EMOCIONALS', 's_descripcion' => 'VSI_ACT_EMOCIONALS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 91
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_ANTECEDENTES', 's_descripcion' => 'VSI_ANTECEDENTES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 92
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_BIENVENIDAS', 's_descripcion' => 'VSI_BIENVENIDAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 93
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_BIENVENIDA_MOTIVO', 's_descripcion' => 'VSI_BIENVENIDA_MOTIVO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 94
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_CONCEPTOS', 's_descripcion' => 'VSI_CONCEPTOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 95
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_CONCEP_RED', 's_descripcion' => 'VSI_CONCEP_RED', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 96
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_CONSENTIMIENTOS', 's_descripcion' => 'VSI_CONSENTIMIENTOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 97
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_CONSUMOS', 's_descripcion' => 'VSI_CONSUMOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 98
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_CONSUMO_EXPECTATIVA', 's_descripcion' => 'VSI_CONSUMO_EXPECTATIVA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 99
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_CONSUMO_QUIEN', 's_descripcion' => 'VSI_CONSUMO_QUIEN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 100
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_DATOS_VINCULAS', 's_descripcion' => 'VSI_DATOS_VINCULAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 101
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_DINFAM_AUSENCIA', 's_descripcion' => 'VSI_DINFAM_AUSENCIA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 102
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_DINFAM_CALLE', 's_descripcion' => 'VSI_DINFAM_CALLE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 103
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_DINFAM_CONSUMO', 's_descripcion' => 'VSI_DINFAM_CONSUMO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 104
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_DINFAM_CUIDADOR', 's_descripcion' => 'VSI_DINFAM_CUIDADOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 105
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_DINFAM_DELITO', 's_descripcion' => 'VSI_DINFAM_DELITO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 106
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_DINFAM_LIBERTAD', 's_descripcion' => 'VSI_DINFAM_LIBERTAD', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 107
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_DINFAM_MADRES', 's_descripcion' => 'VSI_DINFAM_MADRES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 108
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_DINFAM_PADRES', 's_descripcion' => 'VSI_DINFAM_PADRES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 109
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_DINFAM_PROSTITUCION', 's_descripcion' => 'VSI_DINFAM_PROSTITUCION', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 110
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_DINFAM_SALUD', 's_descripcion' => 'VSI_DINFAM_SALUD', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 111
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_DIN_FAMILIARS', 's_descripcion' => 'VSI_DIN_FAMILIARS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 112
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_EDUCACIONS', 's_descripcion' => 'VSI_EDUCACIONS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 113
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_EDU_CAUSA', 's_descripcion' => 'VSI_EDU_CAUSA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 114
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_EDU_DIFICULTAD', 's_descripcion' => 'VSI_EDU_DIFICULTAD', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 115
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_EDU_DIFTIPO_A', 's_descripcion' => 'VSI_EDU_DIFTIPO_A', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 116
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_EDU_DIFTIPO_B', 's_descripcion' => 'VSI_EDU_DIFTIPO_B', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 117
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_EDU_FORTALEZA', 's_descripcion' => 'VSI_EDU_FORTALEZA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 118
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_EMOCION_VINCULA', 's_descripcion' => 'VSI_EMOCION_VINCULA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 119
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_ESTEMO_ADECUADO', 's_descripcion' => 'VSI_ESTEMO_ADECUADO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 120
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_ESTEMO_CONTEXTO', 's_descripcion' => 'VSI_ESTEMO_CONTEXTO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 121
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_ESTEMO_DIFICULTA', 's_descripcion' => 'VSI_ESTEMO_DIFICULTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 122
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_ESTEMO_ESTRESANTE', 's_descripcion' => 'VSI_ESTEMO_ESTRESANTE', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 123
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_ESTEMO_LESIVA', 's_descripcion' => 'VSI_ESTEMO_LESIVA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 124
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_ESTEMO_MOTIVO', 's_descripcion' => 'VSI_ESTEMO_MOTIVO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 125
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_EST_EMOCIONALS', 's_descripcion' => 'VSI_EST_EMOCIONALS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 126
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_FAC_PROTECTORS', 's_descripcion' => 'VSI_FAC_PROTECTORS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 127
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_FAC_RIESGOS', 's_descripcion' => 'VSI_FAC_RIESGOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 128
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_GENING_DIAS', 's_descripcion' => 'VSI_GENING_DIAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 129
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_GENING_LABOR', 's_descripcion' => 'VSI_GENING_LABOR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 130
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_GENING_QUIEN', 's_descripcion' => 'VSI_GENING_QUIEN', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 131
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_GEN_INGRESOS', 's_descripcion' => 'VSI_GEN_INGRESOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 132
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_METAS', 's_descripcion' => 'VSI_METAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 133
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_NNAJ_ACADEMICA', 's_descripcion' => 'VSI_NNAJ_ACADEMICA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 134
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_NNAJ_COMPORTAMENTAL', 's_descripcion' => 'VSI_NNAJ_COMPORTAMENTAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 135
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_NNAJ_EMOCIONAL', 's_descripcion' => 'VSI_NNAJ_EMOCIONAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 136
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_NNAJ_FAMILIAR', 's_descripcion' => 'VSI_NNAJ_FAMILIAR', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 137
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_NNAJ_SEXUAL', 's_descripcion' => 'VSI_NNAJ_SEXUAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 138
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_NNAJ_SOCIAL', 's_descripcion' => 'VSI_NNAJ_SOCIAL', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 139
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_PERSONAS', 's_descripcion' => 'VSI_PERSONAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 140
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_POTENCIALIDADS', 's_descripcion' => 'VSI_POTENCIALIDADS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 141
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_REDSOC_ACCESO', 's_descripcion' => 'VSI_REDSOC_ACCESO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 142
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_REDSOC_ACTUALS', 's_descripcion' => 'VSI_REDSOC_ACTUALS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 143
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_REDSOC_MOTIVO', 's_descripcion' => 'VSI_REDSOC_MOTIVO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 144
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_REDSOC_PASADOS', 's_descripcion' => 'VSI_REDSOC_PASADOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 145
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_RED_SOCIALS', 's_descripcion' => 'VSI_RED_SOCIALS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 146
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_RELFAM_ACCIONES', 's_descripcion' => 'VSI_RELFAM_ACCIONES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 147
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_RELFAM_DIFICULTAD', 's_descripcion' => 'VSI_RELFAM_DIFICULTAD', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 148
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_RELFAM_MOTIVO', 's_descripcion' => 'VSI_RELFAM_MOTIVO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 149
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_RELSOL_DIFICULTA', 's_descripcion' => 'VSI_RELSOL_DIFICULTA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 150
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_RELSOL_FACILITA', 's_descripcion' => 'VSI_RELSOL_FACILITA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 151
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_REL_FAMILIARS', 's_descripcion' => 'VSI_REL_FAMILIARS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 152
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_REL_SOCIALES', 's_descripcion' => 'VSI_REL_SOCIALES', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 153
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_SALUDS', 's_descripcion' => 'VSI_SALUDS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 154
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_SITESP_RIESGO', 's_descripcion' => 'VSI_SITESP_RIESGO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 155
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_SITESP_VICTIMA', 's_descripcion' => 'VSI_SITESP_VICTIMA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 156
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_SITUACION_VINCULA', 's_descripcion' => 'VSI_SITUACION_VINCULA', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 157
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_SIT_ESPECIALS', 's_descripcion' => 'VSI_SIT_ESPECIALS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 158
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_TIPO_VIOS', 's_descripcion' => 'VSI_TIPO_VIOS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 159
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_VIOLENCIAS', 's_descripcion' => 'VSI_VIOLENCIAS', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 160
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_VIO_CONTEXTO', 's_descripcion' => 'VSI_VIO_CONTEXTO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 161
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'VSI_VIO_TIPO', 's_descripcion' => 'VSI_VIO_TIPO', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]); // 162
    }
}
