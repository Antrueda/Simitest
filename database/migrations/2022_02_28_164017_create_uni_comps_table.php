<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniCompsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        
        Schema::create('uni_comps', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('valora_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('valora_id')->references('id')->on('valora_comps');
            $table->integer('modulo_id')->unsigned()->nullable()->comment('CAMPO ID DE MODULO');
            $table->foreign('modulo_id')->references('id')->on('modulos');
            $table->integer('unidad_id')->unsigned()->nullable()->comment('CAMPO ID DE UNIDAD');
            $table->foreign('unidad_id')->references('id')->on('denominas');
            $table->integer('conocimiento')->comment('CAMPO NUMERO DE CALIFICACION DE CONOCIMIENTO');
            $table->integer('desempeno')->comment('CAMPO NUMERO DE CALIFICACION DE DESEMPEÑO');
            $table->integer('producto')->comment('CAMPO NUMERO DE CALIFICACION DE PRODUCTO');
            $table->string('concepto')->comment('CAMPO DE CONCEPTO');
            
        
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
        Schema::dropIfExists('uni_comps');
    }
}
