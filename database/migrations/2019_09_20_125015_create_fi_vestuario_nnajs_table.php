<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiVestuarioNnajsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fi_vestuario_nnajs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();

            $table->bigInteger('prm_t_pantalon_id')->unsigned();
            $table->bigInteger('prm_t_camisa_id')->unsigned();
            $table->bigInteger('prm_t_zapato_id')->unsigned();
            $table->bigInteger('prm_sexo_etario_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned();

            $table->boolean('activo');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('prm_t_pantalon_id')->references('id')->on('parametros');
            $table->foreign('prm_t_camisa_id')->references('id')->on('parametros');
            $table->foreign('prm_t_zapato_id')->references('id')->on('parametros');
            $table->foreign('prm_sexo_etario_id')->references('id')->on('parametros');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fi_vestuario_nnajs');
    }
}
