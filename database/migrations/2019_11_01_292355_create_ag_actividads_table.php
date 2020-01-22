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
            $table->bigInteger('ag_sttran_id')->unsigned();
            $table->bigInteger('i_prm_dirig_id')->unsigned();
            $table->bigInteger('i_prm_espac_id')->unsigned();
            $table->bigInteger('sis_entidad_id')->unsigned();
            $table->string('s_introduc');
            $table->string('s_justific');
            $table->string('s_objetivo');
            $table->string('s_metodolo');
            $table->string('s_categori');
            $table->string('s_contenid');
            $table->string('s_estrateg');
            $table->string('s_resultad');
            $table->string('s_evaluaci');
            $table->string('s_observac');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('sis_deporigen_id')->references('id')->on('sis_dependencias');
            $table->foreign('sis_depdestino_id')->references('id')->on('sis_dependencias');  
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');  
            $table->foreign('ag_tema_id')->references('id')->on('ag_temas');
            $table->foreign('i_prm_lugar_id')->references('id')->on('parametros');      
            $table->foreign('ag_taller_id')->references('id')->on('ag_tallers');
            $table->foreign('ag_sttema_id')->references('id')->on('ag_subtemas');
            $table->foreign('ag_sttran_id')->references('id')->on('ag_subtemas');
            $table->foreign('i_prm_dirig_id')->references('id')->on('parametros');
            $table->foreign('i_prm_espac_id')->references('id')->on('parametros');
            $table->foreign('sis_entidad_id')->references('id')->on('sis_entidads'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ag_actividads');
    }
}
