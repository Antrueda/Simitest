<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIEstadoMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_estado_ms', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('imatrinnaj_id')->unsigned()->comment('LLAVE PRIMARIA A MATRICULA ACADEMIA NNAJ')->unique();;
            $table->date('fechdili')->comment('FECHA DE DILIGENCIAMIENTO');
            $table->integer('prm_estado_matri')->unsigned()->nullable()->comment('ESTADO DE LA MATRICULA');
            $table->integer('prm_motivo_reti')->unsigned()->nullable()->comment('MOTIVO DE RETIRO');
            $table->integer('prm_mot_aplazad')->unsigned()->nullable()->comment('MOTIVO DE RETIRO APLAZADO');
            $table->text('descripcion')->comment('DESCRIPCION DEL ESTADO DE MATRICULA');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
            $table->integer('user_crea_id')->unsigned()->comment('USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('USUARIO QUE EDITA');
            $table->timestamps();

            $table->foreign('imatrinnaj_id')->references('id')->on('i_matricula_nnajs');
            $table->foreign('prm_estado_matri')->references('id')->on('parametros');
            $table->foreign('prm_motivo_reti')->references('id')->on('parametros');
            $table->foreign('prm_mot_aplazad')->references('id')->on('parametros');
            $table->foreign('user_fun_id')->references('id')->on('users');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        // Schema::create('h_i_estado_ms', function (Blueprint $table) {
        //     $table->integer('id',10)->primary()->comment('LLAVE PRIMARIA A MATRICULA ACADEMIA NNAJ');
        //     $table->date('fechdili')->comment('FECHA DE DILIGENCIAMIENTO');
        //     $table->integer('prm_estado_matri')->unsigned()->nullable()->comment('ESTADO DE LA MATRICULA');
        //     $table->integer('prm_motivo_reti')->unsigned()->nullable()->comment('MOTIVO DE RETIRO');
        //     $table->integer('prm_mot_aplazad')->unsigned()->nullable()->comment('MOTIVO DE RETIRO APLAZADO');
        //     $table->text('descripcion')->comment('DESCRIPCION DEL ESTADO DE MATRICULA');
        //     $table->timestamps();

        //     $table->foreign('id')->references('id')->on('i_matricula_nnajs');
        //     $table->foreign('prm_estado_matri')->references('id')->on('parametros');
        //     $table->foreign('prm_motivo_reti')->references('id')->on('parametros');
        //     $table->foreign('prm_mot_aplazad')->references('id')->on('parametros');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('i_estado_m');
    }
}
