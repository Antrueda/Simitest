<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHMitVspaTable extends Migration
{
    private $tablaxxx = 'h_mit_vspa';
    private $tablaxxx2 = 'h_mit_vspa_tabla';
    private $tablaxxx3 = 'h_mit_vspa_tabla_dos';
    private $tablaxxx4 = 'h_mit_vspa_tabla_tres';
    private $tablaxxx5 = 'h_mit_vspa_tabla_cuatro';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned()->comment('ID DE NNAJ');
            $table->integer('prm_upi_id')->unsigned()->nullable()->comment('ID DE UPI O DEPENDENCIA');
            $table->date('fecha')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->integer('prm_valoracion_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE VALORACION');
            $table->integer('prm_icbf_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO APLICA ICBF');
            $table->Integer('previos')->nullable()->comment('CAMPO TRATAMIENTOS PREVIOS');
            $table->integer('prm_gestante_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SE ENCUENTRA GESTANDO');
            $table->Integer('semanas_gestacion')->nullable()->comment('CAMPO SEMANAS DE GESTACION');
            $table->integer('prm_escolar_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONDICION ESCOLAR');
            $table->integer('prm_ingresos_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO FUENTE DE INGRESOS');
            $table->integer('prm_modalidad_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO MODALIDAD DE ATENCION');
            $table->integer('prm_acude_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO COMO ACUDIO A LA INSTITUCION');
            $table->integer('prm_sitio_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SITIO HABITUAL DE CONSUMO');
            $table->integer('prm_probado_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO HA PROBADO O CONSUMIDO');
            $table->integer('prm_cantidad_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CANTIDAD DE CIGARRILLOS QUE CONSUME AL DIA');
            $table->integer('prm_inyectadas_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO HA USADO DROGAS INYECTADAS');
            $table->Integer('edad')->nullable()->comment('CAMPO NUMERICO DE EDAD');
            $table->integer('prm_dificultad_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DIFICULTAD PARA OBTENER SUSTANCIA');
            $table->longText('descripcion')->nullable()->comment('CAMPO DE TEXTO DESCRIPCION');
            $table->integer('prm_obtiene_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO COMO HA OBTENIDO SUSTANCIA');
            $table->string('donde', 120)->nullable()->comment('CAMPO DE TEXTO DONDE');
            $table->Integer('precio')->nullable()->comment('CAMPO DE NUMERICO PRECIO');
            $table->Integer('cantidad')->nullable()->comment('CAMPO DE NUMERICO CANTIDAD');
            $table->integer('prm_medida_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO UNIDAD DE MEDIDA');
            $table->integer('prm_frecuencia_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CON QUE FRECUENCIA CONSUME');
            $table->integer('prm_costumbre_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO ACOSTUMBRA A USAR SUSTANCIA');
            $table->longText('porque')->nullable()->comment('CAMPO DE TEXTO POR QUE');
            $table->string('sustancia', 120)->nullable()->comment('CAMPO DE TEXTO QUE SUSTANCIA HA CONSUMIDO ANTES');
            $table->integer('prm_comparte_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO ACOSTUMBRA A COMPARTIR AGUJAS');
            $table->longText('porque_comparte')->nullable()->comment('CAMPO DE TEXTO POR QUE COMPARTE');
            $table->integer('prm_prueba_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SE HA PRACTICADO ALGUNA VEZ UNA PRUEBA DEL VIH SIDA ');
            $table->longText('porque_prueba')->nullable()->comment('CAMPO DE TEXTO POR QUE PRUEBA');
            $table->longText('observaciones')->nullable()->comment('CAMPO DE TEXTO OBSERVACIONES');
            $table->longText('obs_generales')->comment('CAMPO DE TEXTO OBSERVACIONES GENERALES');
            $table->longText('obs_generales_dos')->comment('CAMPO DE TEXTO SEGUNDA OBSERVACIONES GENERALES');
            $table->integer('user_doc1_id')->unsigned()->comment('ID DE USUARIO QUE DILIGENCIA');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('mit_vspa_id')->unsigned()->comment('ID MITIGACION');

            $table->integer('prm_droga_ini_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE DROGA DROGA');
            $table->integer('prm_fre_ini_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO FRECUENCIA DE USO');
            $table->integer('prm_via_ini_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO VIA DE ADMINISTRACION');
            $table->Integer('primera_ini')->nullable()->comment('CAMPO PARAMETRO EDAD DE PRIMERA VEZ');
            $table->integer('prm_mes_ini_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO EN EL ULTIMO MES');
            $table->integer('prm_anio_ini_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO DURANTE EL AÑO');
            $table->Integer('ultima_ini')->nullable()->comment('CAMPO PARAMETRO DEJO DE CONSUMIRLA');
            $table->integer('prm_imp_ini_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO IMPACTO NEGATIVO EN LA VIDA');

            $table->integer('prm_droga_dos_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE DROGA DROGA');
            $table->integer('prm_fre_dos_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO FRECUENCIA DE USO');
            $table->integer('prm_via_dos_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO VIA DE ADMINISTRACION');
            $table->Integer('primera_dos')->nullable()->comment('CAMPO PARAMETRO EDAD DE PRIMERA VEZ');
            $table->integer('prm_mes_dos_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO EN EL ULTIMO MES');
            $table->integer('prm_anio_dos_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO DURANTE EL AÑO');
            $table->Integer('ultima_dos')->nullable()->comment('CAMPO PARAMETRO DEJO DE CONSUMIRLA');
            $table->integer('prm_imp_dos_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO IMPACTO NEGATIVO EN LA VIDA');

            $table->integer('prm_droga_tres_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE DROGA DROGA');
            $table->integer('prm_fre_tres_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO FRECUENCIA DE USO');
            $table->integer('prm_via_tres_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO VIA DE ADMINISTRACION');
            $table->Integer('primera_tres')->nullable()->comment('CAMPO PARAMETRO EDAD DE PRIMERA VEZ');
            $table->integer('prm_mes_tres_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO EN EL ULTIMO MES');
            $table->integer('prm_anio_tres_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO DURANTE EL AÑO');
            $table->Integer('ultima_tres')->nullable()->comment('CAMPO PARAMETRO DEJO DE CONSUMIRLA');
            $table->integer('prm_imp_tres_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO IMPACTO NEGATIVO EN LA VIDA');

            $table->integer('prm_droga_cuatro_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE DROGA DROGA');
            $table->integer('prm_fre_cuatro_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO FRECUENCIA DE USO');
            $table->integer('prm_via_cuatro_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO VIA DE ADMINISTRACION');
            $table->Integer('primera_cuatro')->nullable()->comment('CAMPO PARAMETRO EDAD DE PRIMERA VEZ');
            $table->integer('prm_mes_cuatro_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO EN EL ULTIMO MES');
            $table->integer('prm_anio_cuatro_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO DURANTE EL AÑO');
            $table->Integer('ultima_cuatro')->nullable()->comment('CAMPO PARAMETRO DEJO DE CONSUMIRLA');
            $table->integer('prm_imp_cuatro_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO IMPACTO NEGATIVO EN LA VIDA');

            $table->integer('prm_droga_cinco_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE DROGA DROGA');
            $table->integer('prm_fre_cinco_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO FRECUENCIA DE USO');
            $table->integer('prm_via_cinco_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO VIA DE ADMINISTRACION');
            $table->Integer('primera_cinco')->nullable()->comment('CAMPO PARAMETRO EDAD DE PRIMERA VEZ');
            $table->integer('prm_mes_cinco_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO EN EL ULTIMO MES');
            $table->integer('prm_anio_cinco_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO DURANTE EL AÑO');
            $table->Integer('ultima_cinco')->nullable()->comment('CAMPO PARAMETRO DEJO DE CONSUMIRLA');
            $table->integer('prm_imp_cinco_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO IMPACTO NEGATIVO EN LA VIDA');

            $table->integer('prm_droga_seis_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE DROGA DROGA');
            $table->integer('prm_fre_seis_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO FRECUENCIA DE USO');
            $table->integer('prm_via_seis_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO VIA DE ADMINISTRACION');
            $table->Integer('primera_seis')->nullable()->comment('CAMPO PARAMETRO EDAD DE PRIMERA VEZ');
            $table->integer('prm_mes_seis_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO EN EL ULTIMO MES');
            $table->integer('prm_anio_seis_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO DURANTE EL AÑO');
            $table->Integer('ultima_seis')->nullable()->comment('CAMPO PARAMETRO DEJO DE CONSUMIRLA');
            $table->integer('prm_imp_seis_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO IMPACTO NEGATIVO EN LA VIDA');

            $table->integer('prm_droga_siete_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE DROGA DROGA');
            $table->integer('prm_fre_siete_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO FRECUENCIA DE USO');
            $table->integer('prm_via_siete_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO VIA DE ADMINISTRACION');
            $table->Integer('primera_siete')->nullable()->comment('CAMPO PARAMETRO EDAD DE PRIMERA VEZ');
            $table->integer('prm_mes_siete_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO EN EL ULTIMO MES');
            $table->integer('prm_anio_siete_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO DURANTE EL AÑO');
            $table->Integer('ultima_siete')->nullable()->comment('CAMPO PARAMETRO DEJO DE CONSUMIRLA');
            $table->integer('prm_imp_siete_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO IMPACTO NEGATIVO EN LA VIDA');

            $table->integer('prm_droga_dmi_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE DROGA DROGA');
            $table->integer('prm_fre_dmi_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO FRECUENCIA DE USO');
            $table->integer('prm_via_dmi_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO VIA DE ADMINISTRACION');
            $table->Integer('primera_dmi')->nullable()->comment('CAMPO PARAMETRO EDAD DE PRIMERA VEZ');
            $table->integer('prm_mes_dmi_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO EN EL ULTIMO MES');
            $table->integer('prm_anio_dmi_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO CONSUMIDO DURANTE EL AÑO');
            $table->Integer('ultima_dmi')->nullable()->comment('CAMPO PARAMETRO DEJO DE CONSUMIRLA');
            $table->integer('prm_imp_dmi_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO IMPACTO NEGATIVO EN LA VIDA');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('mit_vspa_id')->unsigned()->comment('ID MITIGACION');
            $table->integer('prm_cuatro_uno_id')->unsigned()->nullable()->comment('4.1 ¿Ha usado alguna vez sustancias psicoactivas para relajarse, calmar las ansias o mejorar su estado emocional?');
            $table->integer('prm_cuatro_dos_id')->unsigned()->nullable()->comment('4.2. ¿Ha usado alguna vez cigarrillo, tabaco, alcohol o sustancias psicoactivas para integrarse a un grupo?');
            $table->integer('prm_cuatro_tres_id')->unsigned()->nullable()->comment('4.3 ¿ Alguna vez sus amigos o familiares, le han sugerido que reduzca el consumo de sustancias psicoactivas?');
            $table->integer('prm_cuatro_cuatro_id')->unsigned()->nullable()->comment('4.4 ¿Ha estado involucrado en riñas, altercados o problemas (peleas, robos) al consumir sustancias psicoactivas?');
            $table->integer('prm_cuatro_cinco_id')->unsigned()->nullable()->comment('4.5 ¿Se le ha olvidado alguna vez lo que hizo mientras consumía sustancias psicoactivas?');
            $table->integer('prm_cuatro_seis_id')->unsigned()->nullable()->comment('4.6 ¿Alguna vez ha consumido alcohol o alguna sustancia psicoactiva mientras estaba solo o sola?');
            $table->integer('prm_cuatro_siete_id')->unsigned()->nullable()->comment('4.7 ¿Se siente preocupado/a por su situación actual de uso de sustancias psicoactivas?');
            $table->integer('prm_cuatro_ocho_id')->unsigned()->nullable()->comment('4.8 ¿Alguna vez ha tenido relaciones sexuales sin protección bajo el efecto de sustancias psicoactivas?');
            $table->integer('prm_cuatro_nueve_id')->unsigned()->nullable()->comment('4.9 ¿Alguna vez ha dejado de cumplir con sus responsabilidades por estar bajo el efecto de sustancias psicoactivas?');
            $table->integer('prm_cuatro_diez_id')->unsigned()->nullable()->comment('4.10 ¿Le cuesta concentrarse a la hora de estudiar/leer y/o se le olvidan fácilmente las cosas debido al consumo de sustancias psicoactivas?');
            $table->integer('prm_cuatro_once_id')->unsigned()->nullable()->comment('4.11 ¿Tiene problemas para conciliar el sueño debido al consumo de sustancias psicoactivas?');
            $table->integer('prm_cuatro_doce_id')->unsigned()->nullable()->comment('4.12 ¿Ha frecuentado espacios de fiesta donde hay expendio de sustancias psicoactivas y trabajo sexual? (Zonas de tolerancia, prostíbulos, amanecederos)');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('mit_vspa_id')->unsigned()->comment('ID MITIGACION');
            $table->integer('prm_cinco_uno_id')->unsigned()->nullable()->comment('5.1  Presunto víctima de abuso sexual');
            $table->integer('prm_cinco_dos_id')->unsigned()->nullable()->comment('5.2 Antecedentes y/o influencia familiar (expendido de drogas/ ollas)');
            $table->integer('prm_cinco_tres_id')->unsigned()->nullable()->comment('5.3 Dificultades con la pareja (no aplica para Niños y Niñas)');
            $table->integer('prm_cinco_cuatro_id')->unsigned()->nullable()->comment('5.4 Ideación Suicida');
            $table->integer('prm_cinco_cinco_id')->unsigned()->nullable()->comment('5.5 Dificultades econòmicas');
            $table->integer('prm_cinco_seis_id')->unsigned()->nullable()->comment('5.6 Conductas  delictivas');
            $table->integer('prm_cinco_siete_id')->unsigned()->nullable()->comment('5.7 Dificultades familiares');
            $table->integer('prm_cinco_ocho_id')->unsigned()->nullable()->comment('5.8 Baja motivaciòn escolar');
            $table->integer('prm_cinco_nueve_id')->unsigned()->nullable()->comment('5.9 Desescolarización');
            $table->integer('prm_cinco_diez_id')->unsigned()->nullable()->comment('5.10 Abandono del núcleo familiar para habitar y/o permanenecer en calle');
            $table->integer('prm_cinco_once_id')->unsigned()->nullable()->comment('5.11 Influencia de pares negativos');
            $table->integer('prm_cinco_doce_id')->unsigned()->nullable()->comment('5.12 Alteraciones de salud mental');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('mit_vspa_id')->unsigned()->comment('ID MITIGACION');
            $table->integer('prm_seis_uno_id')->unsigned()->nullable()->comment('6.1 Sicosocial');
            $table->integer('prm_seis_dos_id')->unsigned()->nullable()->comment('6.2 Sociolegal');
            $table->integer('prm_seis_tres_id')->unsigned()->nullable()->comment('6.3 Salud');
            $table->integer('prm_seis_cuatro_id')->unsigned()->nullable()->comment('6.4 Educación');
            $table->integer('prm_seis_cinco_id')->unsigned()->nullable()->comment('6.5 Emprender');
            $table->integer('prm_seis_seis_id')->unsigned()->nullable()->comment('6.6 Espiritualidad');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx5}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
