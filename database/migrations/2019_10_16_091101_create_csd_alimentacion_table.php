<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCsdAlimentacionTable extends Migration
{
    private $tablaxxx = 'csd_alimentacions';
    private $tablaxxx2 = 'csd_aliment_frec';
    private $tablaxxx3 = 'csd_aliment_compra';
    private $tablaxxx4 = 'csd_aliment_inge';
    private $tablaxxx5 = 'csd_aliment_prepara';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('csd_id')->unsigned();
            $table->integer('cant_personas')->unsigned();
            $table->biginteger('prm_horario_id')->unsigned();
            $table->biginteger('prm_apoyo_id')->unsigned();
            $table->biginteger('prm_entidad_id')->unsigned()->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');

            $table->timestamps();
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_horario_id')->references('id')->on('parametros');
            $table->foreign('prm_apoyo_id')->references('id')->on('parametros');
            $table->foreign('prm_entidad_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA ALIMENTACION DE LA FAMILIA A LA QUE PERTENECE EL ENTREVISTADO, SECCION 9 ALIMENTACION DE LA FAMILIA DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_alimentacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_alimentacion_id')->references('id')->on('csd_alimentacions');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'csd_alimentacion_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE VECES QUE LA FAMILIA COMPRA ALIMENTOS, PREGUNTA 9.2 SECCION 9 ALIMENTACION DE LA FAMILIA DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_alimentacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_alimentacion_id')->references('id')->on('csd_alimentacions');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'csd_alimentacion_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA EL LISTADO DE SITIOS DONDE ES REALIZADA LA COMPRA DE ALIMENTOS, PREGUNTA 9.3 SECCION 9 ALIMENTACION DE LA FAMILIA DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_alimentacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_alimentacion_id')->references('id')->on('csd_alimentacions');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'csd_alimentacion_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA EL LISTADO DE COMIDAS CONSUMIDAS EN EL DIA, PREGUNTA 9.4 SECCION 9 ALIMENTACION DE LA FAMILIA DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_alimentacion_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_alimentacion_id')->references('id')->on('csd_alimentacions');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->unique(['parametro_id', 'csd_alimentacion_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA EL LISTADO DE PERSONAS QUE REALIZAN LA PREPARACION DE ALIMENTOS, PREGUNTA 9.6 SECCION 9 ALIMENTACION DE LA FAMILIA DE CONSULTA SOCIAL EN DOMICILIO'");
    }

    public function down()
    {
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
