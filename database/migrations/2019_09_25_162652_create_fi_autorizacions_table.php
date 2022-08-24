<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiAutorizacionsTable extends Migration
{
    private $tablaxxx = 'fi_autorizacions';
    private $tablaxxx2 = 'fi_modalidads';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_prm_autorizo_id')->unsigned()->comment('CAMPO PARAMETRO AUTORIZO');
            $table->integer('fi_compfami_id')->unsigned()->comment('CAMPO DE ID DEL COMPONENTE FAMILIAR');
            $table->integer('i_prm_parentesco_id')->unsigned()->comment('CAMPO PARENTESCO');
            $table->date('d_autorizacion')->comment('CAMPO FECHA DE AUTORIZACION');
            $table->integer('i_prm_tipo_diligencia_id')->unsigned()->comment('CAMPO TIPO DE DILIGENCIA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_autorizo_id')->references('id')->on('parametros');
            $table->foreign('i_prm_parentesco_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_diligencia_id')->references('id')->on('parametros');
            $table->foreign('fi_compfami_id')->references('id')->on('fi_compfamis');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS PERSONAS AUTORIZADAS PERTENECIENTES AL NUCLEO FAMILIAR, SECCION 16 AUTORIZACION DE LA FICHA DE INGRESO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('fi_autorizacion_id')->unsigned();
            $table->integer('i_prm_modalidad_id')->unsigned();
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_autorizacion_id')->references('id')->on('fi_autorizacions');
            $table->foreign('i_prm_modalidad_id')->references('id')->on('parametros');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE MODALIDADES DE AUTORIZACION, SECCION 16 AUTORIZACION DE LA FICHA DE INGRESO'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}
