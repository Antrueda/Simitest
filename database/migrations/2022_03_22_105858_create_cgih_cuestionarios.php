<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCgihCuestionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cgih_cuestionarios', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ');
            $table->date('fecha')->comment('FECHA DE APLICACION PERFIL VOCACIONAL');
            $table->text('observaciones')->comment('DESCRIPCION DEL PERFIL VOCACIONAL');
            $table->integer('habilidads_id')->unsigned()->comment('HABILIDADES');
            $table->text('concepto')->comment('CONCEPTO DEL PERFIL VOCACIONAL');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
            $table = CamposMagicos::magicos($table);

            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('habilidads_id')->references('id')->on('cgih_habilidads');
            $table->foreign('user_fun_id')->references('id')->on('users');
           

        });

        Schema::create('h_cgih_cuestionarios', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned()->comment('NNAJ');
            $table->date('fecha')->comment('FECHA DE APLICACION PERFIL VOCACIONAL');
            $table->text('observaciones')->comment('DESCRIPCION DEL PERFIL VOCACIONAL');
            $table->integer('habilidads_id')->unsigned()->comment('HABILIDADES');
            $table->text('concepto')->comment('CONCEPTO DEL PERFIL VOCACIONAL');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
            $table = CamposMagicos::magicos($table);

            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('habilidads_id')->references('id')->on('cgih_habilidads');
            $table->foreign('user_fun_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cgih_cuestionarios');
        Schema::dropIfExists('h_cgih_cuestionarios');
    }
}
