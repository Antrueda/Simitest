<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateHFiAccionesTable extends Migration
{
    private $tablaxxx = 'h_fi_acciones';
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
            $table->bigInteger('fi_actividadestl_id')->unsigned()->comment("PADRE DE LA RESPUESTA");
            $table->bigInteger('prm_accione_id')->unsigned()->comment($this->commentx);
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");
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
