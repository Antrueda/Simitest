<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateHFiConsumoSpasTable extends Migration
{
    private $tablaxxx = 'h_fi_consumo_spas';
    private $tablaxxx2 = 'h_fi_sustancia_consumidas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('i_prm_consume_spa_id')->unsigned()->comment('CAMPO SI CONSUME SPA');
            $table->integer('sis_nnaj_id')->unsigned()->comment('CAMPO DE ID DE NNAJ');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx}'");

        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('fi_consumo_spa_id')->unsigned()->comment('REGISTRO CONSUMO SPA AL QUE SE LE ASIGNA LA SUSTANCIA');
            $table->integer('i_prm_sustancia_id')->nullable()->unsigned()->comment('REGISTRO TIPO DE SUSTANCIA');
            $table->integer('i_edad_uso')->nullable()->unsigned()->comment('REGISTRO EDAD DE CUANDO INICIO A CONSUMIR');
            $table->integer('i_prm_consume_id')->nullable()->unsigned()->comment('REGISTRO SI CONTINUA CONSUMIENDO');
            $table = CamposMagicos::h_magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx2}` comment 'TABLA QUE ALMACENA LOS LOGS DE LA TABLA {$this->tablaxxx2}'");
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