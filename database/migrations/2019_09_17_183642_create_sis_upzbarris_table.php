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
            $table->bigIncrements('id')->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->bigInteger('sis_localupz_id')->unsigned()->comment('CAMPO ID LOCALIDAD UPZ');
            $table->bigInteger('sis_barrio_id')->unsigned()->comment('CAMPO ID DEL BARRIO');
            $table->Integer('simianti_id')->default(0)->comment('IDENTIFICADOR EN EL SIMI ANTIGUO');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_localupz_id')->references('id')->on('sis_localupzs');
            $table->foreign('sis_barrio_id')->references('id')->on('sis_barrios');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->unique(['sis_barrio_id','sis_localupz_id']);
            $table->timestamps();
        });
        Schema::create('h_sis_upzbarris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_localupz_id')->unsigned();
            $table->bigInteger('sis_barrio_id')->unsigned();
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
        Schema::dropIfExists('h_sis_upzbarris');
        Schema::dropIfExists('sis_upzbarris');
    }
}
