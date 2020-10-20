<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCsdDinFamiliarsTable extends Migration
{
    private $tablaxxx = 'csd_din_familiars';
    private $tablaxxx2 = 'csd_dinfam_antecedente';
    private $tablaxxx3 = 'csd_dinfam_problema';
    private $tablaxxx4 = 'csd_dinfam_norma';
    private $tablaxxx5 = 'csd_dinfam_establecen';
    private $tablaxxx6 = 'csd_dinfam_incumple';
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
            $table->binary('descripcion')->nullable();
            $table->binary('relevantes');
            $table->string('s_doc_adjunto', 150)->nullable();
            $table->bigInteger('prm_familiar_id')->nullable()->unsigned();
            $table->bigInteger('prm_hogar_id')->nullable()->unsigned();
            $table->binary('descripcion_0');
            $table->bigInteger('prm_bogota_id')->unsigned();
            $table->bigInteger('prm_traslado_id')->unsigned()->nullable();
            $table->string('jefe1')->nullable();
            $table->bigInteger('prm_jefe1_id')->unsigned()->nullable();
            $table->string('jefe2')->nullable();
            $table->bigInteger('prm_jefe2_id')->unsigned()->nullable();
            $table->binary('descripcion_1');
            $table->bigInteger('prm_cuidador_id')->unsigned()->nullable();
            $table->binary('descripcion_2');
            $table->binary('afronta');
            $table->bigInteger('prm_norma_id')->unsigned();
            $table->bigInteger('prm_conoce_id')->unsigned()->nullable();
            $table->binary('observacion')->nullable();;
            $table->bigInteger('prm_actuan_id')->unsigned()->nullable();
            $table->string('porque', 4000)->nullable();
            $table->bigInteger('prm_solucion_id')->unsigned();
            $table->bigInteger('prm_problema_id')->unsigned();
            $table->bigInteger('prm_destaca_id')->unsigned();
            $table->bigInteger('prm_positivo_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->foreign('prm_familiar_id')->references('id')->on('parametros');
            $table->foreign('prm_hogar_id')->references('id')->on('parametros');
            $table->foreign('prm_bogota_id')->references('id')->on('parametros');
            $table->foreign('prm_traslado_id')->references('id')->on('parametros');
            $table->foreign('prm_jefe1_id')->references('id')->on('parametros');
            $table->foreign('prm_jefe2_id')->references('id')->on('parametros');
            $table->foreign('prm_cuidador_id')->references('id')->on('parametros');
            $table->foreign('prm_norma_id')->references('id')->on('parametros');
            $table->foreign('prm_conoce_id')->references('id')->on('parametros');
            $table->foreign('prm_actuan_id')->references('id')->on('parametros');
            $table->foreign('prm_solucion_id')->references('id')->on('parametros');
            $table->foreign('prm_problema_id')->references('id')->on('parametros');
            $table->foreign('prm_destaca_id')->references('id')->on('parametros');
            $table->foreign('prm_positivo_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA DINAMICA FAMILIAR DE LA PERSONA ENTREVISTADA, SECCION 6 DINAMICA FAMILIAR DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_dinfamiliar_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_dinfamiliar_id')->references('id')->on('csd_din_familiars');
            $table->unique(['parametro_id', 'csd_dinfamiliar_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE LOS ANTECEDENTES DE PROBLEMAS SOCIALES ASOCIADOS CON LA FAMILIA ACTUAL, PREGUNTA 6.1 SECCION 6 DINAMICA FAMILIAR DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_dinfamiliar_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_dinfamiliar_id')->references('id')->on('csd_din_familiars');
            $table->unique(['parametro_id', 'csd_dinfamiliar_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA EL LISTADO DE LAS PRINCIPALES PROBLEMATICAS ASOCIADAS CON LA FAMILIA ACTUAL DE LA PERSONA ENTREVISTADA, PREGUNTA 6.13 SECCION 6 DINAMICA FAMILIAR DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_dinfamiliar_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_dinfamiliar_id')->references('id')->on('csd_din_familiars');
            $table->unique(['parametro_id', 'csd_dinfamiliar_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA EL LISTADO DE LAS ACTUACIONES DE LOS MIEMBROS DE LA FAMILIA FRENTE A LAS NORMAS DE LA PERSONA ENTREVISTADA, PREGUNTA 6.20 SECCION 6 DINAMICA FAMILIAR DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_dinfamiliar_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_dinfamiliar_id')->references('id')->on('csd_din_familiars');
            $table->unique(['parametro_id', 'csd_dinfamiliar_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA EL LISTADO DE PERSONAS QUE ESTABLECEN LAS NORMAS EN EL HOGAR DE LA PERSONA ENTREVISTADA, PREGUNTA 6.17 SECCION 6 DINAMICA FAMILIAR DE CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('csd_dinfamiliar_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id')->references('id')->on('parametros');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('csd_dinfamiliar_id')->references('id')->on('csd_din_familiars');
            $table->unique(['parametro_id', 'csd_dinfamiliar_id']);
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA EL LISTADO DE LAS ACTUACIONES CUANDO NO SE CUMPLEN LAS REGLAS EN LA FAMILIA DE LA PERSONA ENTREVISTADA, PREGUNTA 6.23 SECCION 6 DINAMICA FAMILIAR DE CONSULTA SOCIAL EN DOMICILIO'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
