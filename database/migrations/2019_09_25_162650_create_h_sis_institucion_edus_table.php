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
            $table->string('s_nombre');
            $table->string('s_telefono');
            $table->string('s_email');
            $table->bigInteger('sis_municipio_id')->unsigned();
            $table->bigInteger('sis_departam_id')->unsigned();
            $table->bigInteger('i_prm_sector_id')->unsigned();
            $table->bigInteger('i_usr_rector_id')->unsigned();
            $table->bigInteger('i_usr_secretario_id')->unsigned();
            $table->bigInteger('i_usr_coord_academico_id')->unsigned();
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
