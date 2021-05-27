<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHSisInstitucionEdusTable extends Migration
{
    private $tablaxxx = 'h_sis_institucion_edus';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('s_nombre')->comment('CAMPO NOMBRE DE INSTITUCION');
            $table->string('s_telefono')->comment('CAMPO TELEFONO');
            $table->string('s_email')->comment('CAMPO EMAIL');
            $table->integer('sis_municipio_id')->unsigned()->comment('CAMPO ID MUNICIPIO');
            $table->integer('sis_departam_id')->unsigned()->comment('CAMPO ID DEPARTAMENTO');
            $table->integer('i_prm_sector_id')->unsigned()->comment('CAMPO PARAMETRO SECTOR');
            $table->integer('i_usr_rector_id')->unsigned()->comment('CAMPO ID RECTOR');
            $table->integer('i_usr_secretario_id')->unsigned()->comment('CAMPO ID SECRETARIO');
            $table->integer('i_usr_coord_academico_id')->unsigned()->comment('CAMPO ID COORDINADOR ACADEMMICO');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}
