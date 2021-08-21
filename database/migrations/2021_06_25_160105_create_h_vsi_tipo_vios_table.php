<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHVsiTipoViosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_vsi_tipo_vios', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('tipo_id')->unsigned()->comment('CAMPO DE PARAMETRO DEL CONTEXTO');
            $table->integer('forma_id')->unsigned()->comment('CAMPO DE PARAMETRO DEL CONTEXTO');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO DE ID VSI');
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
        Schema::dropIfExists('h_vsi_tipo_vios');
    }
}
