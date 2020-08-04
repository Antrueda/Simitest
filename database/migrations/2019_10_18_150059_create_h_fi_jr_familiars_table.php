<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiJrFamiliarsTable extends Migration
{
    private $tablaxxx = 'h_fi_jr_familiars';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('s_proceso');
            $table->bigInteger('i_tiempo');
            $table->bigInteger('i_veces');
            $table->bigInteger('fi_composicion_fami_id')->unsigned();
            $table->bigInteger('i_prm_vigente_id')->unsigned();
            $table->bigInteger('i_prm_motivo_id')->unsigned();
            $table->bigInteger('i_prm_tiempo_id')->unsigned();
            $table->bigInteger('fi_justicia_restaurativa_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->timestamps();
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