<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateHFiContviolsTable extends Migration
{
    private $tablaxxx = 'h_fi_contviols';
    
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
            $table->bigInteger('prm_violenci_id')->unsigned()->comment('VIOLENCIA QUE HA TENIDO EL NNAJ');
            $table->bigInteger('prm_contexto_id')->unsigned()->comment('CONTEXTO EN EL QUE HA TENIDO VIOLENCIA EL NNAJ');
            $table->bigInteger('prm_respuest_id')->unsigned()->comment('RESPUESTA QUE UNO EL TIPO DE VIOLENCIA Y EL CONTEXTO');
            $table->bigInteger('tema_id')->unsigned()->comment('TEMA AL QUE PERTENCE LA RESPUESTA');
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
