<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisDepartamentosTable extends Migration
{
    private $tablaxxx = 'sis_departamentos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sis_pais_id')->unsigned()->nullable();
            $table->string('s_departamento');
            $table->Integer('user_crea_id'); 
            $table->integer('user_edita_id');
            $table->bigInteger('sis_esta_id')->unsigned();
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();
            $table->foreign('sis_pais_id')->references('id')->on('sis_pais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tablaxxx);
    }
}
