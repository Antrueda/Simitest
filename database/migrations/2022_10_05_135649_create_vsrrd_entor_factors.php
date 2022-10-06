<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVsrrdEntorFactors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vsrrd_entor_factors', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('vsrrd_entorno_id')->unsigned()->nullable()->comment('CAMPO ID DE ENTORNOS');
            $table->integer('vsrrd_factor_id')->unsigned()->nullable()->comment('CAMPO ID DE FACTORES');
            $table->integer('estusuarios_id')->comment('JUSTIFICACION DEL ESTADO');
            $table = CamposMagicos::magicos($table);

            $table->foreign('vsrrd_entorno_id')->references('id')->on('vsrrd_entornos');
            $table->foreign('vsrrd_factor_id')->references('id')->on('vsrrd_factores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vsrrd_entor_factors');
    }
}
