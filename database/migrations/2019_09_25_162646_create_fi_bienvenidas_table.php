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
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('i_prm_quiere_entrar_id')->unsigned()->comment('CAMPO PARAMETRO DE ENTRAR AL IDIPRON');
                        
            $table->text('s_porque_quiere_entrar')->comment('CAMPO POR QUE QUIERE ENTRAR AL IDIPRON');
            $table->text('s_que_gustaria_hacer')->comment('CAMPO QUE LE GUSTARIA HACER EN EL IDIPRON');

            $table->bigInteger('sis_nnaj_id')->unsigned()->comment('CAMPO DE ID NNAJ');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_quiere_entrar_id')->references('id')->on('parametros');
            
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
