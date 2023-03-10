<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiAbuSexualsTable extends Migration
{
    private $tablaxxx = 'h_vsi_abu_sexuals';
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
            $table->integer('prm_evento_id')->unsigned()->comment('CAMPO EVENTO SEXUAL NEGATIVO');
            $table->Integer('dia')->unsigned()->nullable()->comment('CAMPO DIA');
            $table->Integer('mes')->unsigned()->nullable()->comment('CAMPO MES');
            $table->Integer('ano')->unsigned()->nullable()->comment('CAMPO AÑO');
            $table->integer('prm_momento_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO MOMENTO QUE SE PRESENTO EL EVENTO');
            $table->integer('prm_persona_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DE PERSONA VINCULADA AL EVENTO');
            $table->integer('prm_tipo_id')->unsigned()->nullable()->comment('CAMPO TIPO DE EVENTO SEXUAL NEGATIVO');
            $table->Integer('dia_ult')->unsigned()->nullable()->comment('CAMPO DIA ULTIMA VEZ');
            $table->Integer('mes_ult')->unsigned()->nullable()->comment('CAMPO MES ULTIMA VEZ');
            $table->Integer('ano_ult')->unsigned()->nullable()->comment('CAMPO AÑO ULTIMA VEZ');
            $table->integer('prm_momento_ult_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO MOMENTO QUE SE PRESENTO EL EVENTO POR ULTIMA VEZ');
            $table->integer('prm_persona_ult_id')->unsigned()->nullable()->comment('CAMPO PARAMETRO DE PERSONA VINCULADA AL EVENTO POR ULTIMA VEZ');
            $table->integer('prm_tipo_ult_id')->unsigned()->nullable()->comment('CAMPO TIPO DE EVENTO SEXUAL NEGATIVO DE LA ULTIMA VEZ');
            $table->integer('prm_convive_id')->unsigned()->nullable()->comment('CAMPO CONVIVE CON LA PERSONA VINCULADA AL EVENTO');
            $table->integer('prm_presencia_id')->unsigned()->nullable()->comment('CAMPO PRESENCIA O CERCANIA CON EL AGRESOR');
            $table->integer('prm_reconoce_id')->unsigned()->nullable()->comment('CAMPO RECONOCE AL AGRESOR');
            $table->integer('prm_apoyo_id')->unsigned()->nullable()->comment('CAMPO HA RECIBIDO ALGUN TIPO DE APOYO');
            $table->integer('prm_denuncia_id')->unsigned()->nullable()->comment('CAMPO HA PRESENTADO ALGUNA DENUNCIA');
            $table->integer('prm_terapia_id')->unsigned()->nullable()->comment('CAMPO HA RECIBIDO ALGUN TIPO DE APOYO TERAPEUTICO');
            $table->integer('prm_estado_id')->unsigned()->nullable()->comment('CAMPO ESTADO DEL PROGRESO DEL APOYO TERAPEUTICO');
            $table->string('informacion',4000)->nullable()->comment('CAMPO INFORMACION RELEVANTE ADICIONAL');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
