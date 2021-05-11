<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHSisProcesosTable extends Migration
{
    private $tablaxxx = 'h_sis_procesos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_proceso_id')->unsigned()->nullable()->comment('CAMPO DE ID DE PROCESO');
            $table->integer('sis_mapa_proc_id')->unsigned()->comment('CAMPO DE ID MAPA DE PROCESO');
            $table->integer('prm_proceso_id')->unsigned()->comment('CAMPO PARAMETRO TIPO DE PROCESO');
            $table->string('nombre')->comment('CAMPO NOMBRE DEL PROCESO');
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
