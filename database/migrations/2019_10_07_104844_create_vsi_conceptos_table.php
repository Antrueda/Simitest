<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiConceptosTable extends Migration
{
    private $tablaxxx = 'vsi_conceptos';
    private $tablaxxx2 = 'vsi_concep_red';
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
            $table->string('concepto', 4000);
            $table->bigInteger('prm_ingreso_id')->unsigned()->nullable();
            $table->string('porque', 4000)->nullable();
            $table->string('cual', 120)->nullable();
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_ingreso_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA IMPRESIÓN DIAGNÓSTICA Y EL ANÁLISIS SOCIAL DE LA PERSONA ENTREVISTADA CON LA VALORACIÓN SICOSOCIAL'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_concepto_id')->unsigned();
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_concepto_id')->references('id')->on('vsi_conceptos');
            $table->unique(['parametro_id', 'vsi_concepto_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LA RED INSTITUCIONAL DE LA PERSONA ENTREVISTADA CON LA VALORACIÓN SICOSOCIAL'");
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
