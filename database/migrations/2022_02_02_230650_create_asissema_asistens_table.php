<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsissemaAsistensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asissema_asistens', function (Blueprint $table) {
            $table->integer('asissema_matri_id')->unsigned()->comment('ASISTENCIA SEMANAL');
            $table->date('fecha')->comment('FECHA DIA ASISTENCIA');
            $table->boolean('valor_asis')->default(0)->comment('VALOR DE ASITENCIA');
            $table->timestamps();

            $table->foreign('asissema_matri_id')->references('id')->on('asisema_matriculas')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asissema_asistens');
    }
}
