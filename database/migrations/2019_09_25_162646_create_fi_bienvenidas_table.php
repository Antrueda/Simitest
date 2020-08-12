<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiBienvenidasTable extends Migration
{
    private $tablaxxx = 'fi_bienvenidas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_quiere_entrar_id')->unsigned();
            $table->bigInteger('sis_depen_id')->unsigned();
            $table->bigInteger('i_prm_servicio_id')->unsigned();
            $table->text('s_porque_quiere_entrar');
            $table->text('s_que_gustaria_hacer');

            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_quiere_entrar_id')->references('id')->on('parametros');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table->foreign('i_prm_servicio_id')->references('id')->on('parametros');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS MOTIVOS POR LOS QUE SE VINCULA UNA PERSONA A LOS SERVICIOS DEL IDIPRON, SECCION 15 DE LA FICHA DE INGRESO'");
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
