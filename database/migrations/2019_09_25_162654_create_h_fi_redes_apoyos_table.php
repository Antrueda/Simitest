<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiRedesApoyosTable extends Migration
{
    private $tablaxxx = 'h_fi_red_apoyo_antecedentes';
    private $tablaxxx2 = 'h_fi_red_apoyo_actuals';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_tiempo')->comment('CAMPO TIEMPO');
            $table->integer('sis_entidad_id')->unsigned()->comment('CAMPO ID DE ENTIDAD');
            $table->string('s_servicio')->comment('CAMPO TEXTO DE SERVICIO');
            $table->integer('i_prm_tiempo_id')->unsigned()->comment('CAMPO PARAMETRO TIEMPO');
            $table->integer('i_prm_anio_prestacion_id')->unsigned()->comment('CAMPO AÑO PRESTACION DE SERVICIOS');
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA RED DE APOYO');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ AL QUE SE LE ASIGNA LA RED DE APOYO');
            $table->integer('i_prm_tipo_red_id')->unsigned()->comment('CAMPO PARAMETRO TIPO DE RED');
            $table->string('s_nombre_persona')->comment('CAMPO NOMBRE');
            $table->string('s_servicio')->comment('CAMPO NOMBRE DEL SERVICIO');
            $table->string('s_telefono')->nullable()->comment('CAMPO TELEFONO');
            $table->string('s_direccion')->nullable()->comment('CAMPO DIRECCION');
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