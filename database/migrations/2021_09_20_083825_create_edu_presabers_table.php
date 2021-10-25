<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEduPresabersTable extends Migration
{
    private $tablaxxx = 'edu_presabers';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('edu_pruediag_id')->unsigned()->comment('PRUEBA DIGNOSTICA DEL NNAJ');
            $table->foreign('edu_pruediag_id', 'edupresa_fk4')->references('id')->on('edu_pruediags');
            $table->integer('eda_asignatu_id')->unsigned()->comment('ASIGNATURA CON LA QUE SE LE HACE LA PRUEBA DIAGNOSTICA');
            $table->foreign('eda_asignatu_id', 'edupresa_fk5')->references('id')->on('eda_asignatus');
            $table->integer('eda_presaber_id')->unsigned()->comment('PRESABER CON EL QUE SE LE SE REALIZA LA PRUEBA DIAGNOSTICA');
            $table->foreign('eda_presaber_id', 'edupresa_fk6')->references('id')->on('eda_presabers');
            $table->unique(['edu_pruediag_id','eda_asignatu_id','eda_presaber_id'],'edupresa_un1');
            $table = CamposMagicos::magicosFk($table, ['edupresa_', 'fk1', 'fk2', 'fk3']);
        });
        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('edu_pruediag_id')->unsigned()->comment('PRUEBA DIGNOSTICA DEL NNAJ');
            $table->integer('eda_asignatu_id')->unsigned()->comment('ASIGNATURA CON LA QUE SE LE HACE LA PRUEBA DIAGNOSTICA');
            $table->integer('eda_presaber_id')->unsigned()->comment('PRESABER CON EL QUE SE LE SE REALIZA LA PRUEBA DIAGNOSTICA');
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
