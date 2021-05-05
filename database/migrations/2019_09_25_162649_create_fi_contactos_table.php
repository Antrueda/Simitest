<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiContactosTable extends Migration
{
    private $tablaxxx = 'fi_contactos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_prm_tipo_contacto_id')->unsigned()->comment('CAMPO TIPO DE CONTACTO');
            $table->string('s_contacto_condicion')->nullable()->comment('CAMPO ABIERTO CONTACTO POR CONDICION');
            $table->integer('i_prm_contacto_opcion_id')->nullable()->unsigned()->comment('CAMPO CONTACTO POR OPCION ');
            $table->string('s_entidad_remite')->nullable()->comment('CAMPO ENTIDAD QUE REMITE');
            $table->date('d_fecha_remite_id')->nullable()->comment('CAMPO FECHA QUE REMITE');
            $table->integer('i_prm_motivo_contacto_id')->nullable()->unsigned()->comment('CAMPO MOTIVO DE CONTACTO');
            $table->integer('i_prm_aut_tratamiento_id')->unsigned()->comment('CAMPO AUTORIZA AL IDIPRON');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID DEL NNAJ');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_tipo_contacto_id')->references('id')->on('parametros');
            $table->foreign('i_prm_contacto_opcion_id')->references('id')->on('parametros');
            $table->foreign('i_prm_motivo_contacto_id')->references('id')->on('parametros');
            $table->foreign('i_prm_aut_tratamiento_id')->references('id')->on('parametros');
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DATOS DE CONTACTO DE LAS PERSONAS QUE SE PUEDEN CONTACTAR CON LOS NNAJ'");
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
