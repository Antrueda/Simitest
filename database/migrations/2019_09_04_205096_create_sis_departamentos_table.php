<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_departamentos', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');;
            $table->bigInteger('sis_pai_id')->unsigned()->nullable()->comment('CAMPO DE ID DEL PAIS');
            $table->string('s_departamento')->comment('CAMPO DE NOMBRE DEL DEPARTAMENTO');
            $table->Integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->bigInteger('sis_esta_id')->unsigned();
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('sis_pai_id')->references('id')->on('sis_pais');
        });
        Schema::create('h_sis_departamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_pai_id')->unsigned()->nullable();
            $table->string('s_departamento');
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
        Schema::dropIfExists('h_sis_departamentos');
        Schema::dropIfExists('sis_departamentos');
    }
}
