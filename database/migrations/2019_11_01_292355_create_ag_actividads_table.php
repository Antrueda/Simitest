<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAgActividadsTable extends Migration
{
    private $tablaxxx = 'ag_actividads';
    private $tablaxxx2 = 'h_ag_actividads';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('d_registro')->comment('FECHA DEL REGISTRO DE LA ACTIVIDAD');
            $table->integer('area_id')->unsigned()->comment('LLAVE FORANEA DEL AREA');
            $table->integer('sis_deporigen_id')->unsigned()->comment('ID DE LA UPI O DEPENDENCIA DE ORIGEN');
            $table->integer('sis_depdestino_id')->unsigned()->comment('ID DE LA UPI O DEPENDENCIA DESTINO');
            $table->integer('ag_tema_id')->unsigned()->comment('LLAVE FORANEA DEL TEMA');
            $table->integer('i_prm_lugar_id')->unsigned()->comment('ID DEL ESPACIO O LUGAR');
            $table->integer('ag_taller_id')->unsigned()->comment('LLAVE FORANEA DEL TALLER');
            $table->integer('ag_sttema_id')->unsigned()->comment('LLAVE FORANEA DEL SUBTEMA');
            $table->integer('i_prm_dirig_id')->unsigned()->comment('PARAMETRO A QUIEN VA DIRIGIDO');
            $table->text('s_prm_espac', 120)->nullable()->comment('CAMPO DE TEXTO PARA EL ESPACIO O LUGAR');
            $table->boolean('incompleto')->default(1);
            $table->longText('s_introduc')->comment('CAMPO DE TEXTO PARA LA INTRODUCCION');
            $table->longText('s_justific')->comment('CAMPO DE TEXTO PARA LA JUSTIFICACION');
            $table->longText('s_objetivo')->comment('CAMPO DE TEXTO PARA EL OBJETUVO');
            $table->longText('s_metodolo')->comment('CAMPO DE TEXTO PARA LA METODOLOGIA');
            $table->longText('s_categori')->nullable()->comment('CAMPO DE TEXTO PARA LA CATEGORIA');
            $table->longText('s_contenid')->comment('CAMPO DE TEXTO PARA EL CONTENIDO');
            $table->longText('s_estrateg')->nullable()->comment('CAMPO DE TEXTO PARA LA ESTRATEGIA');
            $table->longText('s_resultad')->comment('CAMPO DE TEXTO PARA EL RESULTADO');
            $table->longText('s_evaluaci')->comment('CAMPO DE TEXTO PARA LA EVALUACION');
            $table->longText('s_observac')->comment('CAMPO DE TEXTO PARA LA OBSERVACION');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('sis_deporigen_id')->references('id')->on('sis_depens');
            $table->foreign('sis_depdestino_id')->references('id')->on('sis_depens');
            $table->foreign('ag_tema_id')->references('id')->on('ag_temas');
            $table->foreign('i_prm_lugar_id')->references('id')->on('parametros');
            $table->foreign('ag_taller_id')->references('id')->on('ag_tallers');
            $table->foreign('ag_sttema_id')->references('id')->on('ag_subtemas');
            $table->foreign('i_prm_dirig_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE RELACIONA LOS DETALLES DE LAS ACTIVIDADES REALIZADAS CON DEPENDENCIA, TEMA, LUGAR, TALER Y OBJETIVO  PERTECECIENTES A LAS ACTIVIDADES GRUPALES'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->date('d_registro')->comment('FECHA DEL REGISTRO DE LA ACTIVIDAD');
            $table->integer('area_id')->unsigned()->comment('LLAVE FORANEA DEL AREA');
            $table->integer('sis_deporigen_id')->unsigned()->comment('ID DE LA UPI O DEPENDENCIA DE ORIGEN');
            $table->integer('sis_depdestino_id')->unsigned()->comment('ID DE LA UPI O DEPENDENCIA DESTINO');
            $table->integer('ag_tema_id')->unsigned()->comment('LLAVE FORANEA DEL TEMA');
            $table->integer('i_prm_lugar_id')->unsigned()->comment('ID DEL ESPACIO O LUGAR');
            $table->integer('ag_taller_id')->unsigned()->comment('LLAVE FORANEA DEL TALLER');
            $table->integer('ag_sttema_id')->unsigned()->comment('LLAVE FORANEA DEL SUBTEMA');
            $table->integer('i_prm_dirig_id')->unsigned()->comment('PARAMETRO A QUIEN VA DIRIGIDO');
            $table->text('s_prm_espac', 120)->nullable()->comment('CAMPO DE TEXTO PARA EL ESPACIO O LUGAR');
            $table->string('s_doc_adjunto', 200)->nullable();
            $table->boolean('incompleto');
            $table->longText('s_introduc')->comment('CAMPO DE TEXTO PARA LA INTRODUCCION');
            $table->longText('s_justific')->comment('CAMPO DE TEXTO PARA LA JUSTIFICACION');
            $table->longText('s_objetivo')->comment('CAMPO DE TEXTO PARA EL OBJETUVO');
            $table->longText('s_metodolo')->comment('CAMPO DE TEXTO PARA LA METODOLOGIA');
            $table->longText('s_categori')->nullable()->comment('CAMPO DE TEXTO PARA LA CATEGORIA');
            $table->longText('s_contenid')->comment('CAMPO DE TEXTO PARA EL CONTENIDO');
            $table->longText('s_estrateg')->nullable()->comment('CAMPO DE TEXTO PARA LA ESTRATEGIA');
            $table->longText('s_resultad')->comment('CAMPO DE TEXTO PARA EL RESULTADO');
            $table->longText('s_evaluaci')->comment('CAMPO DE TEXTO PARA LA EVALUACION');
            $table->longText('s_observac')->comment('CAMPO DE TEXTO PARA LA OBSERVACION');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
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
