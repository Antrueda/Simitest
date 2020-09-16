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
            $table->bigIncrements('id');
            $table->integer('i_tiempo');
            $table->bigInteger('sis_entidad_id')->unsigned();
            $table->string('s_servicio');
            $table->bigInteger('i_prm_tiempo_id')->unsigned();
            $table->bigInteger('i_prm_anio_prestacion_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned(); //->comment('NNAJ AL QUE SE LE ASIGNA LA RESIDENCIA');
            $table = CamposMagicos::h_magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned(); //->comment('NNAJ AL QUE SE LE ASIGNA LA RESIDENCIA');
            $table->bigInteger('i_prm_tipo_red_id')->unsigned();
            $table->string('s_nombre_persona');
            $table->string('s_servicio');
            $table->string('s_telefono')->nullable();
            $table->string('s_direccion')->nullable();;
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