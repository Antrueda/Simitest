<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdGeningAportasTable extends Migration
{
    private $tablaxxx = 'h_csd_gening_aportas';
    private $tablaxxx2 = 'h_csd_gening_dias';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('csd_id')->unsigned()->comment('CAMPO ID DE CONSULTA');
            $table->integer('prm_aporta_id')->unsigned()->comment('CAMPO PARAMETRO APORTA');
            $table->integer('mensual')->comment('CAMPO INGRESO MENSUAL');
            $table->integer('aporte')->comment('CAMPO APORTE');
            $table->Integer('jornada_entre')->unsigned()->comment('CAMPO JORNADA ENTRE');
            $table->integer('prm_entre_id')->unsigned()->comment('CAMPO PARAMETRO JORNADA');
            $table->Integer('jornada_a')->unsigned()->comment('CAMPO JORNADA HASTA');
            $table->integer('prm_a_id')->unsigned()->comment('CAMPO PARAMETRO JORNADA');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('parametro_id')->unsigned()->comment('CAMPO PARAMETRO DIAS');
            $table->integer('csd_geningreso_id')->unsigned()->comment('CAMPO GENERACION DE INGRESO');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
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
