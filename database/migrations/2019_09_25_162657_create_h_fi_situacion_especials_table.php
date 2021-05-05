<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiSituacionEspecialsTable extends Migration
{
    private $tablaxxx = 'h_fi_situacion_especials';
    private $tablaxxx2 = 'h_fi_riesgo_escnnas';
    private $tablaxxx3 = 'h_fi_situ_vulnera';
    private $tablaxxx4 = 'h_fi_victima_escnnas';
    private $tablaxxx5 = 'h_fi_razon_iniciados';
    private $tablaxxx6 = 'h_fi_razon_continuas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO DE ID NNAJ');
            $table->integer('i_prm_tipo_id')->nullable()->unsigned()->comment('CAMPO DE TIPO DE SITUACION');
            $table->integer('prm_presconf_id')->nullable()->unsigned()->comment('13.4 ES USTED JOVEN EN PRESUNTO CONFLICTO CON LA LEY?');
            $table->integer('i_tiempo')->nullable()->comment('CAMPO DE TIEMPO');
            $table->integer('i_prm_ttiempo_id')->nullable()->unsigned()->comment('CAMPO DE TIPO DE TIEMPO');

            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx3, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_situacion_especial_id')->unsigned()->comment('CAMPO ID DE SITUACION ESPECIAL');
            $table->integer('prm_situacion_vulnera_id')->unsigned()->comment('CAMPO PARAMETRO SITUACION VULNERABLE');
           $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx3}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx3}'");

        Schema::create($this->tablaxxx4, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_situacion_especial_id')->unsigned()->comment('CAMPO ID DE SITUACION ESPECIAL');
            $table->integer('i_prm_victima_escnna_id')->unsigned()->comment('CAMPO PARAMETRO VICTIMA ESCNNA');

            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx4}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx4}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_situacion_especial_id')->unsigned()->comment('CAMPO ID DE SITUACION ESPECIAL');
            $table->integer('i_prm_riesgo_escnna_id')->unsigned()->comment('CAMPO PARAMETRO RIESGO DE ESCNNA');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");

        Schema::create($this->tablaxxx5, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_situacion_especial_id')->unsigned()->comment('CAMPO ID DE SITUACION ESPECIAL');
            $table->integer('i_prm_iniciado_id')->unsigned()->comment('CAMPO PARAMETRO RAZONES ESTA INICIADO EN ALGUNA SITUACION ESPECIAL');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx5}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx5}'");

        Schema::create($this->tablaxxx6, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_situacion_especial_id')->unsigned()->comment('CAMPO ID DE SITUACION ESPECIAL');
            $table->integer('i_prm_continua_id')->unsigned()->comment('CAMPO PARAMETRO RAZONES EN QUE LE DA CONTINUIDAD EN ALGUNA SITUACION ESPECIAL');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx6}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx6}'");
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
