<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVihDescrips extends Migration
{
    private $tablaxxx = 'vih_descrips';

    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->integer('vih_id')->unsigned()->comment('Valaracion e ident habilidades');
            $table->integer('vih_area_id')->unsigned()->comment('AREA');
            $table->text('descripcion')->nullable()->comment('DESCRIPCION RESPUESTA AREA');
            $table->timestamps();

            $table->foreign('vih_id')->references('id')->on('vihs');
            $table->foreign('vih_area_id')->references('id')->on('vih_areas');
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
