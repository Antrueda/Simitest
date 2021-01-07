<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSalidaJovenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private $tablaxxx = 'salida_jovenes';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_dato_basico_id')->unsigned();
            $table->bigInteger('ai_salmay_id')->unsigned();
            $table->foreign('ai_salmay_id')->references('id')->on('ai_salida_mayores');
            $table->foreign('fi_dato_basico_id')->references('id')->on('fi_datos_basicos');
            $table = CamposMagicos::magicos($table);
            ;
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA QUIENES ASISTEN A LAS ACTIVIDADES ASOCIADOS A LOS TALLERES DENTRO DE LAS ACCIONES GRUPALES'");
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
