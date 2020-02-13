<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiJrFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fi_jr_familiars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('s_proceso');
            $table->bigInteger('i_tiempo');
            $table->bigInteger('i_veces');
            $table->bigInteger('fi_composicion_fami_id')->unsigned();
            $table->bigInteger('i_prm_vigente_id')->unsigned();
            $table->bigInteger('i_prm_motivo_id')->unsigned();
            $table->bigInteger('i_prm_tiempo_id')->unsigned();
            $table->bigInteger('fi_justicia_restaurativa_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();            
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_justicia_restaurativa_id')->references('id')->on('fi_justicia_restaurativas');
            $table->foreign('i_prm_vigente_id')->references('id')->on('parametros');
            $table->foreign('i_prm_motivo_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tiempo_id')->references('id')->on('parametros');
            $table->foreign('fi_composicion_fami_id')->references('id')->on('fi_composicion_famis');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fi_jr_familiars');
    }
}
