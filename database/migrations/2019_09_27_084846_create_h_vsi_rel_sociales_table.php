<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiRelSocialesTable extends Migration
{
    private $tablaxxx = 'h_vsi_rel_sociales';
    private $tablaxxx2 = 'h_vsi_relsol_facilita';
    private $tablaxxx3 = 'h_vsi_relsol_dificulta';
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
            $table->string('descripcion')->comment('CAMPO DESCRIPCION');
            $table->integer('prm_dificultad_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO DIFICULTAD');
            $table->string('completa')->nullable()->comment('CAMPO ABIERTO DESCRIPCION COMPLETA DE SI MISMO');

            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE FACTORES QUE FACILITAN INTERACTUAR');
            $table->integer('vsi_relsocial_id')->unsigned()->comment('CAMPO ID RELACION SOCIAL');
            $table->unique(['parametro_id', 'vsi_relsocial_id']);
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE FACTORES QUE DIFICULTAN INTERACTUAR');
            $table->integer('vsi_relsocial_id')->unsigned()->comment('CAMPO ID RELACION SOCIAL');
            $table->unique(['parametro_id', 'vsi_relsocial_id']);
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
