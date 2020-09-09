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
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_lee_id')->unsigned();
            $table->bigInteger('i_prm_escribe_id')->unsigned();
            $table->bigInteger('i_prm_operaciones_id')->unsigned();
            $table->bigInteger('i_prm_estudia_id')->unsigned();
            $table->bigInteger('i_prm_jornada_estudio_id')->unsigned(); //->comment('FI 4.5 JORNADA DE ESTUDIO');
            $table->bigInteger('i_prm_naturaleza_entidad_id')->unsigned(); //->comment('FI 4.6 NATURALEZA DE LA ENTIDAD');
            $table->string('s_institucion_edu')->nullable(); //->comment('FI 4.7 NOMBRE DE LA INSTITUCIÓN'');
            //$table->bigInteger('sis_institucion_edu_id')->unsigned(); //->comment('FI 4.7 NOMBRE DE LA INSTITUCIÓN'); // OTRA TABLA
            $table->bigInteger('i_dias_sin_estudio')->nullable()->unsigned(); //->comment('FI 4.8.1 DIAS SIN ESTUDIO');
            $table->bigInteger('i_meses_sin_estudio')->nullable()->unsigned(); //->comment('FI 4.8.2 MESES SIN ESTUDIO');
            $table->bigInteger('i_anos_sin_estudio')->nullable()->unsigned(); //->comment('FI 4.8.3 AÑOS SIN ESTUDIO');
            $table->bigInteger('i_prm_ultimo_nivel_estudio_id')->unsigned(); //->comment('FI 4.9 ÚLTIMO NIVEL DE ESTUDIO ALCANZADO');
            $table->bigInteger('i_prm_ultimo_grado_aprobado_id')->unsigned(); //->comment('FI 4.10 ÚLTIMO GRADO, MODULO, SEMESTRE APROBADO');
            $table->bigInteger('i_prm_certificado_ultimo_nivel_id')->unsigned(); //->comment('FI 4.11 CERTIFICADO ÚLTIMO NIVEL DE ESTUDIO');
            $table->bigInteger('sis_nnaj_id')->unsigned(); //->comment('NNAJ AL QUE SE LE ASIGNA LA FORMACION');
            $table->bigInteger('user_crea_id')->unsigned(); //->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned(); //->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_lee_id')->references('id')->on('parametros');
            $table->foreign('i_prm_escribe_id')->references('id')->on('parametros');
            $table->foreign('i_prm_operaciones_id')->references('id')->on('parametros');
            $table->foreign('i_prm_estudia_id')->references('id')->on('parametros');
            $table->foreign('i_prm_jornada_estudio_id')->references('id')->on('parametros');
            $table->foreign('i_prm_naturaleza_entidad_id')->references('id')->on('parametros');
            $table->foreign('i_prm_ultimo_nivel_estudio_id')->references('id')->on('parametros');
            $table->foreign('i_prm_ultimo_grado_aprobado_id')->references('id')->on('parametros');
            $table->foreign('i_prm_certificado_ultimo_nivel_id')->references('id')->on('parametros');
           // $table->foreign('sis_institucion_edu_id')->references('id')->on('sis_institucion_edus');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA EDUCACIÓN ADQUIRIDA POR LA PERSONA ENTREVISTADA, SECCION 4 ESCUELA DE LA FICHA DE INGRESO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_formacion_id')->unsigned()->comment('REGISTRO FORMACIÓN AL QUE SE LE ASIGNA EL MOTIVO DE VINCULACIÓN');
            $table->bigIntegeR('i_prm_motivo_vinc_id')->unsigned()->comment('FI 4.12 MOTIVOS DESEA VINCULARSE AL IDIPRON');
            $table->bigInteger('user_crea_id')->unsigned()->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_formacion_id')->references('id')->on('fi_formacions');
            $table->foreign('i_prm_motivo_vinc_id')->references('id')->on('parametros');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS MOTIVOS PARA VINCULARSE AL IDIPRON POR PARTE DE LA PERSONA ENTREVISTADA, PREGUNTA 4.12 SECCION 4 ESCUELA DE LA FICHA DE INGRESO'");
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