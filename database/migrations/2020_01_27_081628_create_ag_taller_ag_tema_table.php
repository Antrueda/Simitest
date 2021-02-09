<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAgTallerAgTemaTable extends Migration
{
    private $tablaxxx = 'ag_taller_ag_tema';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('ag_taller_id')->unsigned();
            $table->integer('ag_tema_id')->unsigned();
            $table->unique(['ag_taller_id', 'ag_tema_id'],'agtate_un1');
            $table->integer('user_crea_id')->unsigned();
            $table->integer('user_edita_id')->unsigned();
            $table->integer('sis_esta_id')->unsigned()->default(1);

            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA RELACION ENTRE TALLERES Y TEMAS PERTECECIENTES A LAS ACTIVIDADES GRUPALES'");
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
