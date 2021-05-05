<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVsiRelSocialesTable extends Migration
{
    private $tablaxxx = 'vsi_rel_sociales';
    private $tablaxxx2 = 'vsi_relsol_facilita';
    private $tablaxxx3 = 'vsi_relsol_dificulta';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE VALORACION');
            $table->longText('descripcion')->comment('CAMPO DESCRIPCION');
            $table->integer('prm_dificultad_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DIFICULTAD');
            $table->longText('completa')->nullable()->comment('CAMPO ABIERTO DESCRIPCION COMPLETA DE SI MISMO');



            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_dificultad_id')->references('id')->on('parametros');

            $table = CamposMagicos::magicos($table);

        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE CONTIENE LAS RELACIONES FAMILIARES DE LA PERSONA ENTREVISTADA, SECCION 6 RELACIONES SOCIALES DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE FACTORES QUE FACILITAN INTERACTUAR');
            $table->integer('vsi_relsocial_id')->unsigned()->comment('CAMPO ID RELACION SOCIAL');

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_relsocial_id')->references('id')->on('vsi_rel_sociales');
            $table->unique(['parametro_id', 'vsi_relsocial_id']);
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE CONTIENE EL LISTADO DE LOS FACTORES QUE FACILITAN INTERACTUAR CON OTRAS PERSONAS, PREGUNTA 6.1 SECCION 6 RELACIONES SOCIALES DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE FACTORES QUE DIFICULTAN INTERACTUAR');
            $table->integer('vsi_relsocial_id')->unsigned()->comment('CAMPO ID RELACION SOCIAL');

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_relsocial_id')->references('id')->on('vsi_rel_sociales');
            $table->unique(['parametro_id', 'vsi_relsocial_id']);
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE CONTIENE EL LISTADO DE OS FACTORES QUE DIFICULTAN INTERACTUAR CON OTRAS PERSONAS, PREGUNTA 6.3 SECCION 6 RELACIONES SOCIALES DE LA FICHA SICOSOCIAL'");
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
