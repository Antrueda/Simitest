<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ped_matriculas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_matricula',10);
            $table->integer('ano',4);
            $table->date('fecha_inscripcion');
            $table->integer('nnaj_id',10);
            $table->integer('grado',11);
            $table->string('estrategia',25);
            $table->integer('upi_id',4);
            $table->integer('grupo',4);
            $table->date('fecha_insercion');
            $table->date('fecha_modificacion');
            $table->string('usuario_insercion',50);
            $table->string('usuario_modificacion',50);
            $table->string('nivel_educacion',50); 
            $table->string('observaciones',50);
            $table->integer('numero_matricula',10);
            $table->integer('id_estrategia',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ped_matriculas');
    }
}
