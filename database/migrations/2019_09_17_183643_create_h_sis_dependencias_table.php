<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHSisDependenciasTable extends Migration
{
    private $tablaxxx = 'h_sis_dependencias';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->unique();
            $table->bigInteger('i_prm_cvital_id')->unsigned();
            $table->bigInteger('i_prm_tdependen_id')->unsigned();
            $table->bigInteger('sis_dependencia_id')->unsigned()->nullable();
            $table->bigInteger('i_prm_sexo_id')->unsigned();
            $table->string('s_direccion');
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->bigInteger('sis_municipio_id')->unsigned();
            $table->bigInteger('sis_localidad_id')->unsigned();
            $table->bigInteger('sis_barrio_id')->unsigned();
            $table->string('s_telefono');
            $table->string('s_correo');
            $table->string('i_tiempo');
            $table->string('s_observacion', 3000);
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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