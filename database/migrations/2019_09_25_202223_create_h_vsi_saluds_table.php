<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiSaludsTable extends Migration
{
    private $tablaxxx = 'h_vsi_saluds';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO DE ID VALORACION');
            $table->integer('prm_atencion_id')->unsigned()->comment('CAMPO DE TIPO DE ATENCION');
            $table->integer('prm_condicion_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO CONDICION');
            $table->integer('prm_medicamento_id')->unsigned()->comment('CAMPO DE PARAMETRO MEDICAMENTO');
            $table->integer('prm_prescripcion_id')->unsigned()->nullable()->comment('CAMPO DE PARAMETRO PRESCRIPCION');
            $table->integer('prm_sexual_id')->unsigned()->comment('CAMPO HA INICIADO VIDA SEXUAL');
            $table->integer('prm_activa_id')->unsigned()->nullable()->comment('CAMPO VIDA SEXUAL ACTIVA');
            $table->integer('prm_embarazo_id')->unsigned()->nullable()->comment('CAMPO HA TENIDO EMBARAZOS');
            $table->integer('prm_hijo_id')->unsigned()->nullable()->comment('CAMPO DE SI TIENE HIJOS');
            $table->integer('prm_interrupcion_id')->unsigned()->nullable()->comment('CAMPO PRESENTADO INTERRUPCION EN EMBARAZO');
            $table->string('medicamento')->nullable()->comment('CAMPO ABIERTO MEDICAMENTO');
            $table->string('descripcion',4000)->nullable()->comment('CAMPO ABIERTO DESCRIPCION');
            $table->integer('edad')->unsigned()->nullable()->comment('CAMPO EDAD QUE INICIO SU VIDA SEXUAL');
            $table->integer('embarazo')->unsigned()->nullable()->comment('CAMPO SEMANAS DE EMBARAZO');
            $table->integer('hijo')->unsigned()->nullable()->comment('CAMPO NUMERICO HIJOS');
            $table->integer('interrupcion')->unsigned()->nullable()->comment('CAMPO CUANTAS INTERRUPCIONES');
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
