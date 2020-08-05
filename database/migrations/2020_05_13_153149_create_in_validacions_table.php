<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInValidacionsTable extends Migration
{
    private $tablaxxx = 'in_validacions';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->bigInteger('sis_actividad_id')->unsigned();
            $table->bigInteger('in_pregunta_id')->unsigned();
            $table->bigInteger('in_fuente_id')->unsigned();
            $table->bigInteger('sis_tabla_id')->unsigned();

            $table->bigInteger('sis_tcampo_id')->unsigned()->unique();
            $table->bigInteger('user_crea_id')->unsigned();

            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
            $table->timestamps();

            // $table->foreign('sis_actividad_id')->references('id')->on('sis_actividads');
            $table->foreign('in_fuente_id')->references('id')->on('in_fuentes');
            $table->foreign('in_pregunta_id')->references('id')->on('in_preguntas');
            $table->foreign('sis_tabla_id')->references('id')->on('sis_tablas');
            $table->foreign('sis_tcampo_id')->references('id')->on('sis_tcampos');

            $table->unique(['in_fuente_id', 'in_pregunta_id']);
        });
<<<<<<< HEAD
        //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LA OBLIGATORIEDAD DE LA RELACION ENTRE: PREGUNTAS, TABLAS Y CAMPOS REGISTRADOS EN EL SISTEMA.'");
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
