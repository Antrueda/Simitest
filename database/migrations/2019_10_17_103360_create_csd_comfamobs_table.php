<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCsdComFamObsTable extends Migration
{
    private $tablaxxx = 'csd_comfamobs';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
             $table->increments('id')->start(1)->nocache();
            $table->bigInteger('csd_id')->unsigned();
            $table->longText('observaciones');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned();
            $table->bigInteger('prm_tipofuen_id')->unsigned();
            $table->foreign('prm_tipofuen_id','cofaob_pk1')->references('id')->on('parametros');
            $table->foreign('sis_esta_id','cofaob_pk2')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('csd_id','cofaob_pk3')->references('id')->on('csds');
            $table->foreign('user_crea_id','cofaob_pk4')->references('id')->on('users');
            $table->foreign('user_edita_id','cofaob_pk5')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS OBSERVACIONES REALIZADAS POR EL FUNCIONARIO AL NUCLEO FAMILIAR DE LA PERSONA PERSONA ENTREVISTADA, SECCION 7 COMPOSICION FAMILIAR DE CONSULTA SOCIAL EN DOMICILIO'");
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
