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
        SisPestania::create(['pestania'=>'DATOS BASICOS USUARIO','sis_menu_id'=>1]);
        SisPestania::create(['pestania'=>'AREAS USUARIO','sis_menu_id'=>1]);
        SisPestania::create(['pestania'=>'ROLES USUARIO','sis_menu_id'=>1]);
        SisPestania::create(['pestania'=>'CAMBIO DE CONTRASEÑA','sis_menu_id'=>1]);

        // FICHA DE INGRESO
        SisPestania::create(['pestania'=>'DATOS BASICOS FI','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'VESTUARIO FI','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'RESIDENCIA FI','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'ESCUELA FI','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'COMPOSICION FAMILIAR FI','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'SALUD','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'GENERACION DE INGRESOS FI','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'ACTIVIDADES DE TIEMPO LIBRE FI','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'REDES DE APOYO FI','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'CONSUMO SPA FI','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'VIOLENCIA Y CONDICION ESPECIAL FI','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'TIPO DE POBLACION FI','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'CONTACTO CON IDIPRON Y TRATAMIENTO DE DATOS FI','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'BIENVENIDA','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'AUTORIZACION','sis_menu_id'=>2]);
        SisPestania::create(['pestania'=>'RAZONES PARA ENTRAR AL IDIPRON','sis_menu_id'=>2]);

        // VALORACION SICOSOCIAL

        SisPestania::create(['pestania'=>'NNAJ VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'VSIS VIS','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'DATOS BASICOS VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'MOTIVOS DE VINCULACION Y BIENVENIDA VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'RELACIONES FAMILIARES VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'VIOLENCIA Y CONDICION ESPECIAL VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'DINAMICA FAMILIAR VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'RELACIONES SOCIALES VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'REDES SOCIALES DE APOYO VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'ANTECEDENTES VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'GENERACION DE INGRESOS VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'EDUCACION VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'ANTECEDENTES DE SALUD VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'ESTADO EMOCIONAL VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'ACTIVACION EMOCIONAL VIS','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'PRESUNTO ABUSO SEXUAL VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'SITUACION ESPECIAL Y ESCNNA VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'CONSUMO DE SUSTANCIAS PSICOACTIVAS VSI','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'FACTORES VSI','sis_menu_id'=>3]);

        SisPestania::create(['pestania'=>'POTENCIALIDADES Y METAS VSI','sis_menu_id'=>3]);

        SisPestania::create(['pestania'=>'AREAS DE AJUSTE SICOSOCIAL','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'IMPRESION DIAGNOSTICA Y ANALISIS SOCIAL','sis_menu_id'=>3]);
        SisPestania::create(['pestania'=>'CONSENTIMIENTO INFORMADO','sis_menu_id'=>3]);

        // CONSULTA SOCIAL EN DOMICILIO

        SisPestania::create(['pestania'=>'DATOS BASICOS CSD','sis_menu_id'=>4]);
        SisPestania::create(['pestania'=>'VIOLENCIAS Y CONDICION ESPECIAL CSD','sis_menu_id'=>4]);
        SisPestania::create(['pestania'=>'SITUACIONES ESPECIALES CSD','sis_menu_id'=>4]);
        SisPestania::create(['pestania'=>'JUSTICIA RESTAURATIVA CSD','sis_menu_id'=>4]);
        SisPestania::create(['pestania'=>'RESIDENCIA CSD','sis_menu_id'=>4]);
        SisPestania::create(['pestania'=>'DINAMICA FAMILIAR CSD','sis_menu_id'=>4]);
        SisPestania::create(['pestania'=>'COMPOSICION FAMILIAR CSD','sis_menu_id'=>4]);
        SisPestania::create(['pestania'=>'MOTIVOS DE VINCULACION Y BIENVENIDA CSD','sis_menu_id'=>4]);
        SisPestania::create(['pestania'=>'ALIMENTACION DE LA FAMILIA CSD','sis_menu_id'=>4]);
        SisPestania::create(['pestania'=>'GENERACION DE INGRESOS CSD','sis_menu_id'=>4]);
        SisPestania::create(['pestania'=>'REDES SOCIALES DE APOYO','sis_menu_id'=>4]);
        SisPestania::create(['pestania'=>'CONCILIACION','sis_menu_id'=>4]);

        // PESTAÑAS POR ADICIONAR
        SisPestania::create(['pestania'=>'PESTAÑAS FALTANTES','sis_menu_id'=>13]);
    }
}
