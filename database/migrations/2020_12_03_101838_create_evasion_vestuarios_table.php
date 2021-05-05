<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvasionVestuariosTable extends Migration
{
    private $tablaxxx = 'evasion_vestuarios';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('prm_vestuario_id')->unsigned()->comment('ID PARAMETRO TIPO DE VESTUARIO');
            $table->string('material', 120)->comment('TIPO DE MATERIAL DEL VESTUARIO ');
            $table->string('color', 120)->comment('QUE COLOR ES EL VESTUARIO ');
            $table->foreign('prm_vestuario_id')->references('id')->on('parametros');
            $table->integer('reporte_evasion_id')->unsigned();
            $table->foreign('reporte_evasion_id')->references('id')->on('ai_reporte_evasions');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA EL VESTUARIO EN EVASION'");
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
