<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInRespusTable extends Migration
{
    private $tablaxxx = 'in_respus';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('in_doc_pregunta_id')->unsigned();
            $table->bigInteger('prm_respuesta_id')->unsigned();
            $table->Integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('prm_respuesta_id')->references('id')->on('parametros');
            $table->foreign('in_doc_pregunta_id')->references('id')->on('in_doc_preguntas');
            $table->unique(['prm_respuesta_id', 'in_doc_pregunta_id']);
        });
<<<<<<< HEAD
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS RESPUESTAS CON LAS QUE SE EVALUARAN LOS INDICADORES  {$this->tablaxxx}'");
=======
        DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA'");
>>>>>>> 70ad6171092e1840d78cae2433f2e6814035c86a
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
