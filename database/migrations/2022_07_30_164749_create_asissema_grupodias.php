<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsissemaGrupodias extends Migration
{
    private $tablaxxx2 = 'asissema_grupodias';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('asissema_id')->unsigned()->comment('CAMPO LLAVE ASISTENCIA SEMANAL');
            $table->integer('prm_dia_id')->unsigned()->comment('DIA SEGUN GRUPO');

            $table->foreign('asissema_id')->references('id')->on('asissemas');
            $table->foreign('prm_dia_id')->references('id')->on('parametros');
            $table->timestamps();
        });

        Schema::create('h_' . $this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('asissema_id')->unsigned()->comment('CAMPO LLAVE ASISTENCIA SEMANAL');
            $table->integer('prm_dia_id')->unsigned()->comment('DIA SEGUN GRUPO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_' . $this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx2);
    }
}
