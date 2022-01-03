<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    private $tablaxxx = 'cursos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create($this->tablaxxx, function (Blueprint $table) {
                $table->increments('id')->start(1)->nocache();
                $table->string('s_cursos')->comment('NOMBRE DEL CURSO');
                $table->text('descripcion')->comment('DESCRIPCION DEL CURSO');
                $table->integer('tipo_curso_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
                $table->foreign('tipo_curso_id')->references('id')->on('parametros');
                $table->integer('grado_reque_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
                $table->foreign('grado_reque_id')->references('id')->on('parametros');
                $table->integer('estusuario_id')->unsigned()->nullable()->comment('CAMPO DE CAMBIO DE ESTADO');
                $table->foreign('estusuario_id')->references('id')->on('estusuarios');
                $table = CamposMagicos::magicos($table);
                });
    
            Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
                $table->increments('id')->start(1)->nocache();
                $table->string('s_cursos')->comment('NOMBRE DEL CURSO');
                $table->text('descripcion')->comment('DESCRIPCION DEL CURSO');
                $table->integer('tipo_curso_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
                $table->integer('grado_reque_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
                $table->integer('estusuario_id')->unsigned()->nullable()->comment('CAMPO ID DE DEPARTAMENTO');
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
