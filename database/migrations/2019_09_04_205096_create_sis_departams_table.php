<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisDepartamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_departams', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');;
            $table->integer('sis_pai_id')->unsigned()->nullable()->comment('CAMPO DE ID DEL PAIS');
            $table->string('s_departamento')->comment('CAMPO DE NOMBRE DEL DEPARTAMENTO');
            $table->Integer('simianti_id')->nullable()->comment('IDENTIFICADOR EN EL SIMI ANTIGUO');
            $table->Integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->integer('sis_esta_id')->unsigned();
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('sis_pai_id')->references('id')->on('sis_pais');
        });
        Schema::create('h_sis_departams', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');;
            $table->integer('sis_pai_id')->unsigned()->nullable()->comment('CAMPO DE ID DEL PAIS');
            $table->string('s_departamento')->comment('CAMPO DE NOMBRE DEL DEPARTAMENTO');
            $table->Integer('simianti_id')->nullable()->comment('IDENTIFICADOR EN EL SIMI ANTIGUO');
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
        Schema::dropIfExists('h_sis_departams');
        Schema::dropIfExists('sis_departams');
    }
}
