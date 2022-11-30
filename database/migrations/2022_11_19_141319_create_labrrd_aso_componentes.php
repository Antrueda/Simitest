<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabrrdAsoComponentes extends Migration
{
    private $tablaxxx = 'labrrd_aso_componentes';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('componente_id')->comment('RELACION CON LAB-RRD componentes');
            $table->string('tipo_valoracion', 50)->comment('tipo de valoracion lab-rrd');
            $table->string('tipo_componente', 50)->comment('tipo de componente valoracion lab-rrd');
            $table->integer('estusuarios_id')->comment('JUSTIFICACION DEL ESTADO');
            $table = CamposMagicos::magicos($table);

            $table->foreign('componente_id')->references('id')->on('labrrd_componentes');
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('componente_id')->comment('RELACION CON LAB-RRD componentes');
            $table->string('tipo_valoracion', 50)->comment('tipo de valoracion lab-rrd');
            $table->string('tipo_componente', 50)->comment('tipo de componente valoracion lab-rrd');
            $table->integer('estusuarios_id')->comment('JUSTIFICACION DEL ESTADO');
            $table = CamposMagicos::h_magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_' . $this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
