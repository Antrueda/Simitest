<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiRazonesTable extends Migration
{
    private $tablaxxx = 'fi_razones';
    private $tablaxxx2 = 'fi_documentos_anexas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('s_porque_ingresar');
            $table->bigInteger('userd_id')->unsigned();
            $table->bigInteger('sis_depend_id')->unsigned();
            $table->bigInteger('userr_id')->unsigned();
            $table->bigInteger('sis_depenr_id')->unsigned();
            $table->bigInteger('i_prm_estado_ingreso_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->foreign('userd_id')->references('id')->on('users');
            $table->foreign('userr_id')->references('id')->on('users');
            $table->foreign('sis_depend_id')->references('id')->on('sis_depens');
            $table->foreign('sis_depenr_id')->references('id')->on('sis_depens');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_estado_ingreso_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE REGISTRA LAS RAZONES DE INGRESO AL IDIPRON, SECCION 15 BIENVENIDA DE LA FICHA DE INGRESO'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('i_prm_documento_id')->unsigned();

            $table->text('s_ruta');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_documento_id')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE REGISTRA LOS DOCUMENTOS ANEXOS ASOCIADOS AL NNAJ'");
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
