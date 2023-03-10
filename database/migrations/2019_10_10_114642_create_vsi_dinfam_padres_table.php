<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiDinfamPadresTable extends Migration
{
    private $tablaxxx = 'vsi_dinfam_padres';
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
            $table->integer('prm_convive_id')->unsigned()->comment('CAMPO SI CONVIVIO CON EL NNAJ');
            $table->integer('dia')->unsigned()->nullable()->comment('CAMPO DIA');
            $table->integer('mes')->unsigned()->nullable()->comment('CAMPO MES');
            $table->integer('ano')->unsigned()->nullable()->comment('CAMPO AÑO');
            $table->integer('hijo')->unsigned()->comment('CAMPO CUANTOS HIJOS');
            $table->integer('prm_separa_id')->unsigned()->nullable()->comment('CAMPO MOTIVO DE SEPARACION');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_convive_id')->references('id')->on('parametros');
            $table->foreign('prm_separa_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA RELACIÓN CON EL PROGENITOR DE LA PERSONA ENTREVISTADA, SECCIÓN 5 DINAMICA FAMILIAR DE LA FICHA SICOSOCIAL'");
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
