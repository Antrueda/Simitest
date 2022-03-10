<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdaGradosTable extends Migration
{
    private $tablaxxx = 'eda_grados';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('s_grado')->comment('NOMBRE DEL GRADO');
            $table->integer('numero')->nullable()->comment('NUMERO DEL GRADO');
            $table = CamposMagicos::magicosFk($table, ['edgr_', 'fk1', 'fk2', 'fk3']);
        });

        Schema::create('h_' . $this->tablaxxx, function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache();
            $table->string('s_grado')->comment('NOMBRE DEL GRADO');
            $table->integer('numero')->nullable()->comment('NUMERO DEL GRADO');
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
