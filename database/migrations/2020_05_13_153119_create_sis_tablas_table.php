<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSisTablasTable extends Migration
{
    private $tablaxxx = 'sis_tablas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('s_tabla')->nullable()->comment('CAMPO DE TEXTO NOMBRE DE TABLA');
            $table->string('s_descripcion')->nullable()->comment('CAMPO DE TEXTO DESCRIPCION');
            $table->integer('sis_docfuen_id')->unsigned()->comment('ID DE TABLA sis_docfuens');
            $table->foreign('sis_docfuen_id')->references('id')->on('sis_docfuens');
            $table = CamposMagicos::magicos($table);
        });
       DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LOS NOMBRES DE LAS TABLAS RELACIONADAS CON LOS FORMATOS PUBLICADOS EN EL SISTEMA'");
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
