<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ag_actividads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('d_registro');
            $table->bigInteger('area_id')->unsigned();
            $table->bigInteger('sis_deporigen_id')->unsigned();
            $table->bigInteger('sis_depdestino_id')->unsigned();
            $table->bigInteger('ag_tema_id')->unsigned();
            $table->bigInteger('i_prm_lugar_id')->unsigned();
            $table->bigInteger('ag_taller_id')->unsigned();
            $table->bigInteger('ag_sttema_id')->unsigned();
            $table->bigInteger('i_prm_dirig_id')->unsigned();
            $table->text('s_prm_espac', 120)->nullable();
            $table->bigInteger('sis_entidad_id')->unsigned();
            $table->text('s_introduc',4000);
            $table->text('s_justific',4000);
            $table->text('s_objetivo',4000);
            $table->text('s_metodolo',4000);
            $table->text('s_categori',4000);
            $table->text('s_contenid',4000);
            $table->text('s_estrateg',4000);
            $table->text('s_resultad',4000);
            $table->text('s_evaluaci',4000);
            $table->text('s_observac',4000);
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('sis_deporigen_id')->references('id')->on('sis_dependens');
            $table->foreign('sis_depdestino_id')->references('id')->on('sis_dependens');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('ag_tema_id')->references('id')->on('ag_temas');
            $table->foreign('i_prm_lugar_id')->references('id')->on('parametros');
            $table->foreign('ag_taller_id')->references('id')->on('ag_tallers');
            $table->foreign('ag_sttema_id')->references('id')->on('ag_subtemas');
            $table->foreign('i_prm_dirig_id')->references('id')->on('parametros');
            $table->foreign('sis_entidad_id')->references('id')->on('sis_entidads');
        });

        Schema::create('h_ag_actividads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('d_registro');
            $table->integer('area_id');
            $table->integer('sis_deporigen_id');
            $table->integer('sis_depdestino_id');
            $table->integer('ag_tema_id');
            $table->integer('i_prm_lugar_id');
            $table->integer('ag_taller_id');
            $table->integer('ag_sttema_id');
            $table->integer('i_prm_dirig_id');
            $table->text('s_prm_espac', 120)->nullable();
            $table->integer('sis_entidad_id');
            $table->text('s_introduc',4000);
            $table->text('s_justific',4000);
            $table->text('s_objetivo',4000);
            $table->text('s_metodolo',4000);
            $table->text('s_categori',4000);
            $table->text('s_contenid',4000);
            $table->text('s_estrateg',4000);
            $table->text('s_resultad',4000);
            $table->text('s_evaluaci',4000);
            $table->text('s_observac',4000);
            $table->Integer('user_crea_id'); 
            $table->integer('user_edita_id');
            $table->integer('sis_esta_id')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_ag_actividads');
        Schema::dropIfExists('ag_actividads');
    }
}
