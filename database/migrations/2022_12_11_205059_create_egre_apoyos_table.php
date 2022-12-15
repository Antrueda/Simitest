<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgreApoyosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egre_apoyos', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('tipo_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('tipo_id')->references('id')->on('parametros');
            $table->string('nombreper', 100)->nullable()->comment('NOMBRE DE DIAGNOSTICO');
            $table->string('servicios', 100)->nullable()->comment('NOMBRE DE DIAGNOSTICO');
            $table->string('contacto', 100)->nullable()->comment('NOMBRE DE DIAGNOSTICO');
            $table->string('direccion', 100)->nullable()->comment('NOMBRE DE DIAGNOSTICO');
            $table->integer('egreso_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('egreso_id')->references('id')->on('s_egresos');    
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
        Schema::dropIfExists('egre_apoyos');
    }
}
