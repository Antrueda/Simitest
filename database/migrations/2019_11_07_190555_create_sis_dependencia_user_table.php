<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSisDependenciaUserTable extends Migration
{
    private $tablaxxx = 'sis_dependencia_user';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('sis_dependencia_id')->unsigned();
            $table->bigInteger('i_prm_responsable_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sis_dependencia_id')->references('id')->on('sis_dependencias');
            $table->foreign('i_prm_responsable_id')->references('id')->on('parametros');
            $table->unique(['user_id', 'sis_dependencia_id']);
            $table->timestamps();
        });
    }
    // DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");

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