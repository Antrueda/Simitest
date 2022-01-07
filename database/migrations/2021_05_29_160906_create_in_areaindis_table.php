<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInAreaIndisTable extends Migration
{
    private $tablaxxx = 'in_areaindis';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
             $table->increments('id')->start(1)->nocache();
            $table->integer('in_indicado_id')->unsigned()->comment('INDICADOR');
            $table->integer('area_id')->unsigned()->comment('AREA');
            $table = CamposMagicos::magicosFk($table, ['arin']);
            $table->foreign('in_indicado_id', 'arin_fk4')->references('id')->on('in_indicados');
            $table->foreign('area_id', 'arin_fk5')->references('id')->on('areas');
            $table->unique(['area_id', 'in_indicado_id'], 'arin_un1');
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
             $table->increments('id')->start(1)->nocache();
            $table->integer('in_indicado_id')->unsigned()->comment('INDICADOR');
            $table->integer('area_id')->unsigned()->comment('AREA');
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
