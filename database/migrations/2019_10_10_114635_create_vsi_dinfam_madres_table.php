<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiDinfamMadresTable extends Migration
{
    private $tablaxxx = 'vsi_dinfam_madres';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_convive_id')->unsigned();
            $table->integer('dia')->unsigned()->nullable();;
            $table->integer('mes')->unsigned()->nullable();;
            $table->integer('ano')->unsigned()->nullable();;
            $table->integer('hijo')->unsigned();
            $table->bigInteger('prm_separa_id')->unsigned()->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_convive_id')->references('id')->on('parametros');
            $table->foreign('prm_separa_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
      DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA SEPARACIÓN DE LA PERSONA ENTREVISTADA CON LA PROGENITORA, PREGUNTA 5.2.1 SECCION 5 DINÁMICA FAMILIAR DE LA FICHA SICOSOCIAL'");
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