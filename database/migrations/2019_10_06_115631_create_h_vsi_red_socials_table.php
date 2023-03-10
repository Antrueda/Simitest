<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiRedSocialsTable extends Migration
{
    private $tablaxxx = 'h_vsi_red_socials';
    private $tablaxxx2 = 'h_vsi_redsoc_motivo';
    private $tablaxxx3 = 'h_vsi_redsoc_acceso';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE LA VALORACION');
            $table->integer('prm_presenta_id')->unsigned()->comment('CAMPO PRESENTA ALGUNA RED DE APOYO');
            $table->integer('prm_protector_id')->unsigned()->nullable()->comment('CAMPO RED DE APOYO CON FACTOR PROTECTOR');
            $table->integer('prm_dificultad_id')->unsigned()->comment('CAMPO PRESENTA DIFICULTADES PARA ACCEDER A UNA RED DE APOYO');
            $table->integer('prm_quien_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO QUIEN');
            $table->integer('prm_ruptura_genero_id')->unsigned()->comment('CAMPO EXISTE RUPTURA EN REDES DE APOYO POR GENERO ');
            $table->integer('prm_ruptura_sexual_id')->unsigned()->comment('CAMPO EXISTE RUPTURA EN REDES DE APOYO POR ORIENTACION SEXUAL ');
            $table->integer('prm_acceso_id')->unsigned()->comment('CAMPO HA TENIDO RESTRICCION DE ACCESO A LAS REDES DE APOYO');
            $table->integer('prm_servicio_id')->unsigned()->comment('CAMPO RECIBIO SERVICIOS DE ALGUNA RED DE APOYO');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO MOTIVOS DE RESTRICCIONES ');
            $table->integer('vsi_redsocial_id')->unsigned()->comment('CAMPO DE ID REDES SOCIALES');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO MOTIVOS DE RESTRICCION A REDES SOCIALES DE APOYO');
            $table->integer('vsi_redsocial_id')->unsigned()->comment('CAMPO DE ID REDES SOCIALES');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");
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
