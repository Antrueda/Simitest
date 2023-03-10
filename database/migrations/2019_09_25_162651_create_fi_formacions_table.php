<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiFormacionsTable extends Migration
{
    private $tablaxxx = 'fi_formacions';
    private $tablaxxx2 = 'fi_motivo_vinculacions';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_prm_lee_id')->unsigned()->comment('CAMPO DE SABE LEER');
            $table->integer('i_prm_escribe_id')->unsigned()->comment('CAMPO DE SABE ESCRIBIR');
            $table->integer('prm_operacio_id')->unsigned()->comment('CAMPO DE SABE OPERACIONES');
            $table->integer('i_prm_estudia_id')->unsigned()->comment('CAMPO DE ACTUALMENTE ESTUDIA');
            $table->integer('prm_jornestu_id')->unsigned()->comment('FI 4.5 JORNADA DE ESTUDIO');
            $table->integer('prm_natuenti_id')->unsigned()->comment('FI 4.6 NATURALEZA DE LA ENTIDAD');
            $table->string('s_institucion_edu')->nullable()->comment('FI 4.7 NOMBRE DE LA INSTITUCIÓN');
            $table->integer('diasines')->nullable()->unsigned()->comment('FI 4.8.1 DIAS SIN ESTUDIO');
            $table->integer('mesinest')->nullable()->unsigned()->comment('FI 4.8.2 MESES SIN ESTUDIO');
            $table->integer('anosines')->nullable()->unsigned()->comment('FI 4.8.3 AÑOS SIN ESTUDIO');
            $table->integer('prm_ultniest_id')->unsigned()->comment('FI 4.9 ÚLTIMO NIVEL DE ESTUDIO ALCANZADO');
            $table->integer('prm_ultgrapr_id')->unsigned()->comment('FI 4.10 ÚLTIMO GRADO, MODULO, SEMESTRE APROBADO');
            $table->integer('prm_cerulniv_id')->unsigned()->comment('FI 4.11 CERTIFICADO ÚLTIMO NIVEL DE ESTUDIO');
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA FORMACION');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_lee_id')->references('id')->on('parametros');
            $table->foreign('i_prm_escribe_id')->references('id')->on('parametros');
            $table->foreign('prm_operacio_id')->references('id')->on('parametros');
            $table->foreign('i_prm_estudia_id')->references('id')->on('parametros');
            $table->foreign('prm_jornestu_id')->references('id')->on('parametros');
            $table->foreign('prm_natuenti_id')->references('id')->on('parametros');
            $table->foreign('prm_ultniest_id')->references('id')->on('parametros');
            $table->foreign('prm_ultgrapr_id')->references('id')->on('parametros');
            $table->foreign('prm_cerulniv_id')->references('id')->on('parametros');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA EDUCACIÓN ADQUIRIDA POR LA PERSONA ENTREVISTADA, SECCION 4 ESCUELA DE LA FICHA DE INGRESO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_formacion_id')->unsigned()->comment('REGISTRO FORMACIÓN AL QUE SE LE ASIGNA EL MOTIVO DE VINCULACIÓN');
            $table->integer('prm_motivinc_id')->unsigned()->comment('FI 4.12 MOTIVOS DESEA VINCULARSE AL IDIPRON');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_formacion_id')->references('id')->on('fi_formacions');
            $table->foreign('prm_motivinc_id')->references('id')->on('parametros');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS MOTIVOS PARA VINCULARSE AL IDIPRON POR PARTE DE LA PERSONA ENTREVISTADA, PREGUNTA 4.12 SECCION 4 ESCUELA DE LA FICHA DE INGRESO'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
