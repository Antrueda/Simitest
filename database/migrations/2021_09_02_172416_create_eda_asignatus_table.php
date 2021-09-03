<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdaAsignatusTable extends Migration
{
    private $tablaxxx = 'eda_asignatus';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->text('s_asignatura')->comment('NOMBRE DE LA ASIGNATURA');
            $table = CamposMagicos::magicosFk($table, ['edas_', 'fk1', 'fk2', 'fk3']);
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->text('s_asignatura')->comment('NOMBRE DE LA ASIGNATURA');
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
