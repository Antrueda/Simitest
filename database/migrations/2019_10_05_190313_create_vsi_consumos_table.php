<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiConsumosTable extends Migration
{
    private $tablaxxx = 'vsi_consumos';
    private $tablaxxx2 = 'vsi_consumo_quien';
    private $tablaxxx3 = 'vsi_consumo_expectativa';
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
            $table->bigInteger('prm_consumo_id')->unsigned();
            $table->Integer('cantidad')->unsigned()->nullable();
            $table->Integer('inicio')->unsigned()->nullable();
            $table->bigInteger('prm_contexto_ini_id')->unsigned()->nullable();
            $table->bigInteger('prm_consume_id')->unsigned()->nullable();
            $table->bigInteger('prm_contexto_man_id')->unsigned()->nullable();
            $table->bigInteger('prm_problema_id')->unsigned()->nullable();
            $table->string('porque')->nullable();
            $table->bigInteger('prm_motivo_id')->unsigned()->nullable();
            $table->bigInteger('prm_expectativa_id')->unsigned()->nullable();
            $table->bigInteger('prm_familia_id')->unsigned();
            $table->string('descripcion', 4000)->nullable();

            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_consumo_id')->references('id')->on('parametros');
            $table->foreign('prm_contexto_ini_id')->references('id')->on('parametros');
            $table->foreign('prm_consume_id')->references('id')->on('parametros');
            $table->foreign('prm_contexto_man_id')->references('id')->on('parametros');
            $table->foreign('prm_problema_id')->references('id')->on('parametros');
            $table->foreign('prm_motivo_id')->references('id')->on('parametros');
            $table->foreign('prm_expectativa_id')->references('id')->on('parametros');
            $table->foreign('prm_familia_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE CONTIENE LOS DETALLES DEL CONSUMO DE SUSTANCIAS PSICOACTIVAS DE LA PERSONA ENTREVISTADA, SECCIÓN 16 CONSUMO DE SUSTANCIAS PSICOACTIVAS DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_consumo_id')->unsigned();
            $table = CamposMagicos::magicos($table);
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_consumo_id')->references('id')->on('vsi_consumos');
            $table->unique(['parametro_id', 'vsi_consumo_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE CONTIENE LAS PERSONAS PERTENECIENTES EN EL NUCLEO FAMILIAR QUE CONSUMEN SUSTANCIAS PSICOACTIVAS DE LA PERSONA ENTREVISTADA, SECCIÓN 16 CONSUMO DE SUSTANCIAS PSICOACTIVAS DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_consumo_id')->unsigned();
            $table = CamposMagicos::magicos($table);
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_consumo_id')->references('id')->on('vsi_consumos');
            $table->unique(['parametro_id', 'vsi_consumo_id']);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE CONTIENE LAS EXPECTATIVAS DEL CONSUMO DE LAS SUSTANCIAS PSICOACTIVAS EXPERIMENTADAS POR LA PERSONA ENTREVISTADA, SECCIÓN 16 CONSUMO DE SUSTANCIAS PSICOACTIVAS DE LA FICHA SICOSOCIAL'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
