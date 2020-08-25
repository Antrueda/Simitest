<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_municipios', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->string('s_municipio');
            $table->Integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->bigInteger('sis_esta_id')->unsigned();
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('sis_departamento_id')->references('id')->on('sis_departamentos');
        });

        Schema::create('h_sis_municipios', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('sis_departamento_id')->unsigned();
            $table->string('s_municipio');
            $table = CamposMagicos::h_magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_sis_municipios');
        Schema::dropIfExists('sis_municipios');
    }
}
