<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAeAsistenciaSisNnajTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ae_asistencia_sis_nnaj', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('ae_asistencia_id')->unsigned();
            $table->integer('sis_nnaj_id')->unsigned();
            $table->integer('sis_esta_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_crea_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->integer('user_edita_id')->unsigned()->comment('PARAMETRO TIPO DE AUTORIZACION');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ae_asistencia_id')->references('id')->on('ae_asistencias');
            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });

        Schema::create('h_ae_asistencia_sis_nnaj', function (Blueprint $table) {
            $table->id();
            $table->integer('ae_asistencia_id')->unsigned();
            $table->integer('sis_nnaj_id')->unsigned();
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
        Schema::dropIfExists('ae_asistencia_sis_nnaj');
        Schema::dropIfExists('h_ae_asistencia_sis_nnaj');
    }
}
