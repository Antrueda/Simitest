<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAgRelacionsTable extends Migration
{
    private $tablaxxx = 'ag_relacions';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ag_actividad_id')->unsigned();
            $table->bigInteger('ag_recurso_id')->unsigned();
            $table->integer('i_cantidad');
            $table->bigInteger('user_crea_id')->unsigned();
            $table->bigInteger('user_edita_id')->unsigned();
            $table->bigInteger('sis_esta_id')->unsigned()->default(1);
            $table->foreign('sis_esta_id')->references('id')->on('sis_estas');
            $table->timestamps();

            $table->foreign('ag_actividad_id')->references('id')->on('ag_actividads');
            $table->foreign('ag_recurso_id')->references('id')->on('ag_recursos');
            $table->foreign('user_crea_id')->references('id')->on('users');
            $table->foreign('user_edita_id')->references('id')->on('users');
        });
<<<<<<< HEAD
        //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA RELACIONA LAS ACTIVIDADES PEDAGOGICAS CON LOS RECURSOS DENTRO DE LAS ACCIONES GRUPALES.'");
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
