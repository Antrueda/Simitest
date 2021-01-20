<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateHFiCsdVsiRedesActualesTable extends Migration
{
    private $tablaxxx = 'h_fi_csd_vsi_redes_actuales';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('prm_tipo_id')->unsigned();
            $table->string('nombre');
            $table->string('servicio', 4000);
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->foreign('prm_tipo_id')->references('id')->on('parametros');
            $table = CamposMagicos::h_magicos($table);
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
