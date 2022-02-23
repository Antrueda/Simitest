<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoMatriculaTable extends Migration
{
    private $tablaxxx = 'grupo_matriculas';
    private $tablaxxx2 = 'grupo_dias';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('s_grupo')->comment('NOMBRE DEL GRADO');
            $table->text('observacion')->comment('NOMBRE DEL GRADO');
            $table->string('horario')->comment('NOMBRE DEL GRADO');
 

            $table->integer('prm_jornada')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
            $table->foreign('prm_jornada')->references('id')->on('parametros');
            $table = CamposMagicos::magicos($table);
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('s_grupo')->comment('NOMBRE DEL GRADO');
            $table->text('observacion')->comment('NOMBRE DEL GRADO');
            $table->string('horario')->comment('NOMBRE DEL GRADO');
 
            $table->integer('prm_jornada')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');      
            $table = CamposMagicos::h_magicos($table);
        });
        Schema::create($this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('grupo_id')->unsigned()->comment('REGISTRO GRUPO');
            $table->integer('prm_dia_id')->unsigned()->comment('DIAS DEL GRUPO');
            $table->foreign('grupo_id')->references('id')->on('grupo_matriculas');
            $table->foreign('prm_dia_id')->references('id')->on('parametros');
            CamposMagicos::magicos($table);
        });

        Schema::create('h_' . $this->tablaxxx2, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');
            $table->integer('grupo_id')->unsigned()->comment('REGISTRO GRUPO');
            $table->integer('prm_dia_id')->unsigned()->comment('DIAS DEL GRUPO');
            CamposMagicos::h_magicos($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_' . $this->tablaxxx2);
        Schema::dropIfExists('h_' . $this->tablaxxx);
        Schema::dropIfExists($this->tablaxxx2);
        Schema::dropIfExists($this->tablaxxx);
    }
}

