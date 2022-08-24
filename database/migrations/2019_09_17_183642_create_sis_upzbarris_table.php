<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisUpzbarrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_upzbarris', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_localupz_id')->unsigned()->comment('CAMPO ID LOCALIDAD UPZ');
            $table->integer('sis_barrio_id')->unsigned()->comment('CAMPO ID DEL BARRIO');
            $table->Integer('simianti_id')->default(0)->comment('IDENTIFICADOR EN EL SIMI ANTIGUO');
            $table->integer('user_crea_id')->unsigned()->comment('ID DE USUARIO QUE CREA');
            $table->integer('user_edita_id')->unsigned()->comment('ID DE USUARIO QUE EDITA');
            $table->integer('sis_esta_id')->unsigned()->default(1)->comment('CAMPO DE ID ESTADO');
            $table->foreign('sis_localupz_id')->references('id')->on('sis_localupzs');
            $table->foreign('sis_barrio_id')->references('id')->on('sis_barrios');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->unique(['sis_barrio_id','sis_localupz_id'],'upzbar_un1');
            $table->timestamps();
        });
        Schema::create('h_sis_upzbarris', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('sis_localupz_id')->unsigned()->comment('CAMPO ID LOCALIDAD UPZ');
            $table->integer('sis_barrio_id')->unsigned()->comment('CAMPO ID DEL BARRIO');
            $table->Integer('simianti_id')->default(0)->comment('IDENTIFICADOR EN EL SIMI ANTIGUO');
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
        Schema::dropIfExists('h_sis_upzbarris');
        Schema::dropIfExists('sis_upzbarris');
    }
}
