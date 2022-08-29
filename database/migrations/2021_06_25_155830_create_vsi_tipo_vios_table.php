<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVsiTipoViosTable extends Migration
{
    private $tablaxxx = 'vsi_tipo_vios';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create($this->tablaxxx, function (Blueprint $table) {
                $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
                $table->integer('tipo_id')->unsigned()->comment('CAMPO DE PARAMETRO DEL CONTEXTO');
                $table->integer('forma_id')->unsigned()->comment('CAMPO DE PARAMETRO DEL CONTEXTO');
                $table->integer('vsi_id')->unsigned()->comment('CAMPO DE ID VSI');
                $table->foreign('tipo_id')->references('id')->on('parametros');
                $table->foreign('forma_id')->references('id')->on('parametros');
                $table->foreign('vsi_id')->references('id')->on('vsis');
                $table = CamposMagicos::magicos($table);
           
        });
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
