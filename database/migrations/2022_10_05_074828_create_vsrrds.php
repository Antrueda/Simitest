<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVsrrds extends Migration
{
    private $tablaxxx = 'vsrrds';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->date('fecha')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->integer('sis_origen_id')->unsigned()->comment('UPI ORIGEN');
            $table->integer('sis_atenc_id')->unsigned()->comment('UPI ATENCION');
            $table->integer('prm_pre_mitigacion')->unsigned()->comment('ATENCION MITIFACION');
            $table->integer('prm_faseacomp')->unsigned()->comment('FASE DE ACOMPANAMIENTO');
            $table->integer('prm_tipoacomp')->unsigned()->comment('TIPO DE ACOMPANAMIENTO');
            $table->integer('prm_actiemocional')->unsigned()->comment('ACTIVACION EMOCIONAL');
            $table->text('observacion')->comment('OBSERVACIONES');
            $table->text('concepto_rrd')->comment('CONCEPTO RRD');
            $table->integer('prm_requi_certi')->unsigned()->comment('REQUIERE CERTIFICADO');
            $table->text('requi_certi_recomend')->nullable()->comment('CERTIFICADO');
            $table->tinyInteger('num_sesion')->comment('NUMERO DE SESION');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
            $table = CamposMagicos::magicos($table);

            $table->foreign('user_fun_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('prm_pre_mitigacion')->references('id')->on('parametros');
            $table->foreign('prm_faseacomp')->references('id')->on('parametros');
            $table->foreign('prm_tipoacomp')->references('id')->on('parametros');
            $table->foreign('prm_actiemocional')->references('id')->on('parametros');
            $table->foreign('prm_requi_certi')->references('id')->on('parametros');
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->date('fecha')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->integer('sis_origen_id')->unsigned()->comment('UPI ORIGEN');
            $table->integer('sis_atenc_id')->unsigned()->comment('UPI ATENCION');
            $table->integer('prm_pre_mitigacion')->unsigned()->comment('ATENCION MITIFACION');
            $table->integer('prm_faseacomp')->unsigned()->comment('FASE DE ACOMPANAMIENTO');
            $table->integer('prm_tipoacomp')->unsigned()->comment('TIPO DE ACOMPANAMIENTO');
            $table->integer('prm_actiemocional')->unsigned()->comment('ACTIVACION EMOCIONAL');
            $table->text('observacion')->comment('OBSERVACIONES');
            $table->text('concepto_rrd')->comment('CONCEPTO RRD');
            $table->integer('prm_requi_certi')->unsigned()->comment('REQUIERE CERTIFICADO');
            $table->text('requi_certi_recomend')->comment('CERTIFICADO');
            $table->tinyInteger('num_sesion')->comment('NUMERO DE SESION');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
            $table = CamposMagicos::h_magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_' . $this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
