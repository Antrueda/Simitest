<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInDocPreguntasTable extends Migration
{
    private $tablaxxx = 'in_doc_preguntas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('in_ligru_id')->unsigned();
            $table->bigInteger('sis_tcampo_id')->unsigned();
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('sis_tcampo_id')->references('id')->on('sis_tcampos');
            $table->foreign('in_ligru_id')->references('id')->on('in_ligrus');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');

            $table->unique(['in_ligru_id', 'sis_tcampo_id']);
            $table->timestamps();
        });
        // DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA'");
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
