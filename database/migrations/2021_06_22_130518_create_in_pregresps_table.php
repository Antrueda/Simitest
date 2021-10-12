<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInPregrespsTable extends Migration
{
    private $tablaxxx = 'in_pregresps';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('in_grupregu_id')->unsigned()->comment('LLAVE FORANEA TABLA in_grupregus');
            $table->integer('prm_respuest_id')->unsigned()->comment('CAMPO PARAMETRO RESPUESTA');
            $table->foreign('prm_respuest_id')->references('id')->on('parametros');
            $table->foreign('in_grupregu_id')->references('id')->on('in_grupregus');
            $table->unique(['prm_respuest_id','in_grupregu_id'],'prre_fk4');
            $table = CamposMagicos::magicos($table);
        });

        Schema::create('h_'.$this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('in_grupregu_id')->unsigned()->comment('LLAVE FORANEA TABLA in_grupregus');
            $table->integer('prm_respuest_id')->unsigned()->comment('CAMPO PARAMETRO RESPUESTA');
            $table = CamposMagicos::h_magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS RESPUESTAS BRINDADAS A LAS PREGUNTAS ESTABLECIDAS EN EL SISTEMA'");
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
