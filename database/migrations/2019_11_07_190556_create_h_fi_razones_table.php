<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiRazonesTable extends Migration
{
    private $tablaxxx = 'h__fi_razones';
    private $tablaxxx2 = 'h_fi_documentos_anexas';
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
            /* $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->timestamps(); */
            $table = CamposMagicos::magicos($table);
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_razone_id')->unsigned();
            $table->bigInteger('i_prm_documento_id')->unsigned();
            /* $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned(); */
            $table->text('s_ruta');
            /* $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->timestamps(); */
            $table = CamposMagicos::magicos($table);
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