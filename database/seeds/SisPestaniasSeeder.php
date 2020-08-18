<?php

use App\Models\Sistema\SisPestania;
use Illuminate\Database\Seeder;

class SisPestaniasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisPestania::create(['s_pestania'=>'DATOS BASICOS USUARIO','sis_menu_id'=>1]);
        SisPestania::create(['s_pestania'=>'AREAS USUARIO','sis_menu_id'=>1]);
        SisPestania::create(['s_pestania'=>'ROLES USUARIO','sis_menu_id'=>1]);
        SisPestania::create(['s_pestania'=>'CAMBIO DE CONTRASEÑA','sis_menu_id'=>1]);

        // FICHA DE INGRESO
        SisPestania::create(['s_pestania'=>'DATOS BASICOS FI','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'VESTUARIO FI','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'RESIDENCIA FI','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'ESCUELA FI','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'COMPOSICION FAMILIAR FI','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'SALUD','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'GENERACION DE INGRESOS FI','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'ACTIVIDADES DE TIEMPO LIBRE FI','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'REDES DE APOYO FI','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'CONSUMO SPA FI','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'VIOLENCIA Y CONDICION ESPECIAL FI','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'TIPO DE POBLACION FI','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'CONTACTO CON IDIPRON Y TRATAMIENTO DE DATOS FI','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'BIENVENIDA','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'AUTORIZACION','sis_menu_id'=>2]);
        SisPestania::create(['s_pestania'=>'RAZONES PARA ENTRAR AL IDIPRON','sis_menu_id'=>2]);

        // VALORACION SICOSOCIAL

        SisPestania::create(['s_pestania'=>'NNAJ VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'VSIS VIS','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'DATOS BASICOS VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'MOTIVOS DE VINCULACION Y BIENVENIDA VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'RELACIONES FAMILIARES VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'VIOLENCIA Y CONDICION ESPECIAL VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'DINAMICA FAMILIAR VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'RELACIONES SOCIALES VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'REDES SOCIALES DE APOYO VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'ANTECEDENTES VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'GENERACION DE INGRESOS VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'EDUCACION VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'ANTECEDENTES DE SALUD VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'ESTADO EMOCIONAL VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'ACTIVACION EMOCIONAL VIS','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'PRESUNTO ABUSO SEXUAL VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'SITUACION ESPECIAL Y ESCNNA VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'CONSUMO DE SUSTANCIAS PSICOACTIVAS VSI','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'FACTORES VSI','sis_menu_id'=>3]);

        SisPestania::create(['s_pestania'=>'POTENCIALIDADES Y METAS VSI','sis_menu_id'=>3]);

        SisPestania::create(['s_pestania'=>'AREAS DE AJUSTE SICOSOCIAL','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'IMPRESION DIAGNOSTICA Y ANALISIS SOCIAL','sis_menu_id'=>3]);
        SisPestania::create(['s_pestania'=>'CONSENTIMIENTO INFORMADO','sis_menu_id'=>3]);

        // CONSULTA SOCIAL EN DOMICILIO

        SisPestania::create(['s_pestania'=>'DATOS BASICOS CSD','sis_menu_id'=>4]);
        SisPestania::create(['s_pestania'=>'VIOLENCIAS Y CONDICION ESPECIAL CSD','sis_menu_id'=>4]);
        SisPestania::create(['s_pestania'=>'SITUACIONES ESPECIALES CSD','sis_menu_id'=>4]);
        SisPestania::create(['s_pestania'=>'JUSTICIA RESTAURATIVA CSD','sis_menu_id'=>4]);
        SisPestania::create(['s_pestania'=>'RESIDENCIA CSD','sis_menu_id'=>4]);
        SisPestania::create(['s_pestania'=>'DINAMICA FAMILIAR CSD','sis_menu_id'=>4]);
        SisPestania::create(['s_pestania'=>'COMPOSICION FAMILIAR CSD','sis_menu_id'=>4]);
        SisPestania::create(['s_pestania'=>'MOTIVOS DE VINCULACION Y BIENVENIDA CSD','sis_menu_id'=>4]);
        SisPestania::create(['s_pestania'=>'ALIMENTACION DE LA FAMILIA CSD','sis_menu_id'=>4]);
        SisPestania::create(['s_pestania'=>'GENERACION DE INGRESOS CSD','sis_menu_id'=>4]);
        SisPestania::create(['s_pestania'=>'REDES SOCIALES DE APOYO','sis_menu_id'=>4]);
        SisPestania::create(['s_pestania'=>'CONCILIACION','sis_menu_id'=>4]);

        // PESTAÑAS POR ADICIONAR
        SisPestania::create(['s_pestania'=>'PESTAÑAS FALTANTES','sis_menu_id'=>13]);
    }
}
