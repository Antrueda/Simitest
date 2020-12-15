<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiAbuSexualsTable extends Migration
{
    private $tablaxxx = 'vsi_abu_sexuals';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('vsi_id')->unsigned()->comment('CAMPO ID DE LA VALORACION');
            $table->bigInteger('prm_evento_id')->unsigned()->comment('CAMPO EVENTO SEXUAL NEGATIVO');
            $table->Integer('dia')->unsigned()->nullable()->comment('CAMPO DIA');
            $table->Integer('mes')->unsigned()->nullable()->comment('CAMPO MES');
            $table->Integer('ano')->unsigned()->nullable()->comment('CAMPO AÑO');
            $table->bigInteger('prm_momento_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO MOMENTO QUE SE PRESENTO EL EVENTO');
            $table->bigInteger('prm_persona_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DE PERSONA VINCULADA AL EVENTO');
            $table->bigInteger('prm_tipo_id')->unsigned()->nullable()->comment('CAMPO TIPO DE EVENTO SEXUAL NEGATIVO');
            $table->Integer('dia_ult')->unsigned()->nullable()->comment('CAMPO DIA ULTIMA VEZ');
            $table->Integer('mes_ult')->unsigned()->nullable()->comment('CAMPO MES ULTIMA VEZ');
            $table->Integer('ano_ult')->unsigned()->nullable()->comment('CAMPO AÑO ULTIMA VEZ');
            $table->bigInteger('prm_momento_ult_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO MOMENTO QUE SE PRESENTO EL EVENTO POR ULTIMA VEZ');
            $table->bigInteger('prm_persona_ult_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DE PERSONA VINCULADA AL EVENTO POR ULTIMA VEZ');
            $table->bigInteger('prm_tipo_ult_id')->unsigned()->nullable()->comment('CAMPO TIPO DE EVENTO SEXUAL NEGATIVO DE LA ULTIMA VEZ');
            $table->bigInteger('prm_convive_id')->unsigned()->nullable()->comment('CAMPO CONVIVE CON LA PERSONA VINCULADA AL EVENTO');
            $table->bigInteger('prm_presencia_id')->unsigned()->nullable()->comment('CAMPO PRESENCIA O CERCANIA CON EL AGRESOR');
            $table->bigInteger('prm_reconoce_id')->unsigned()->nullable()->comment('CAMPO RECONOCE AL AGRESOR');
            $table->bigInteger('prm_apoyo_id')->unsigned()->nullable()->comment('CAMPO HA RECIBIDO ALGUN TIPO DE APOYO');
            $table->bigInteger('prm_denuncia_id')->unsigned()->nullable()->comment('CAMPO HA PRESENTADO ALGUNA DENUNCIA');
            $table->bigInteger('prm_terapia_id')->unsigned()->nullable()->comment('CAMPO HA RECIBIDO ALGUN TIPO DE APOYO TERAPEUTICO');
            $table->bigInteger('prm_estado_id')->unsigned()->nullable()->comment('CAMPO ESTADO DEL PROGRESO DEL APOYO TERAPEUTICO');
            $table->string('informacion', 4000)->nullable()->comment('CAMPO INFORMACION RELEVANTE ADICIONAL');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_evento_id')->references('id')->on('parametros');
            $table->foreign('prm_momento_id')->references('id')->on('parametros');
            $table->foreign('prm_persona_id')->references('id')->on('parametros');
            $table->foreign('prm_tipo_id')->references('id')->on('parametros');
            $table->foreign('prm_momento_ult_id')->references('id')->on('parametros');
            $table->foreign('prm_persona_ult_id')->references('id')->on('parametros');
            $table->foreign('prm_tipo_ult_id')->references('id')->on('parametros');
            $table->foreign('prm_convive_id')->references('id')->on('parametros');
            $table->foreign('prm_presencia_id')->references('id')->on('parametros');
            $table->foreign('prm_reconoce_id')->references('id')->on('parametros');
            $table->foreign('prm_apoyo_id')->references('id')->on('parametros');
            $table->foreign('prm_denuncia_id')->references('id')->on('parametros');
            $table->foreign('prm_terapia_id')->references('id')->on('parametros');
            $table->foreign('prm_estado_id')->references('id')->on('parametros');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA DETALLES DEL PRESUNTO ABUSO SEXUAL QUE PUDO EXPERIMENTAR LA PERSONA ENTREVISTADA, SECCIÓN 14 PRESUNTO ABUSO SEXUAL DE LA FICHA SICOSOCIAL'");
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