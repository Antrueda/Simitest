<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFiAccionesTable extends Migration
{
    private $tablaxxx = 'fi_acciones';
    private $commentx = '8.4 A ¿Por las acciones en la cuales presuntamente está en conflicto con la ley ha actuado en: de caminando relajado';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table->integer('fi_actividadestl_id')->unsigned()->comment("PADRE DE LA RESPUESTA");
            $table->foreign('fi_actividadestl_id')->references('id')->on('fi_actividadestls');
            $table->integer('prm_accione_id')->unsigned()->comment($this->commentx);
            $table->foreign('prm_accione_id')->references('id')->on('parametros');
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
