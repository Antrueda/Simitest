<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAeRecursosTable extends Migration
{
    private $tablaxxx = 'ae_recursos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('ae_encuentro_id')->unsigned()->comment('ACTA DE ENCUENTO DUEÑA DEL RECURSO');
            $table->integer('ae_recuadmi_id')->unsigned()->comment('RECURSO ASIGNADO AL ACTA DE ENCUENTRO');
            $table->integer('cantidad')->unsigned()->comment('CANTIDAD DEL RECURSO ASIGNADO AL ACTA DE ENCUENTRO');
            $table->foreign('ae_encuentro_id','aera_fk4')->references('id')->on('ae_encuentros');
            $table->foreign('ae_recuadmi_id','aera_fk5')->references('id')->on('ae_recuadmis');
            $table = CamposMagicos::magicosFk($table, ['aera_fk', 1, 2, 3]);
        });
        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('ae_encuentro_id')->unsigned()->comment('ACTA DE ENCUENTO DUEÑA DEL RECURSO');
            $table->integer('ae_recuadmi_id')->unsigned()->comment('RECURSO ASIGNADO AL ACTA DE ENCUENTRO');
            $table->integer('cantidad')->unsigned()->comment('CANTIDAD DEL RECURSO ASIGNADO AL ACTA DE ENCUENTRO');
            $table = CamposMagicos::h_magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_'.$this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
