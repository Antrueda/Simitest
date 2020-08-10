<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiDinFamiliarsTable extends Migration
{
    private $tablaxxx = 'vsi_din_familiars';
    private $tablaxxx2 = 'vsi_dinfam_calle';
    private $tablaxxx3 = 'vsi_dinfam_delito';
    private $tablaxxx4 = 'vsi_dinfam_prostitucion';
    private $tablaxxx5 = 'vsi_dinfam_libertad';
    private $tablaxxx6 = 'vsi_dinfam_consumo';
    private $tablaxxx7 = 'vsi_dinfam_salud';
    private $tablaxxx8 = 'vsi_dinfam_cuidador';
    private $tablaxxx9 = 'vsi_dinfam_ausencia';
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
            $table->bigInteger('prm_familiar_id')->nullable()->unsigned();
            $table->bigInteger('prm_hogar_id')->nullable()->unsigned();
            $table->string('lugar', 4000);
            $table->bigInteger('prm_motivo_id')->unsigned()->nullable();
            $table->string('descripcion', 4000);
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_familiar_id')->references('id')->on('parametros');
            $table->foreign('prm_hogar_id')->references('id')->on('parametros');
            $table->foreign('prm_motivo_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA DINAMICA FAMILIAR LA VIOLENCIA EXPERIMENTADA POR LA PERSONA ENTREVISTADA CON LA VALORACIÓN SICOSOCIAL, SECCIÓN 5'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA '");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA '");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA '");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA '");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA '");

        Schema::create($this->tablaxxx7, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx7}` comment 'TABLA QUE ALMACENA '");

        Schema::create($this->tablaxxx8, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx8}` comment 'TABLA QUE ALMACENA QUIENES ASUMEN CUIDADO DE LOS MENORES DE 18 AÑOS, PREGUNTA 5.5'");

        Schema::create($this->tablaxxx9, function (Blueprint $table) {
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_dinfamiliar_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_dinfamiliar_id')->references('id')->on('vsi_din_familiars');
            $table->unique(['parametro_id', 'vsi_dinfamiliar_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx9}` comment 'TABLA QUE ALMACENA LOS MOTIVOS DE LA AUSCENCIA DE LOS REPRESENTANTES LEGALES, PREGUNTA 5.7'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx9);
        Schema::dropIfExists($this->tablaxxx8);
        Schema::dropIfExists($this->tablaxxx7);
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}