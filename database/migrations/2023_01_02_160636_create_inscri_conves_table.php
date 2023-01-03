<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriConvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscri_conves', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('fecha')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->date('fecha_inicio')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->date('fecha_final')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->integer('upi_id')->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('upi_id')->references('id')->on('sis_depens');
            $table->integer('conve_id')->nullable()->unsigned()->comment('CAMPO PARAMETRO UPI O DEPENDENCIA');
            $table->foreign('conve_id')->references('id')->on('parametros');
            $table->integer('progra_id')->nullable()->unsigned()->comment('ID DIAGNOSTICO');
            $table->foreign('progra_id')->references('id')->on('programas');
            $table->integer('tipop_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('tipop_id')->references('id')->on('tipoprogramas');
            $table->integer('modal_id')->nullable()->unsigned()->comment('OBSERVACION DEL ESTADO DEL REGISTROS');
            $table->foreign('modal_id')->references('id')->on('modalidads');
            $table->integer('sede_id')->unsigned()->comment('CAMPO DE ID DE LA ENTIDAD');
            $table->foreign('sede_id')->references('id')->on('sede_centros');

            $table->string('numficha', 200)->nullable()->comment('NOMBRE DE DIAGNOSTICO');
            $table->integer('user_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('inscri_conves');
    }
}
