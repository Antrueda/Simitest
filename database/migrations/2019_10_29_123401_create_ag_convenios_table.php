<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAgConveniosTable extends Migration
{
    private $tablaxxx = 'ag_convenios';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_convenio');
            $table->bigInteger('i_prm_tconvenio_id')->unsigned();
            $table->bigInteger('i_prm_entidad_id')->unsigned();
            $table->string('s_descripcion');
            $table->bigInteger('i_nconvenio');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->dateTime('d_subscrip');
            $table->dateTime('d_terminac');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('i_prm_tconvenio_id')->references('id')->on('parametros');
            $table->foreign('i_prm_entidad_id')->references('id')->on('parametros');

        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA'");
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
