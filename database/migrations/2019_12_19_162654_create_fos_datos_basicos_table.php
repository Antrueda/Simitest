<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFosDatosBasicosTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('fos_datos_basicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_nnaj_id')->unsigned();
            $table->bigInteger('sis_dependencia_id')->unsigned();
            $table->date('d_fecha_diligencia');
            $table->bigInteger('prm_area_id')->unsigned();
            $table->bigInteger('prm_seguimiento_id')->unsigned();
            $table->bigInteger('prm_sub_tipo_id')->unsigned();
            $table->text('s_observacion');
            $table->bigInteger('fi_composicion_fami_id')->unsigned()->nullable();
            $table->boolean('activo')->default(1);
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->timestamps();
            $table->engine = 'InnoDB';

            $table->foreign('sis_nnaj_id')->references('id')->on('sis_nnajs');
            $table->foreign('sis_dependencia_id')->references('id')->on('sis_dependencias');
            $table->foreign('prm_area_id')->references('id')->on('sis_fos_areas');
            $table->foreign('prm_seguimiento_id')->references('id')->on('sis_fos_tipo_seguimientos');
            $table->foreign('prm_sub_tipo_id')->references('id')->on('sis_fos_sub_tipo_seguimientos');
            $table->foreign('fi_composicion_fami_id')->references('id')->on('fi_composicion_famis');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('fos_datos_basicos');
    }
}