<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHVsiSaludsTable extends Migration
{
    private $tablaxxx = 'h_vsi_saluds';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vsi_id')->unsigned();
            $table->bigInteger('prm_atencion_id')->unsigned();
            $table->bigInteger('prm_condicion_id')->unsigned()->nullable();
            $table->bigInteger('prm_medicamento_id')->unsigned();
            $table->bigInteger('prm_prescripcion_id')->unsigned()->nullable();
            $table->bigInteger('prm_sexual_id')->unsigned();
            $table->bigInteger('prm_activa_id')->unsigned()->nullable();
            $table->bigInteger('prm_embarazo_id')->unsigned()->nullable();
            $table->bigInteger('prm_hijo_id')->unsigned()->nullable();
            $table->bigInteger('prm_interrupcion_id')->unsigned()->nullable();
            $table->string('medicamento')->nullable();
            $table->string('descripcion', 4000)->nullable();
            $table->integer('edad')->unsigned()->nullable();
            $table->integer('embarazo')->unsigned()->nullable();
            $table->integer('hijo')->unsigned()->nullable();
            $table->integer('interrupcion')->unsigned()->nullable();
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