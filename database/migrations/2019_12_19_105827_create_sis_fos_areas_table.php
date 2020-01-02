<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisFosAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_fos_areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',120);
            $table->string('contexto',2)->nullable();
            $table->text('descripcion',4000)->nullable();
            $table->boolean('activo')->default(1);
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->timestamps();
            $table->engine = 'InnoDB';

            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_fos_areas');
    }
}
