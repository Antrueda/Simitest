<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFiCsdVsiRedesActualesTable extends Migration
{
    private $tablaxxx = 'fi_csd_vsi_redes_actuales';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('prm_tipo_id')->unsigned();
            $table->string('nombre');
            $table->longText('servicio');
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->foreign('prm_tipo_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS REDES DE APOYO ACTUALES DEL NNAJ PARA FI CSD Y VSI'");

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
