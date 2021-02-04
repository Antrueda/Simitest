<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisUpzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_upzs', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->string('s_upz')->unique()->comment('CAMPO DE NOMBRE DE LA UPZ');
            $table->string('s_codigo',6)->comment('CAMPO DE CODIGO DE LA UPZ');
            $table->Integer('simianti_id')->nullable()->comment('IDENTIFICADOR EN EL SIMI ANTIGUO');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
        Schema::create('h_sis_upzs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_upz');
            $table->string('s_codigo', 6);
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
        Schema::dropIfExists('h_sis_upzs');
        Schema::dropIfExists('sis_upzs');
    }
}
