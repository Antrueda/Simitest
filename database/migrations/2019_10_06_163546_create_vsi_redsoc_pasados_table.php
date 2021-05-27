<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiRedsocPasadosTable extends Migration
{
    private $tablaxxx = 'vsi_redsoc_pasados';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vsi_id')->unsigned()->comment('CAMPO ID DE LA VALORACION');
            $table->string('nombre')->comment('CAMPO NOMBRE');
            $table->string('servicio')->comment('CAMPO SERVICIO');
            $table->integer('dia')->nullable()->comment('CAMPO DIA');
            $table->integer('mes')->nullable()->comment('CAMPO MES');
            $table->integer('ano')->nullable()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('ano_prestacion')->comment('CAMPO AÑO DE PRESTACION DE SERVICIO');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE CONTIENE EL LISTADO DE LOS ANTECEDENTES INSTITUCIONALES DE LAS REDES SOCIALES REDES DE CONTACTO POR LA PERSONA ENTREVISTADA, PREGUNTA 7.2 SECCIÓN 7 REDES SOCIALES DE APOYO DE LA FICHA SICOSOCIAL'");
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
