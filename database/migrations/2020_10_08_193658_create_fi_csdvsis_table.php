<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFiCsdvsisTable extends Migration
{
    private $tablaxxx = 'fi_csdvsis';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vsi_id')
            ->unsigned()->nullable()
            ->comment('VALORACION SICOSOCIAL INICIAL QUE ACTUALIZA LOS DATOS BASICOS DE LA FICHA DE INGRESO');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->bigInteger('csd_id')
            ->unsigned()->nullable()
            ->comment('CONSULTA SOCIAL EN DOMICILIO QUE ACTUALIZA LOS DATOS BASICOS DE LA FICHA DE INGRESO');
            $table->foreign('csd_id')->references('id')->on('csds');
            $table->bigInteger('fi_datos_basico_id')
            ->unsigned()
            ->comment('FICHA DE INGRESO A LA QUE PERTENECE LA ACTUALIZACION');
            $table->foreign('fi_datos_basico_id')->references('id')->on('fi_datos_basicos');
            $table = CamposMagicos::magicos($table);

        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL COMPONENTE FAMILIAR QUE RESPONDE LA CONSULTA SOCIAL EN DOMICILIO'");

        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vsi_id')
            ->unsigned()->nullable()
            ->comment('VALORACION SICOSOCIAL INICIAL QUE ACTUALIZA LOS DATOS BASICOS DE LA FICHA DE INGRESO');
            $table->bigInteger('csd_id')
            ->unsigned()->nullable()
            ->comment('CONSULTA SOCIAL EN DOMICILIO QUE ACTUALIZA LOS DATOS BASICOS DE LA FICHA DE INGRESO');
            $table->bigInteger('fi_datos_basico_id')
            ->unsigned()
            ->comment('FICHA DE INGRESO A LA QUE PERTENECE LA ACTUALIZACION');
            $table = CamposMagicos::h_magicos($table);

        });
        DB::statement("ALTER TABLE `h_{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_'.$this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}