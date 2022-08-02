<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFpoPerfilOcupacionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fpo_perfil_ocupacionals', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('fecha_registro')->nullable()->comment('PARAMETRO fecha registro');
            $table->integer('resultado_text', 3)->default(0);
            $table->string('concepto_perfil',4000)->nullable()->comment('CONCEPTO DEL TEXT');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');

            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
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
        Schema::dropIfExists('fpo_perfil_ocupacionals');
    }
}
