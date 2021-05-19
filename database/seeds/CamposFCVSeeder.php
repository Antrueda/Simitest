<?php

use App\Models\Sistema\SisTcampo;
use Illuminate\Database\Seeder;

class CamposFCVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FCV_GENINGRESOS
        SisTcampo::create(['s_campo' => 'CREATED_AT', 's_descripcion' => 'CREATED_AT', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //740
        SisTcampo::create(['s_campo' => 'PRM_ACTGEING_ID', 's_descripcion' => 'PRM_ACTGEING_ID', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param741', 's_idtarela' => 'param741.id', 's_campsele' => 'param741.nombre as nombre741', 'sis_esta_id' => 1]); //741
        SisTcampo::create(['s_campo' => 'PRM_FRECINGR_ID', 's_descripcion' => 'PRM_FRECINGR_ID', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param742', 's_idtarela' => 'param742.id', 's_campsele' => 'param742.nombre as nombre742', 'sis_esta_id' => 1]); //742
        SisTcampo::create(['s_campo' => 'PRM_JORGEING_ID', 's_descripcion' => 'PRM_JORGEING_ID', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param743', 's_idtarela' => 'param743.id', 's_campsele' => 'param743.nombre as nombre743', 'sis_esta_id' => 1]); //743
        SisTcampo::create(['s_campo' => 'PRM_OTRACTIV_ID', 's_descripcion' => 'PRM_OTRACTIV_ID', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param744', 's_idtarela' => 'param744.id', 's_campsele' => 'param744.nombre as nombre744', 'sis_esta_id' => 1]); //744
        SisTcampo::create(['s_campo' => 'PRM_TIPRELAB_ID', 's_descripcion' => 'PRM_TIPRELAB_ID', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param745', 's_idtarela' => 'param745.id', 's_campsele' => 'param745.nombre as nombre745', 'sis_esta_id' => 1]); //745
        SisTcampo::create(['s_campo' => 'PRM_TRABINFO_ID', 's_descripcion' => 'PRM_TRABINFO_ID', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param746', 's_idtarela' => 'param746.id', 's_campsele' => 'param746.nombre as nombre746', 'sis_esta_id' => 1]); //746
        SisTcampo::create(['s_campo' => 'SIS_ESTA_ID', 's_descripcion' => 'SIS_ESTA_ID', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //747
        SisTcampo::create(['s_campo' => 'SIS_NNAJ_ID', 's_descripcion' => 'SIS_NNAJ_ID', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //748
        SisTcampo::create(['s_campo' => 'S_HORA_FINAL', 's_descripcion' => 'S_HORA_FINAL', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //749
        SisTcampo::create(['s_campo' => 'S_HORA_INICIAL', 's_descripcion' => 'S_HORA_INICIAL', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //750
        SisTcampo::create(['s_campo' => 'S_TRABAJO_FORMAL', 's_descripcion' => 'S_TRABAJO_FORMAL', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //751
        SisTcampo::create(['s_campo' => 'TOTINMEN', 's_descripcion' => 'TOTINMEN', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //752
        SisTcampo::create(['s_campo' => 'UPDATED_AT', 's_descripcion' => 'UPDATED_AT', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //753
        SisTcampo::create(['s_campo' => 'USER_CREA_ID', 's_descripcion' => 'USER_CREA_ID', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //754
        SisTcampo::create(['s_campo' => 'USER_EDITA_ID', 's_descripcion' => 'USER_EDITA_ID', 'sis_tabla_id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //755
        //FCV_REDES_ACTUALES
        SisTcampo::create(['s_campo' => 'CREATED_AT', 's_descripcion' => 'CREATED_AT', 'sis_tabla_id' => 65, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //756
        SisTcampo::create(['s_campo' => 'DIRECCION', 's_descripcion' => 'DIRECCION', 'sis_tabla_id' => 65, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //757
        SisTcampo::create(['s_campo' => 'NOMBRE', 's_descripcion' => 'NOMBRE', 'sis_tabla_id' => 65, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //758
        SisTcampo::create(['s_campo' => 'PRM_TIPO_ID', 's_descripcion' => 'PRM_TIPO_ID', 'sis_tabla_id' => 65, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param759', 's_idtarela' => 'param759.id', 's_campsele' => 'param759.nombre as nombre759', 'sis_esta_id' => 1]); //759
        SisTcampo::create(['s_campo' => 'SERVICIO', 's_descripcion' => 'SERVICIO', 'sis_tabla_id' => 65, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //760
        SisTcampo::create(['s_campo' => 'SIS_ESTA_ID', 's_descripcion' => 'SIS_ESTA_ID', 'sis_tabla_id' => 65, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //761
        SisTcampo::create(['s_campo' => 'TELEFONO', 's_descripcion' => 'TELEFONO', 'sis_tabla_id' => 65, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //762
        SisTcampo::create(['s_campo' => 'UPDATED_AT', 's_descripcion' => 'UPDATED_AT', 'sis_tabla_id' => 65, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //763
        SisTcampo::create(['s_campo' => 'USER_CREA_ID', 's_descripcion' => 'USER_CREA_ID', 'sis_tabla_id' => 65, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //764
        SisTcampo::create(['s_campo' => 'USER_EDITA_ID', 's_descripcion' => 'USER_EDITA_ID', 'sis_tabla_id' => 65, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //765
        //FCV_REDES_PASADOS
        SisTcampo::create(['s_campo' => 'ANO', 's_descripcion' => 'ANO', 'sis_tabla_id' => 66, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //766
        SisTcampo::create(['s_campo' => 'CANTIDAD', 's_descripcion' => 'CANTIDAD', 'sis_tabla_id' => 66, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //767
        SisTcampo::create(['s_campo' => 'FI_CSD_VSI_REDP_ID', 's_descripcion' => 'FI_CSD_VSI_REDP_ID', 'sis_tabla_id' => 66, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //768
        SisTcampo::create(['s_campo' => 'NOMBRE', 's_descripcion' => 'NOMBRE', 'sis_tabla_id' => 66, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //769
        SisTcampo::create(['s_campo' => 'PRM_TIPOFUEN_ID', 's_descripcion' => 'PRM_TIPOFUEN_ID', 'sis_tabla_id' => 66, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param770', 's_idtarela' => 'param770.id', 's_campsele' => 'param770.nombre as nombre770', 'sis_esta_id' => 1]); //770
        SisTcampo::create(['s_campo' => 'PRM_UNIDAD_ID', 's_descripcion' => 'PRM_UNIDAD_ID', 'sis_tabla_id' => 66, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param771', 's_idtarela' => 'param771.id', 's_campsele' => 'param771.nombre as nombre771', 'sis_esta_id' => 1]); //771
        SisTcampo::create(['s_campo' => 'RETIRO', 's_descripcion' => 'RETIRO', 'sis_tabla_id' => 66, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //772
        SisTcampo::create(['s_campo' => 'SERVICIOS', 's_descripcion' => 'SERVICIOS', 'sis_tabla_id' => 66, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //773
        SisTcampo::create(['s_campo' => 'SIS_ESTA_ID', 's_descripcion' => 'SIS_ESTA_ID', 'sis_tabla_id' => 66, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //774
        SisTcampo::create(['s_campo' => 'USER_CREA_ID', 's_descripcion' => 'USER_CREA_ID', 'sis_tabla_id' => 66, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //775
        SisTcampo::create(['s_campo' => 'USER_EDITA_ID', 's_descripcion' => 'USER_EDITA_ID', 'sis_tabla_id' => 66, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //776

    }
}
