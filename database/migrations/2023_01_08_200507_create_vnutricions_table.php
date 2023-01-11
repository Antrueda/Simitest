<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVnutricionsTable extends Migration
{
    private $tablaxxx = 'vnutricions';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->integer('sis_depen_id')->unsigned()->comment('UPI/DEPENDENCIA');
            $table->date('fechdili')->comment('CAMPO DE FECHA DE DILIGENCIAMIENTO');
            $table->integer('prm_estado_gesta')->nullable()->unsigned()->comment('PARAMETRO PATRON DE CONSUMO');
            $table->tinyInteger('edad_gesta')->nullable()->comment(' REQUIERE APLICACION DEL VESPA');
            $table->double('peso', 5, 2)->comment(' REQUIERE APLICO VESPA');
            $table->double('talla', 5, 2)->comment(' REQUIERE APLICO VESPA');
            $table->double('cintura_cc', 5, 2)->comment(' REQUIERE APLICO VESPA');
            $table->integer('prm_cod_imcedad')->unsigned()->comment('PARAMETRO PATRON DE CONSUMO');
            $table->integer('prm_cod_te')->unsigned()->comment('PARAMETRO PATRON DE CONSUMO');
            $table->integer('prm_acti_fisica')->unsigned()->comment('PARAMETRO PATRON DE CONSUMO');
            $table->integer('prm_apetito')->unsigned()->comment('PARAMETRO PATRON DE CONSUMO');
            $table->tinyInteger('n_comidas')->nullable()->comment(' REQUIERE APLICACION DEL VESPA');
            $table->integer('prm_accion_aume')->unsigned()->comment('PARAMETRO PATRON DE CONSUMO');
            $table->integer('prm_accion_dism')->unsigned()->comment('PARAMETRO PATRON DE CONSUMO');
            $table->integer('prm_seg_consumo')->unsigned()->comment('PARAMETRO PATRON DE CONSUMO');
            $table->integer('prm_diagnostico')->unsigned()->comment('PARAMETRO PATRON DE CONSUMO');
            $table->text('observacion')->nullable()->comment('TIPO DE ACCION A DESARROLLAR');
            $table->integer('prm_requi_certi')->unsigned()->comment('DILIGENCIAMIENTO DEL CUESTIONARIO');
            $table->integer('prm_certi_recomen')->nullable()->unsigned()->comment('DILIGENCIAMIENTO DEL CUESTIONARIO');
            $table->text('plan_alimentacion')->nullable()->comment('TIPO DE ACCION A DESARROLLAR');
            $table->integer('suplemen_nutri')->nullable()->unsigned()->comment('DILIGENCIAMIENTO DEL CUESTIONARIO');
            $table->integer('user_fun_id')->unsigned()->comment('FUNCIONARIO/CONTRATISTA');
            $table->boolean('is_seguimiento')->comment('VALOR SI / NO');
            $table->integer('vnutricion_id')->nullable()->unsigned()->comment('ID PADRE VALORACION INICIAL SI ES SEGUIMIENTO');
            $table = CamposMagicos::magicos($table);

            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('sis_depen_id')->references('id')->on('sis_depens');
            $table->foreign('prm_estado_gesta')->references('id')->on('parametros');
            $table->foreign('prm_cod_imcedad')->references('id')->on('parametros');
            $table->foreign('prm_cod_te')->references('id')->on('parametros');
            $table->foreign('prm_acti_fisica')->references('id')->on('parametros');
            $table->foreign('prm_apetito')->references('id')->on('parametros');
            $table->foreign('prm_accion_aume')->references('id')->on('parametros');
            $table->foreign('prm_accion_dism')->references('id')->on('parametros');
            $table->foreign('prm_seg_consumo')->references('id')->on('parametros');
            $table->foreign('prm_diagnostico')->references('id')->on('parametros');
            $table->foreign('prm_requi_certi')->references('id')->on('parametros');
            $table->foreign('prm_certi_recomen')->references('id')->on('parametros');
            $table->foreign('suplemen_nutri')->references('id')->on('compuestos');
            $table->foreign('user_fun_id')->references('id')->on('users');
            $table->foreign('vnutricion_id')->references('id')->on('vnutricions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('h_' . $this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
