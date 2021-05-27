<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHRedesApoyosTable extends Migration
{
    private $tablaxxx = 'h_redes_apoyos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('entidadAtiende_id')->unsigned();
            $table->integer('ServPrestados_id')->unsigned();
            $table->integer('tiempoBeneficio');
            $table->integer('duracion_id')->unsigned();
            $table->integer('tiempoPrestacion_id')->unsigned();
            $table->integer('tipoRed_id')->unsigned();
            $table->integer('tipoRedPersona_id')->unsigned();
            $table->string('nombrePersona');
            $table->integer('servBenePersona_id')->unsigned();
            $table->integer('entidadAtiendeActual_id')->unsigned();
            $table->integer('durTiempoBen_id')->unsigned();
            $table->integer('anioPrestServicio_id')->unsigned();
            $table->string('telApoyo');
            $table->string('dirApoyo');
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
