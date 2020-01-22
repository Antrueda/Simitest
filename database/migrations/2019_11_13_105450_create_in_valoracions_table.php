<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInValoracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_valoracions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('in_lineabase_nnaj_id')->unsigned();
            $table->bigInteger('i_prm_categoria_id')->unsigned();
            $table->bigInteger('i_prm_cactual_id')->unsigned();
            $table->bigInteger('i_prm_avance_id')->unsigned();
            $table->bigInteger('i_prm_nivel_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->string('s_valoracion',255);
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
      $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('in_lineabase_nnaj_id')->references('id')->on('in_lineabase_nnajs');
            $table->foreign('i_prm_categoria_id')->references('id')->on('parametros');
            $table->foreign('i_prm_cactual_id')->references('id')->on('parametros');
            $table->foreign('i_prm_avance_id')->references('id')->on('parametros');
            $table->foreign('i_prm_nivel_id')->references('id')->on('parametros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_valoracions');
    }
}
