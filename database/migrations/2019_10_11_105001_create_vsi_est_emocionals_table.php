<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiEstEmocionalsTable extends Migration
{
    private $tablaxxx = 'vsi_est_emocionals';
    private $tablaxxx2 = 'vsi_estemo_adecuado';
    private $tablaxxx3 = 'vsi_estemo_dificulta';
    private $tablaxxx4 = 'vsi_estemo_estresante';
    private $tablaxxx5 = 'vsi_estemo_motivo';
    private $tablaxxx6 = 'vsi_estemo_lesiva';
    private $tablaxxx7 = 'vsi_estemo_contexto';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_siente_id')->unsigned();
            $table->binary('descripcion_siente');
            $table->bigInteger('prm_reacciona_id')->unsigned()->nullable();
            $table->binary('descripcion_reacciona');
            $table->binary('descripcion_adecuado')->nullable();
            $table->binary('descripcion_dificulta')->nullable();
            $table->bigInteger('prm_estresante_id')->unsigned();
            $table->binary('descripcion_estresante')->nullable();
            $table->bigInteger('prm_morir_id')->unsigned();
            $table->integer('dia_morir')->unsigned()->nullable();
            $table->integer('mes_morir')->unsigned()->nullable();
            $table->integer('ano_morir')->unsigned()->nullable();
            $table->bigInteger('prm_pensamiento_id')->unsigned()->nullable();
            $table->bigInteger('prm_amenaza_id')->unsigned()->nullable();
            $table->bigInteger('prm_intento_id')->unsigned()->nullable();
            $table->integer('ideacion')->unsigned()->nullable();
            $table->integer('amenaza')->unsigned()->nullable();
            $table->integer('intento')->unsigned()->nullable();
            $table->bigInteger('prm_riesgo_id')->unsigned()->nullable();
            $table->integer('dia_ultimo')->unsigned()->nullable();
            $table->integer('mes_ultimo')->unsigned()->nullable();
            $table->integer('ano_ultimo')->unsigned()->nullable();
            $table->binary('descripcion_motivo')->nullable();
            $table->bigInteger('prm_lesiva_id')->unsigned()->nullable();
            $table->binary('descripcion_lesiva')->nullable();
            $table->bigInteger('prm_sueno_id')->unsigned();
            $table->integer('dia_sueno')->unsigned()->nullable();
            $table->integer('mes_sueno')->unsigned()->nullable();
            $table->integer('ano_sueno')->unsigned()->nullable();
            $table->binary('descripcion_sueno')->nullable();
            $table->bigInteger('prm_alimenticio_id')->unsigned();
            $table->integer('dia_alimenticio')->unsigned()->nullable();
            $table->integer('mes_alimenticio')->unsigned()->nullable();
            $table->integer('ano_alimenticio')->unsigned()->nullable();
            $table->binary('descripcion_alimenticio')->nullable();


            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_siente_id')->references('id')->on('parametros');
            $table->foreign('prm_reacciona_id')->references('id')->on('parametros');
            $table->foreign('prm_estresante_id')->references('id')->on('parametros');
            $table->foreign('prm_morir_id')->references('id')->on('parametros');
            $table->foreign('prm_pensamiento_id')->references('id')->on('parametros');
            $table->foreign('prm_amenaza_id')->references('id')->on('parametros');
            $table->foreign('prm_intento_id')->references('id')->on('parametros');
            $table->foreign('prm_riesgo_id')->references('id')->on('parametros');
            $table->foreign('prm_lesiva_id')->references('id')->on('parametros');
            $table->foreign('prm_sueno_id')->references('id')->on('parametros');
            $table->foreign('prm_alimenticio_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);

        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL ESTADO EMOCIONAL EN LA PERSONA ENTREVISTADA, SECCIÓN 12 ESTADO EMOCIONAL DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE SENTIMIENTOS QUE LOGRA EXPRESAR ADECUADAMENTE EN LA PERSONA ENTREVISTADA, PREGUNTA 12.6 SECCIÓN 12 ESTADO EMOCIONAL DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA EL LISTADO DE SENTIMIENTOS QUE SE LE DIFICULTA EXPRESAR ADECUADAMENTE EN LA PERSONA ENTREVISTADA, PREGUNTA 12.8 SECCIÓN 12 ESTADO EMOCIONAL DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA EL LISTADO DE ACONTECIMIENTOS ESTRESANTES EN LA PERSONA ENTREVISTADA, PREGUNTA 12.10 SECCIÓN 12 ESTADO EMOCIONAL DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA EL LISTADO DE PENSAMIENTOS RELACIONADOS CON EL SUICIDIO EN LA PERSONA ENTREVISTADA, PREGUNTA 12.20 SECCIÓN 12 ESTADO EMOCIONAL DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA EL LISTADO DE CONDUCTAS AUTO LESIVAS EN LA PERSONA ENTREVISTADA, PREGUNTA 12.23 SECCIÓN 12 ESTADO EMOCIONAL DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx7, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_estemocional_id')->unsigned();

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_estemocional_id')->references('id')->on('vsi_est_emocionals');
            $table->unique(['parametro_id', 'vsi_estemocional_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA EL LISTADO DE CONTEXTO EN LA PERSONA ENTREVISTADA, PREGUNTA 12.23 SECCIÓN 12 ESTADO EMOCIONAL DE LA FICHA SICOSOCIAL'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx7);
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
