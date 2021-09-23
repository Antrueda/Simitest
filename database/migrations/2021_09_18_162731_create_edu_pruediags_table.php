<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEduPruediagsTable extends Migration
{
    private $tablaxxx = 'edu_pruediags';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('fi_datos_basico_id')->unsigned()->comment('DATOS BASICOS DEL NNAJ');
            $table->foreign('fi_datos_basico_id', 'eduprudi_fk4')->references('id')->on('fi_datos_basicos');
            $table->integer('eda_grado_id')->unsigned()->comment('GRADO EN EL QUE EL NNAJ ESTA MATRICULADO AL MOMENTO DE LA PRUEBA');
            $table->foreign('eda_grado_id', 'eduprudi_fk5')->references('id')->on('eda_grados');
            $table->integer('sis_depen_id')->unsigned()->comment('DEPENDENCA EN LA QUE EL NNAJ ESTA ACTIVO AL MOMENTO DE LA PRUEBA');
            $table->date('fechdili')->unsigned()->comment('FECHA DILIGENCIAMIENTO DE LA PRUEBA');
            $table->integer('persdili_id')->unsigned()->comment('USARIO QUE DILIGENCIA LA PRUEBA');
            $table->foreign('persdili_id', 'eduprudi_fk6')->references('id')->on('users');
            $table = CamposMagicos::magicosFk($table, ['eduprudi_', 'fk1', 'fk2', 'fk3']);
        });
        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('fi_datos_basico_id')->unsigned()->comment('DATOS BASICOS DEL NNAJ');
            $table->integer('eda_grado_id')->unsigned()->comment('GRADO EN EL QUE EL NNAJ ESTA MATRICULADO AL MOMENTO DE LA PRUEBA');
            $table->integer('sis_depen_id')->unsigned()->comment('DEPENDENCA EN LA QUE EL NNAJ ESTA ACTIVO AL MOMENTO DE LA PRUEBA');
            $table->date('fechdili')->unsigned()->comment('FECHA DILIGENCIAMIENTO DE LA PRUEBA');
            $table->integer('persdili_id')->unsigned()->comment('USARIO QUE DILIGENCIA LA PRUEBA');
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
        Schema::dropIfExists('h_' . $this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx);
    }
}
