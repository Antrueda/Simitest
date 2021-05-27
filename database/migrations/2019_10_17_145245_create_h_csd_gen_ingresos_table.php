<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHCsdGenIngresosTable extends Migration
{
    private $tablaxxx = 'h_csd_gen_ingresos';
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
            $table->longText('observacion')->nullable()->comment('CAMPO DE TEXTO OBSERVACIONES');
            $table->integer('prm_actividad_id')->unsigned()->comment('CAMPO PARAMETRO TIPO DE ACTIVIDAD');
            $table->string('trabaja')->nullable()->comment('CAMPO TEXTO TRABAJO FORMAL');
            $table->integer('prm_informal_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE TRABAJO INFORMAL');
            $table->integer('prm_otra_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO ACTIVIDAD');
            $table->integer('prm_laboral_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE RELACION LABORAL');
            $table->integer('prm_frecuencia_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO TIPO DE FRENCUENCIA');
            $table->integer('intensidad')->unsigned()->nullable()->comment('CAMPO INTENSIDAD');
            $table->integer('prm_dificultad_id')->unsigned()->comment('CAMPO PARAMETRO DIFICULTAD');
            $table->longText('razon')->nullable()->comment('CAMPO DE TEXTO RAZON');
            $table->integer('prm_tipofuen_id')->unsigned()->comment('TIPO DE FUENTE DE LA INFORMACION');
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
