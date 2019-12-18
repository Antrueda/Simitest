<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisDiagnosticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_diagnosticos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo',4);
            $table->char('simbolo')->nullable();
            $table->text('descripcion',4000);
            $table->char('sexo');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_diagnosticos');
    }
}
