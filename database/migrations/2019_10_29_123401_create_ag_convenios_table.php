<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAgConveniosTable extends Migration
{
    private $tablaxxx = 'ag_convenios';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('s_convenio')->comment('NOMBRE DEL CONVENIO');
            $table->integer('i_prm_tconvenio_id')->unsigned()->comment('TIPO DE CONVENIO');
            $table->integer('i_prm_entidad_id')->unsigned()->comment('TIPO DE ENTIDAD');
            $table->string('s_descripcion',4000)->comment('DESCRIPCION DEL CONVENIO');;
            $table->integer('i_nconvenio')->comment('NUMERO DE CONVENIO');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->dateTime('d_subscrip')->comment('FECHA DE SUBSCRIPCION');
            $table->dateTime('d_terminac')->comment('FECHA DE TERMINACION');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('i_prm_tconvenio_id')->references('id')->on('parametros');
            $table->foreign('i_prm_entidad_id')->references('id')->on('parametros');

        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA INFORMACION DETALLADA DE LOS CONVENIOS REGISTRADOS EN EL SISTEMA UTILIZADOS EN LAS ACCIONES GRUPALES'");
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
