<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiRazonesTable extends Migration
{
    private $tablaxxx = 'h_fi_razones';
    private $tablaxxx2 = 'h_fi_documentos_anexas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('s_porque_ingresar',1000)->comment('CAMPO DE TEXTO POR QUE QUIERE INGRESAR');
            $table->integer('userd_id')->unsigned()->comment('CAMPO ID USUARIO QUE DILIGENCIA');
            $table->integer('sis_depend_id')->unsigned()->comment('CAMPO ID UPI O DEPENDENCIA');
            $table->integer('userr_id')->unsigned()->comment('CAMPO ID USUARIO RESPONSABLE');
            $table->integer('sis_depenr_id')->unsigned()->comment('CAMPO UPI RESPONSABLE');
            $table->integer('i_prm_estado_ingreso_id')->unsigned()->comment('CAMPO PARAMETRO ESTADO DE INGRESO');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('sis_nnaj_id')->unsigned();
            $table->integer('i_prm_documento_id')->unsigned();
            $table->string('s_ruta');
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
