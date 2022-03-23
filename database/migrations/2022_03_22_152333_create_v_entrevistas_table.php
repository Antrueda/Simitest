<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVEntrevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_entrevistas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('fecha')->comment('FECHA DILIGENCIAMIENTO DE LA ENTREVISTA');
            $table->longText('anteclinicos')->nullable()->comment('ANTECEDENTES CLINICOS');
            $table->longText('observacion')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('prm_consumo')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('prm_consumo')->references('id')->on('parametros');
            $table->integer('prm_autocui')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('prm_autocui')->references('id')->on('parametros');
            $table->integer('prm_habitos')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('prm_habitos')->references('id')->on('parametros');
            $table->integer('prm_instrum')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('prm_instrum')->references('id')->on('parametros');
            $table->integer('prm_patrone')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('prm_patrone')->references('id')->on('parametros');

            $table->longText('observacio2')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('anteocupaci')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('anteotiempo')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('prospeccion')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('obsefamilia')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('osexualidad')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->longText('conceptoocu')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->integer('sis_nnaj_id')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->integer('user_id')->unsigned()->nullable()->comment('CAMPO ID DEL NNAJ');
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
        Schema::dropIfExists('v_entrevistas');
    }
}
