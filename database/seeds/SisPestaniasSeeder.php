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
        SisPestania::create(['id'=>1,'titupest'=>'DATOS BASICOS USUARIO','sis_menu_id'=>1,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>2,'titupest'=>'AREAS USUARIO','sis_menu_id'=>1,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>3,'titupest'=>'ROLES USUARIO','sis_menu_id'=>1,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>4,'titupest'=>'CAMBIO DE CONTRASEÑA','sis_menu_id'=>1,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);

        // FICHA DE INGRESO
        SisPestania::create(['id'=>5,'titupest'=>'DATOS BASICOS FI','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>6,'titupest'=>'VESTUARIO FI','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>7,'titupest'=>'RESIDENCIA FI','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>8,'titupest'=>'ESCUELA FI','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>9,'titupest'=>'COMPOSICION FAMILIAR FI','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>10,'titupest'=>'SALUD','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>11,'titupest'=>'GENERACION DE INGRESOS FI','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>12,'titupest'=>'ACTIVIDADES DE TIEMPO LIBRE FI','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>13,'titupest'=>'REDES DE APOYO FI','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>14,'titupest'=>'CONSUMO SPA FI','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>15,'titupest'=>'VIOLENCIA Y CONDICION ESPECIAL FI','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>16,'titupest'=>'TIPO DE POBLACION FI','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>17,'titupest'=>'CONTACTO CON IDIPRON Y TRATAMIENTO DE DATOS FI','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>18,'titupest'=>'BIENVENIDA','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>19,'titupest'=>'AUTORIZACION','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>20,'titupest'=>'RAZONES PARA ENTRAR AL IDIPRON','sis_menu_id'=>2,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);

        // VALORACION SICOSOCIAL

        SisPestania::create(['id'=>21,'titupest'=>'NNAJ VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>22,'titupest'=>'VSIS VIS','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>23,'titupest'=>'DATOS BASICOS VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>24,'titupest'=>'MOTIVOS DE VINCULACION Y BIENVENIDA VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>25,'titupest'=>'RELACIONES FAMILIARES VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>26,'titupest'=>'VIOLENCIA Y CONDICION ESPECIAL VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>27,'titupest'=>'DINAMICA FAMILIAR VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>28,'titupest'=>'RELACIONES SOCIALES VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>29,'titupest'=>'REDES SOCIALES DE APOYO VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>30,'titupest'=>'ANTECEDENTES VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>31,'titupest'=>'GENERACION DE INGRESOS VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>32,'titupest'=>'EDUCACION VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>33,'titupest'=>'ANTECEDENTES DE SALUD VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>34,'titupest'=>'ESTADO EMOCIONAL VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>35,'titupest'=>'ACTIVACION EMOCIONAL VIS','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>36,'titupest'=>'PRESUNTO ABUSO SEXUAL VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>37,'titupest'=>'SITUACION ESPECIAL Y ESCNNA VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>38,'titupest'=>'CONSUMO DE SUSTANCIAS PSICOACTIVAS VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>39,'titupest'=>'FACTORES VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);

        SisPestania::create(['id'=>40,'titupest'=>'POTENCIALIDADES Y METAS VSI','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);

        SisPestania::create(['id'=>41,'titupest'=>'AREAS DE AJUSTE SICOSOCIAL','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>42,'titupest'=>'IMPRESION DIAGNOSTICA Y ANALISIS SOCIAL','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>43,'titupest'=>'CONSENTIMIENTO INFORMADO','sis_menu_id'=>3,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);

        // CONSULTA SOCIAL EN DOMICILIO

        SisPestania::create(['id'=>44,'titupest'=>'DATOS BASICOS CSD','sis_menu_id'=>4,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>45,'titupest'=>'VIOLENCIAS Y CONDICION ESPECIAL CSD','sis_menu_id'=>4,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>46,'titupest'=>'SITUACIONES ESPECIALES CSD','sis_menu_id'=>4,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>47,'titupest'=>'JUSTICIA RESTAURATIVA CSD','sis_menu_id'=>4,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>48,'titupest'=>'RESIDENCIA CSD','sis_menu_id'=>4,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>49,'titupest'=>'DINAMICA FAMILIAR CSD','sis_menu_id'=>4,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>50,'titupest'=>'COMPOSICION FAMILIAR CSD','sis_menu_id'=>4,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>51,'titupest'=>'MOTIVOS DE VINCULACION Y BIENVENIDA CSD','sis_menu_id'=>4,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>52,'titupest'=>'ALIMENTACION DE LA FAMILIA CSD','sis_menu_id'=>4,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>53,'titupest'=>'GENERACION DE INGRESOS CSD','sis_menu_id'=>4,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>54,'titupest'=>'REDES SOCIALES DE APOYO','sis_menu_id'=>4,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>55,'titupest'=>'CONCILIACION','sis_menu_id'=>4,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);

        // PESTAÑAS POR ADICIONAR
        SisPestania::create(['id'=>56,'titupest'=>'ADMINISTRACION','sis_menu_id'=>43,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>57,'titupest'=>'PARAMETRIZACION','sis_menu_id'=>43,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
        SisPestania::create(['id'=>58,'titupest'=>'USUARIOS','sis_menu_id'=>43,'sis_pestania_id'=>null,'sis_esta_id'=>1,'user_crea_id'=>null,'user_edita_id'=>null,'routexxx'=>'d']);
    }
}
