<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFiContviolsTable extends Migration
{
    private $tablaxxx = 'fi_contviols';
    private $commentx = '12.1 A Ha ejercido  algún tipo de presunta violencia durante la actividad en conflicto con la ley?';
   
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fi_violencia_id')->unsigned()->comment("PADRE DE LA RESPUESTA");
            $table->foreign('fi_violencia_id')->references('id')->on('fi_violencias');
            $table->bigInteger('prm_violenci_id')->unsigned()->comment('VIOLENCIA QUE HA TENIDO EL NNAJ');
            $table->foreign('prm_violenci_id')->references('id')->on('parametros');
            $table->bigInteger('prm_contexto_id')->unsigned()->comment('CONTEXTO EN EL QUE HA TENIDO VIOLENCIA EL NNAJ');
            $table->foreign('prm_contexto_id')->references('id')->on('parametros');
            $table->bigInteger('prm_respuest_id')->unsigned()->comment('RESPUESTA QUE UNO EL TIPO DE VIOLENCIA Y EL CONTEXTO');
            $table->foreign('prm_respuest_id')->references('id')->on('parametros');
            $table->bigInteger('tema_id')->unsigned()->comment('TEMA AL QUE PERTENCE LA RESPUESTA');
            $table->foreign('tema_id')->references('id')->on('temas');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE CONTIENE LAS RESPUESTAS A LA PReGUNTA: ".strtoupper($this->commentx)."'");

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
