<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInPreguntasTable extends Migration
{
    private $tablaxxx = 'in_preguntas';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->integer('in_libagrup_id')->unsigned()->comment('GRUPO AL QUE PERTENECE LA PREGUNTA');
            $table->integer('temacombo_id')->unsigned()->comment('PREGUNTA QUE SE LE ASIGAN AL GRUPO');
            $table->foreign('in_libagrup_id', 'inpr_fk1')->references('id')->on('in_ligrus');
            $table->foreign('temacombo_id', 'inpr_fk2')->references('id')->on('temacombos');
            $table = CamposMagicos::magicos($table);
        });
       //DB::statement("ALTER TABLE `{$this->tablaxxx}` comment 'TABLA QUE ALMACENA LAS PREGUNTAS QUE SE LE ASIGNAN A LOS IDICADORES'");
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
