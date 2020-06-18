<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSisTablasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_tablas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_tabla')->nullable();
            $table->string('s_descripcion')->nullable();
            $table->timestamps();
            
            $table->bigInteger('sis_docufuen_id')->unsigned();
            $table->foreign('sis_docufuen_id')->references('id')->on('sis_docufuens');
      
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_tablas');
    }
}
