<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiVestuarioNnajsTable extends Migration
{
    private $tablaxxx = 'fi_vestuario_nnajs';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('prm_t_pantalon_id')->unsigned()->comment('CAMPO TIPO DE PANTALON');
            $table->integer('prm_t_camisa_id')->unsigned()->comment('CAMPO TIPO DE CAMISA');
            $table->integer('prm_t_zapato_id')->unsigned()->comment('CAMPO TIPO DE ZAPATO');
            $table->integer('prm_sexo_etario_id')->unsigned()->comment('CAMPO TALLA DE ROPA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO DE ID DE NNAJ');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('prm_t_pantalon_id')->references('id')->on('parametros');
            $table->foreign('prm_t_camisa_id')->references('id')->on('parametros');
            $table->foreign('prm_t_zapato_id')->references('id')->on('parametros');
            $table->foreign('prm_sexo_etario_id')->references('id')->on('parametros');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL VESTUARIO BRINDADO A LAS PERSONAS REGISTRADAS EN EL SISTEMA'");
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
