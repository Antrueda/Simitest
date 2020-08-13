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
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_autorizo_id')->unsigned();
            $table->bigInteger('fi_composicion_fami_id')->unsigned();
            $table->bigInteger('i_prm_parentesco_id')->unsigned();
            $table->date('d_autorizacion');
            $table->bigInteger('i_prm_tipo_diligencia_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_autorizo_id')->references('id')->on('parametros');
            $table->foreign('i_prm_parentesco_id')->references('id')->on('parametros');
            $table->foreign('i_prm_tipo_diligencia_id')->references('id')->on('parametros');
            $table->foreign('fi_composicion_fami_id')->references('id')->on('fi_composicion_famis');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS PERSONAS AUTORIZADAS PERTENECIENTES AL NUCLEO FAMILIAR, SECCION 16 AUTORIZACION DE LA FICHA DE INGRESO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_autorizacion_id')->unsigned();
            $table->bigIntegeR('i_prm_modalidad_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('fi_autorizacion_id')->references('id')->on('fi_autorizacions');
            $table->foreign('i_prm_modalidad_id')->references('id')->on('parametros');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA EL LISTADO DE MODALIDADES DE AUTORIZACION, SECCION 16 AUTORIZACION DE LA FICHA DE INGRESO'");
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