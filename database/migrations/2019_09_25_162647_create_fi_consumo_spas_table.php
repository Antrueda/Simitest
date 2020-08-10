<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFiConsumoSpasTable extends Migration
{
    private $tablaxxx = 'fi_consumo_spas';
    private $tablaxxx2 = 'fi_sustancia_consumidas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('i_prm_consume_spa_id')->unsigned();
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); 
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('i_prm_consume_spa_id')->references('id')->on('parametros');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'P'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fi_consumo_spa_id')->unsigned();//->comment('REGISTRO CONSUMO SPA AL QUE SE LE ASIGNA LA SUSTANCIA');
            $table->bigInteger('i_prm_sustancia_id')->nullable()->unsigned();
            $table->bigIntegeR('i_edad_uso')->nullable()->unsigned();
            $table->bigInteger('i_prm_consume_id')->nullable()->unsigned();
            $table->bigInteger('user_crea_id')->unsigned(); //->comment('USUARIO QUE CREA EL REGISTRO');
            $table->bigInteger('user_edita_id')->unsigned();//->comment('USUARIO QUE EDITA EL REGISTRO');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');//->comment('ESTADO DEL REGISTRO');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('i_prm_sustancia_id')->references('id')->on('parametros');
            $table->foreign('fi_consumo_spa_id')->references('id')->on('fi_consumo_spas');
            $table->foreign('i_prm_consume_id')->references('id')->on('parametros');
        });
        DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'P'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}