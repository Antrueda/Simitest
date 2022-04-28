<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatricTecniConvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matric_tecni_conves', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->integer('convenio_prog_id')->unsigned()->nullable()->comment('CAMPO ID DE ACTIVIDADE');
           
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('convenio_prog_id')->references('id')->on('convenio_progs');
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
        Schema::table('asisema_matriculas', function (Blueprint $table) {
            $table->dropForeign('ASIS_MATRICU_MAT_CONVE_ID_FK');
            $table->dropForeign('ASISE_MATRICUL_MATR_TEC_ID_FK');
        });
        Schema::dropIfExists('matric_tecni_conves');
    }
}
