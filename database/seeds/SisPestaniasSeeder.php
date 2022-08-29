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
        SisPestania::create(['titupest' => 'DATOS BASICOS USUARIO', 'sis_menu_id' => 1, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create(['titupest' => 'AREAS USUARIO', 'sis_menu_id' => 1, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create(['titupest' => 'ROLES USUARIO', 'sis_menu_id' => 1, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create(['titupest' => 'CAMBIO DE CONTRASEÑA', 'sis_menu_id' => 1, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);

        // FICHA DE INGRESO
        SisPestania::create(['titupest' => 'DATOS BASICOS FI', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create(['titupest' => 'VESTUARIO FI', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create(['titupest' => 'RESIDENCIA FI', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create(['titupest' => 'ESCUELA FI', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create(['titupest' => 'COMPOSICION FAMILIAR FI', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'SALUD', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'GENERACION DE INGRESOS FI', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'ACTIVIDADES DE TIEMPO LIBRE FI', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'REDES DE APOYO FI', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'CONSUMO SPA FI', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'VIOLENCIA Y CONDICION ESPECIAL FI', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'TIPO DE POBLACION FI', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'CONTACTO CON IDIPRON Y TRATAMIENTO DE DATOS FI', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'BIENVENIDA', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'AUTORIZACION', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'RAZONES PARA ENTRAR AL IDIPRON', 'sis_menu_id' => 2, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);

        // VALORACION SICOSOCIAL

        SisPestania::create([ 'titupest' => 'NNAJ VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'VSIS VIS', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'DATOS BASICOS VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'MOTIVOS DE VINCULACION Y BIENVENIDA VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'RELACIONES FAMILIARES VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'VIOLENCIA Y CONDICION ESPECIAL VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'DINAMICA FAMILIAR VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'RELACIONES SOCIALES VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'REDES SOCIALES DE APOYO VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'ANTECEDENTES VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'GENERACION DE INGRESOS VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'EDUCACION VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'ANTECEDENTES DE SALUD VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'ESTADO EMOCIONAL VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'ACTIVACION EMOCIONAL VIS', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'PRESUNTO ABUSO SEXUAL VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'SITUACION ESPECIAL Y ESCNNA VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'CONSUMO DE SUSTANCIAS PSICOACTIVAS VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'FACTORES VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);

        SisPestania::create([ 'titupest' => 'POTENCIALIDADES Y METAS VSI', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);

        SisPestania::create([ 'titupest' => 'AREAS DE AJUSTE SICOSOCIAL', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'IMPRESION DIAGNOSTICA Y ANALISIS SOCIAL', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'CONSENTIMIENTO INFORMADO', 'sis_menu_id' => 3, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);

        // CONSULTA SOCIAL EN DOMICILIO

        SisPestania::create([ 'titupest' => 'DATOS BASICOS CSD', 'sis_menu_id' => 4, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'VIOLENCIAS Y CONDICION ESPECIAL CSD', 'sis_menu_id' => 4, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'SITUACIONES ESPECIALES CSD', 'sis_menu_id' => 4, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'JUSTICIA RESTAURATIVA CSD', 'sis_menu_id' => 4, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'RESIDENCIA CSD', 'sis_menu_id' => 4, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'DINAMICA FAMILIAR CSD', 'sis_menu_id' => 4, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'COMPOSICION FAMILIAR CSD', 'sis_menu_id' => 4, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'MOTIVOS DE VINCULACION Y BIENVENIDA CSD', 'sis_menu_id' => 4, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'ALIMENTACION DE LA FAMILIA CSD', 'sis_menu_id' => 4, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'GENERACION DE INGRESOS CSD', 'sis_menu_id' => 4, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'REDES SOCIALES DE APOYO', 'sis_menu_id' => 4, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'CONCILIACION', 'sis_menu_id' => 4, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);

        // PESTAÑAS POR ADICIONAR
        SisPestania::create([ 'titupest' => 'ADMINISTRACION', 'sis_menu_id' => 43, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'PARAMETRIZACION', 'sis_menu_id' => 43, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
        SisPestania::create([ 'titupest' => 'USUARIOS', 'sis_menu_id' => 43, 'sis_pestania_id' => null, 'sis_esta_id' => 1, 'user_crea_id' => null, 'user_edita_id' => null, 'routexxx' => 'd']);
    }
}
