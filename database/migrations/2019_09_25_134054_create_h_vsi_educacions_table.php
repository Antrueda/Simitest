<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiEducacionsTable extends Migration
{
    private $tablaxxx = 'h_vsi_educacions';
    private $tablaxxx2 = 'h_vsi_edu_causa';
    private $tablaxxx3 = 'h_vsi_edu_fortaleza';
    private $tablaxxx4 = 'h_vsi_edu_dificultad';
    private $tablaxxx5 = 'h_vsi_edu_diftipo_a';
    private $tablaxxx6 = 'h_vsi_edu_diftipo_b';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO DE ID DE VALORACION');
            $table->integer('prm_estudia_id')->unsigned()->comment('CAMPO PARAMETRO ESTUDIA ');
            $table->Integer('dia')->unsigned()->nullable()->comment('CAMPO DIA');
            $table->Integer('mes')->unsigned()->nullable()->comment('CAMPO MES');
            $table->Integer('ano')->unsigned()->nullable()->comment('CAMPO AÑO');
            $table->integer('prm_motivo_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO DEL MOTIVO QUE NO ESTUDIA');
            $table->integer('prm_rendimiento_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO DE RENDIMIENTO');
            $table->integer('prm_dificultad_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO DE DIFICULTAD');
            $table->integer('prm_leer_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SI SABE LEER');
            $table->integer('prm_escribir_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO SI SABE ESCRIBIR');
            $table->string('descripcion',4000)->nullable()->comment('CAMPO DE DESCRIPCION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO DE CAUSAS');
            $table->integer('vsi_educacion_id')->unsigned()->comment('CAMPO DE ID DE EDUCACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO DE FORTALEZAS');
            $table->integer('vsi_educacion_id')->unsigned()->comment('CAMPO DE ID DE EDUCACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO DE DIFICULTADES');
            $table->integer('vsi_educacion_id')->unsigned()->comment('CAMPO DE ID DE EDUCACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO DE DIFICULTADES EXPERIMENTADAS');
            $table->integer('vsi_educacion_id')->unsigned()->comment('CAMPO DE ID DE EDUCACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx5}'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('parametro_id')->unsigned()->comment('CAMPO DE PARAMETRO TIPO DE DIFICULTADES');
            $table->integer('vsi_educacion_id')->unsigned()->comment('CAMPO DE ID DE EDUCACION');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx6}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx3);
        Schema::dropIfExists($this->tablaxxx4);
        Schema::dropIfExists($this->tablaxxx5);
        Schema::dropIfExists($this->tablaxxx6);
        Schema::dropIfExists($this->tablaxxx);
    }
}
