<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVihSubareas extends Migration
{
    private $tablaxxx = 'vih_subareas';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre',100)->comment('NOMBRE DE LA SUBAREA');
            $table->text('descripcion')->comment('DESCRIPCION DE LA SUBAREA');
            $table->integer('vih_area_id')->unsigned()->comment('TIPO DE AREA');
            
            $table->integer('estusuarios_id')->unsigned()->comment('JUSTIFICACION DEL ESTADO');
            $table->foreign('estusuarios_id')->references('id')->on('estusuarios');
            $table = CamposMagicos::magicos($table);

            $table->foreign('vih_area_id')->references('id')->on('vih_areas');
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('nombre',100)->comment('NOMBRE DE LA SUBAREA');
            $table->text('descripcion')->comment('DESCRIPCION DE LA SUBAREA');
            $table->integer('vih_area_id')->comment('TIPO DE AREA');
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
