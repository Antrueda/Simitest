<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdaAsignatuEdaGradoTable extends Migration
{
    private $tablaxxx = 'eda_asignatu_eda_grado';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('eda_asignatu_id')->unsigned()->comment('RELACION DE LA ASIGNATURA CON EL GRADO');
            $table->foreign('eda_asignatu_id','asgr_fk4')->references('id')->on('eda_asignatus');
            $table->integer('eda_grado_id')->unsigned()->comment('RELACION DEL GRADO CON LA ASIGNATURA');
            $table->foreign('eda_grado_id','asgr_fk5')->references('id')->on('eda_grados');
            $table = CamposMagicos::magicosFk($table, ['asgr_', 'fk1', 'fk2', 'fk3']);
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('eda_asignatu_id')->unsigned()->comment('RELACION DE LA ASIGNATURA CON EL GRADO');
            $table->integer('eda_grado_id')->unsigned()->comment('RELACION DEL GRADO CON LA ASIGNATURA');
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
