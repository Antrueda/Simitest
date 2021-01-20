<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVsiActEmocionalsTable extends Migration
{
    private $tablaxxx = 'vsi_act_emocionals';
    private $tablaxxx2 = 'vsi_actemo_fisiologica';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('vsi_id')->unsigned()->comment('CAMPO ID DE VALORACION');
            $table->bigInteger('prm_activa_id')->unsigned()->comment('CAMPO ACTIVIDAD EMOCIONAL');
            $table->string('descripcion', 4000)->nullable()->comment('CAMPO ABIERTO DESCRIPCION');
            $table->string('conductual', 4000)->nullable()->comment('CAMPO ABIERTO DESCRIPCION CONDUCTUAL');
            $table->string('cognitiva', 4000)->nullable()->comment('CAMPO ABIERTO DESCRIPCION COGNITIVA');
            $table->foreign('vsi_id')->references('id')->on('vsis');
            $table->foreign('prm_activa_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS DESCRIPCIONES DE SITUACIÓN, LUGAR, OBJETO O PERSONA QUE GENERA MALESTAR INTENSO EN LA PERSONA ENTREVISTADA, SECCIÓN 13 ACTIVIDAD EMOCIONAL DE LA FICHA SICOSOCIAL'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('parametro_id')->unsigned();
            $table->bigInteger('vsi_actemocional_id')->unsigned()->comment('CAMPO ID ACTIVIDAD EMOCIONAL');
            $table->foreign('parametro_id')->references('id')->on('parametros');
            $table->foreign('vsi_actemocional_id')->references('id')->on('vsi_act_emocionals');
            $table->unique(['parametro_id', 'vsi_actemocional_id']);
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS DETALLES DE LA ACTIVACIÓN FISIOLOGICA QUE PUEDE SUFRIR LA PERSONA ENREVISTADA EN RESPUESTA A UNA SITUACIÓN, LUGAR, OBJETO O PERSONA QUE GENERA MALESTAR INTENSO EN LA PERSONA ENTREVISTADA, PREGUNTA 13.2 SECCIÓN 13 ACTIVIDAD EMOCIONAL DE LA FICHA SICOSOCIAL'");
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
