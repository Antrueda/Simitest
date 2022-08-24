<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVctoItems extends Migration
{
    private $tablaxxx = 'vcto_items';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre',150)->comment('NOMBRE DEL ITEM A EVALUAR');
            $table->integer('vcto_subarea_id')->unsigned()->comment('TIPO DE SUBAREA AL QUE PERTENECE');
            $table->integer('estusuarios_id')->unsigned()->comment('JUSTIFICACION DEL ESTADO');
            $table = CamposMagicos::magicos($table);

            $table->foreign('vcto_subarea_id')->references('id')->on('vcto_subareas');
            $table->foreign('estusuarios_id')->references('id')->on('estusuarios');
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre',150)->comment('NOMBRE DEL ITEM A EVALUAR');
            $table->integer('vcto_subarea_id')->comment('TIPO DE SUBAREA AL QUE PERTENECE');
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
