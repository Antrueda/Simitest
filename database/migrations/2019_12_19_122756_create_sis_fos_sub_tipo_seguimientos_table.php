<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisFosSubTipoSeguimientosTable extends Migration{

    public function up(){
        Schema::create('sis_fos_sub_tipo_seguimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('area_id')->unsigned();
            $table->bigInteger('seg_id')->unsigned();
            $table->text('codigo',6);
            $table->string('nombre', 120);
            $table->string('descripcion', 4000)->nullable();
            $table->boolean('activo')->default(1);
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->timestamps();
            $table->engine = 'InnoDB';

            $table->foreign('area_id')->references('id')->on('sis_fos_areas');
            $table->foreign('seg_id')->references('id')->on('sis_fos_tipo_seguimientos');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
    }

    public function down(){
        Schema::dropIfExists('sis_fos_sub_tipo_seguimientos');
    }
}
