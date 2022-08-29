<?php

use App\Models\Sistema\SisTcampo;
use Illuminate\Database\Seeder;

class CamposFOSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FOS_DATOS_BASICOS
         SisTcampo::create(['s_campo' => 'AREA_ID', 's_descripcion' => 'AREA_ID', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1351
        SisTcampo::create(['s_campo' => 'CREATED_AT', 's_descripcion' => 'CREATED_AT', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1352
        SisTcampo::create(['s_campo' => 'D_FECHA_DILIGENCIA', 's_descripcion' => 'D_FECHA_DILIGENCIA', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1353
        SisTcampo::create(['s_campo' => 'FI_COMPFAMI_ID', 's_descripcion' => 'FI_COMPFAMI_ID', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1354
        SisTcampo::create(['s_campo' => 'FOS_STSE_ID', 's_descripcion' => 'FOS_STSE_ID', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1355
        SisTcampo::create(['s_campo' => 'FOS_TSE_ID', 's_descripcion' => 'FOS_TSE_ID', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1356
        SisTcampo::create(['s_campo' => 'I_RESPONSABLE', 's_descripcion' => 'I_RESPONSABLE', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1357
        SisTcampo::create(['s_campo' => 'SIS_DEPEN_ID', 's_descripcion' => 'SIS_DEPEN_ID', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1358
        SisTcampo::create(['s_campo' => 'SIS_ENTIDAD_ID', 's_descripcion' => 'SIS_ENTIDAD_ID', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1359
        SisTcampo::create(['s_campo' => 'sis_esta_id', 's_descripcion' => 'sis_esta_id', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1360
        SisTcampo::create(['s_campo' => 'SIS_NNAJ_ID', 's_descripcion' => 'SIS_NNAJ_ID', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1361
        SisTcampo::create(['s_campo' => 'S_OBSERVACION', 's_descripcion' => 'S_OBSERVACION', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1362
        SisTcampo::create(['s_campo' => 'UPDATED_AT', 's_descripcion' => 'UPDATED_AT', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1363
        SisTcampo::create(['s_campo' => 'user_crea_id', 's_descripcion' => 'user_crea_id', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1364
        SisTcampo::create(['s_campo' => 'user_edita_id', 's_descripcion' => 'user_edita_id', 'sis_tabla_id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1365
        //FOS_SEGUIMIENTOS
        SisTcampo::create(['s_campo' => 'CREATED_AT', 's_descripcion' => 'CREATED_AT', 'sis_tabla_id' => 119, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1366
        SisTcampo::create(['s_campo' => 'DELETED_AT', 's_descripcion' => 'DELETED_AT', 'sis_tabla_id' => 119, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1367
        SisTcampo::create(['s_campo' => 'FOS_STSES_ID', 's_descripcion' => 'FOS_STSES_ID', 'sis_tabla_id' => 119, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1368
        SisTcampo::create(['s_campo' => 'FOS_TSE_ID', 's_descripcion' => 'FOS_TSE_ID', 'sis_tabla_id' => 119, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1369
        SisTcampo::create(['s_campo' => 'sis_esta_id', 's_descripcion' => 'sis_esta_id', 'sis_tabla_id' => 119, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1370
        SisTcampo::create(['s_campo' => 'UPDATED_AT', 's_descripcion' => 'UPDATED_AT', 'sis_tabla_id' => 119, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1371
        SisTcampo::create(['s_campo' => 'user_crea_id', 's_descripcion' => 'user_crea_id', 'sis_tabla_id' => 119, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1372
        SisTcampo::create(['s_campo' => 'user_edita_id', 's_descripcion' => 'user_edita_id', 'sis_tabla_id' => 119, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1373
        //FOS_STSES
        SisTcampo::create(['s_campo' => 'CODIGO', 's_descripcion' => 'CODIGO', 'sis_tabla_id' => 120, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1374
        SisTcampo::create(['s_campo' => 'CREATED_AT', 's_descripcion' => 'CREATED_AT', 'sis_tabla_id' => 120, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1375
        SisTcampo::create(['s_campo' => 'DELETED_AT', 's_descripcion' => 'DELETED_AT', 'sis_tabla_id' => 120, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1376
        SisTcampo::create(['s_campo' => 'descripcion', 's_descripcion' => 'descripcion', 'sis_tabla_id' => 120, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1377
        SisTcampo::create(['s_campo' => 'ESTUSUARIO_ID', 's_descripcion' => 'ESTUSUARIO_ID', 'sis_tabla_id' => 120, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1378
        SisTcampo::create(['s_campo' => 'NOMBRE', 's_descripcion' => 'NOMBRE', 'sis_tabla_id' => 120, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1379
        SisTcampo::create(['s_campo' => 'sis_esta_id', 's_descripcion' => 'sis_esta_id', 'sis_tabla_id' => 120, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1380
        SisTcampo::create(['s_campo' => 'UPDATED_AT', 's_descripcion' => 'UPDATED_AT', 'sis_tabla_id' => 120, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1381
        SisTcampo::create(['s_campo' => 'user_crea_id', 's_descripcion' => 'user_crea_id', 'sis_tabla_id' => 120, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1382
        SisTcampo::create(['s_campo' => 'user_edita_id', 's_descripcion' => 'user_edita_id', 'sis_tabla_id' => 120, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1383
        //FOS_TSES
        SisTcampo::create(['s_campo' => 'AREA_ID', 's_descripcion' => 'AREA_ID', 'sis_tabla_id' => 121, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1384
        SisTcampo::create(['s_campo' => 'CREATED_AT', 's_descripcion' => 'CREATED_AT', 'sis_tabla_id' => 121, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1385
        SisTcampo::create(['s_campo' => 'DELETED_AT', 's_descripcion' => 'DELETED_AT', 'sis_tabla_id' => 121, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1386
        SisTcampo::create(['s_campo' => 'descripcion', 's_descripcion' => 'descripcion', 'sis_tabla_id' => 121, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1387
        SisTcampo::create(['s_campo' => 'ESTUSUARIO_ID', 's_descripcion' => 'ESTUSUARIO_ID', 'sis_tabla_id' => 121, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1388
        SisTcampo::create(['s_campo' => 'NOMBRE', 's_descripcion' => 'NOMBRE', 'sis_tabla_id' => 121, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1389
        SisTcampo::create(['s_campo' => 'sis_esta_id', 's_descripcion' => 'sis_esta_id', 'sis_tabla_id' => 121, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1390
        SisTcampo::create(['s_campo' => 'UPDATED_AT', 's_descripcion' => 'UPDATED_AT', 'sis_tabla_id' => 121, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1391
        SisTcampo::create(['s_campo' => 'user_crea_id', 's_descripcion' => 'user_crea_id', 'sis_tabla_id' => 121, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1392
        SisTcampo::create(['s_campo' => 'user_edita_id', 's_descripcion' => 'user_edita_id', 'sis_tabla_id' => 121, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1393

    }
}
