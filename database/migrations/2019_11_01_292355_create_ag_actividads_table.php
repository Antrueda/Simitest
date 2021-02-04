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
            $table->bigIncrements('id');
            $table->date('d_registro');
            $table->bigInteger('area_id')->unsigned();
            $table->bigInteger('sis_deporigen_id')->unsigned();
            $table->bigInteger('sis_depdestino_id')->unsigned();
            $table->bigInteger('ag_tema_id')->unsigned();
            $table->bigInteger('i_prm_lugar_id')->unsigned();
            $table->bigInteger('ag_taller_id')->unsigned();
            $table->bigInteger('ag_sttema_id')->unsigned();
            $table->bigInteger('i_prm_dirig_id')->unsigned();
            $table->text('s_prm_espac', 120)->nullable();
            $table->string('s_doc_adjunto', 200)->nullable();
            $table->boolean('incompleto')->default(1);
            $table->longText('s_introduc');
            $table->longText('s_justific');
            $table->longText('s_objetivo');
            $table->longText('s_metodolo');
            $table->longText('s_categori')->nullable();
            $table->longText('s_contenid');
            $table->longText('s_estrateg')->nullable();
            $table->longText('s_resultad');
            $table->longText('s_evaluaci');
            $table->longText('s_observac');
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
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE RELACIONA LOS DETALLES DE LAS ACTIVIDADES REALIZADAS CON DEPENDENCIA, TEMA, LUGAR, TALER Y OBJETIVO  PERTECECIENTES A LAS ACTIVIDADES GRUPALES'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('d_registro');
            $table->integer('area_id');
            $table->integer('sis_deporigen_id');
            $table->integer('sis_depdestino_id');
            $table->integer('ag_tema_id');
            $table->integer('i_prm_lugar_id');
            $table->integer('ag_taller_id');
            $table->integer('ag_sttema_id');
            $table->integer('i_prm_dirig_id');
            $table->text('s_prm_espac', 120)->nullable();
            $table->string('s_doc_adjunto', 200)->nullable();
            $table->boolean('incompleto');
            $table->longText('s_introduc');
            $table->longText('s_justific');
            $table->longText('s_objetivo');
            $table->longText('s_metodolo');
            $table->longText('s_categori')->nullable();
            $table->longText('s_contenid');
            $table->longText('s_estrateg')->nullable();
            $table->longText('s_resultad');
            $table->longText('s_evaluaci');
            $table->longText('s_observac');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
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
