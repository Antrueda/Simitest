<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVctoCaracteris extends Migration
{
    private $tablaxxx = 'vcto_caracteris';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('vcto_id')->unsigned()->comment('CAMPO ID DE VALORACION Y CARAC TO');
            $table->integer('area')->unsigned()->comment('AREA');
            $table->text('observacion')->nullable()->comment('OBSERVACION GENERAL');
            $table = CamposMagicos::magicos($table);

            $table->foreign('vcto_id')->references('id')->on('vctos');
        });
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
