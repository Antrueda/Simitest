<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiRedSocialsTable extends Migration
{
    private $tablaxxx = 'vsi_red_socials';
    private $tablaxxx2 = 'vsi_redsoc_motivo';
    private $tablaxxx3 = 'vsi_redsoc_acceso';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('vsi_id')->unsigned()->comment('CAMPO ID DE LA VALORACION');
            $table->bigInteger('prm_presenta_id')->unsigned()->comment('CAMPO PRESENTA ALGUNA RED DE APOYO');
            $table->bigInteger('prm_protector_id')->unsigned()->nullable()->comment('CAMPO RED DE APOYO CON FACTOR PROTECTOR');
            $table->bigInteger('prm_dificultad_id')->unsigned()->comment('CAMPO PRESENTA DIFICULTADES PARA ACCEDER A UNA RED DE APOYO');
            $table->bigInteger('prm_quien_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO QUIEN');
            $table->bigInteger('prm_ruptura_genero_id')->unsigned()->comment('CAMPO EXISTE RUPTURA EN REDES DE APOYO POR GENERO ');
            $table->bigInteger('prm_ruptura_sexual_id')->unsigned()->comment('CAMPO EXISTE RUPTURA EN REDES DE APOYO POR ORIENTACION SEXUAL ');
            $table->bigInteger('prm_acceso_id')->unsigned()->comment('CAMPO HA TENIDO RESTRICCION DE ACCESO A LAS REDES DE APOYO');
            $table->bigInteger('prm_servicio_id')->unsigned()->comment('CAMPO RECIBIO SERVICIOS DE ALGUNA RED DE APOYO');

            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_presenta_id')->references('id')->on('parametros');
            $table->foreign('prm_protector_id')->references('id')->on('parametros');
            $table->foreign('prm_dificultad_id')->references('id')->on('parametros');
            $table->foreign('prm_quien_id')->references('id')->on('parametros');
            $table->foreign('prm_ruptura_genero_id')->references('id')->on('parametros');
            $table->foreign('prm_ruptura_sexual_id')->references('id')->on('parametros');
            $table->foreign('prm_acceso_id')->references('id')->on('parametros');
            $table->foreign('prm_servicio_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES LAS REDES SOCIALES DE APOYO DE LA PERSONA ENTREVISTADA, SECCIÓN 7 DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('parametro_id')->unsigned()->comment('CAMPO PARAMETRO MOTIVOS DE RESTRICCIONES ');
            $table->bigInteger('vsi_redsocial_id')->unsigned()->comment('CAMPO DE ID REDES SOCIALES');

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_redsocial_id')->references('id')->on('vsi_red_socials');
            $table->unique(['parametro_id', 'vsi_redsocial_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE MOTIVOS DE LAS RESTRICCIONES DE LA PERSONA ENTREVISTADA, PREGUNTA 7.1.4 SECCIÓN 7 DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('parametro_id')->unsigned()->comment('CAMPO PARAMETRO MOTIVOS DE RESTRICCION A REDES SOCIALES DE APOYO');
            $table->bigInteger('vsi_redsocial_id')->unsigned()->comment('CAMPO DE ID REDES SOCIALES');

            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_redsocial_id')->references('id')->on('vsi_red_socials');
            $table->unique(['parametro_id', 'vsi_redsocial_id']);
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA EL LISTADO DE MOTIVOS DE RESTRICCION DE ACCESO DE REDES SOCIALES DE APOYO DE LA PERSONA ENTREVISTADA, PREGUNTA 7.1.8 SECCIÓN 7 DE LA FICHA SICOSOCIAL'");
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
