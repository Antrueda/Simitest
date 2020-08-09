<?php

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
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_evento_id')->unsigned();
            $table->Integer('dia')->unsigned()->nullable();
            $table->Integer('mes')->unsigned()->nullable();
            $table->Integer('ano')->unsigned()->nullable();
            $table->bigInteger('prm_momento_id')->unsigned()->nullable();
            $table->bigInteger('prm_persona_id')->unsigned()->nullable();
            $table->bigInteger('prm_tipo_id')->unsigned()->nullable();
            $table->Integer('dia_ult')->unsigned()->nullable();
            $table->Integer('mes_ult')->unsigned()->nullable();
            $table->Integer('ano_ult')->unsigned()->nullable();
            $table->bigInteger('prm_momento_ult_id')->unsigned()->nullable();
            $table->bigInteger('prm_persona_ult_id')->unsigned()->nullable();
            $table->bigInteger('prm_tipo_ult_id')->unsigned()->nullable();
            $table->bigInteger('prm_convive_id')->unsigned()->nullable();
            $table->bigInteger('prm_presencia_id')->unsigned()->nullable();
            $table->bigInteger('prm_reconoce_id')->unsigned()->nullable();
            $table->bigInteger('prm_apoyo_id')->unsigned()->nullable();
            $table->bigInteger('prm_denuncia_id')->unsigned()->nullable();
            $table->bigInteger('prm_terapia_id')->unsigned()->nullable();
            $table->bigInteger('prm_estado_id')->unsigned()->nullable();
            $table->string('informacion', 4000)->nullable();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
