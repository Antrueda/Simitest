<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvfPerfilVocas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvf_perfil_vocas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ');
            $table->date('fecha')->comment('FECHA DE APLICACION PERFIL VOCACIONAL');
            $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');
            $table->text('observaciones')->comment('DESCRIPCION DEL PERFIL VOCACIONAL');
            $table->text('concepto')->comment('CONCEPTO DEL PERFIL VOCACIONAL');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
            
            $table = CamposMagicos::magicos($table);

            $table->foreign('user_fun_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');

        });

        Schema::create('h_pvf_perfil_vocas', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ');
            $table->date('fecha')->comment('FECHA DE APLICACION PERFIL VOCACIONAL');
            $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');
            $table->text('observaciones')->comment('DESCRIPCION DEL PERFIL VOCACIONAL');
            $table->text('concepto')->comment('CONCEPTO DEL PERFIL VOCACIONAL');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
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
        Schema::dropIfExists('pvf_perfil_vocas');
        Schema::dropIfExists('h_pvf_perfil_vocas');
    }
}
